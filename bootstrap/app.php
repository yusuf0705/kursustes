<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register middleware aliases
        $middleware->alias([
            'session.timeout' => \App\Http\Middleware\SessionTimeoutMiddleware::class,
              'role' => \App\Http\Middleware\RoleMiddleware::class,
             'auth.custom' => \App\Http\Middleware\AuthMiddleware::class,
        ]);
        
        $middleware->web(append: [
            \App\Http\Middleware\SessionTimeoutMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();