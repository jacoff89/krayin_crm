<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
use Webkul\Installer\Http\Middleware\CanInstall;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(CanInstall::class);

        /**
         * On production the app runs behind a reverse proxy that terminates SSL, so
         * X-Forwarded-* headers from it must be trusted, otherwise Laravel generates
         * http:// URLs and secure cookies break. Requests reach PHP through the inner
         * nginx container, i.e. from the docker network (see docker-compose.prod.yml).
         */
        $middleware->trustProxies(at: env('TRUSTED_PROXIES', '172.19.0.0/16'));

        $middleware->encryptCookies(except: [
            'dark_mode',
            'sidebar_collapsed',
        ]);

        /**
         * The admin path is configurable, so these exemptions have to follow it. Hard
         * coding "admin/" left the inbound parse webhook and the web form endpoint
         * behind CSRF on any installation that sets APP_ADMIN_PATH, where they answer
         * 419 instead of working.
         */
        $adminPath = trim(env('APP_ADMIN_PATH', 'admin'), '/');

        $middleware->validateCsrfTokens(except: [
            $adminPath.'/mail/inbound-parse',
            $adminPath.'/web-forms/forms/*',
        ]);

        $middleware->api(prepend: [
            EnsureFrontendRequestsAreStateful::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
