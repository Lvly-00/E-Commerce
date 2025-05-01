<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\RedirectAdmin;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            HandleInertiaRequests::class,
        ]);

        // $middleware->alias(['admin' =>AdminMiddleware::class]);
        // $middleware->alias(['redirectAdmin' => RedirectAdmin::class]);


        $middleware->alias([
            'admin' =>AdminMiddleware::class

            // 'role' => RoleMiddleware::class,
            // 'guest' => RedirectIfAuthenticated::class
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
