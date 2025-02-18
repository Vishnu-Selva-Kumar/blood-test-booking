<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use \Symfony\Component\HttpKernel\Exception\HttpException;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        apiPrefix: 'api/v1/',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })

    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (HttpException $exception, Request $request) {

            // if ($request->is(['admin', 'admin/*'])) {
            if (true) {

                if ($exception->getStatusCode() == 400) {
                    return response()->view("errors.404", [], 400);
                }
                if ($exception->getStatusCode() == 403) {
                    return response()->view("errors.404", [], 403);
                }
                if ($exception->getStatusCode() == 404) {
                    return response()->view("errors.404", [], 404);
                }

                if ($exception->getStatusCode() == 500) {
                    return response()->view("errors.404", [], 500);
                }
                if ($exception->getStatusCode() == 503) {
                    return response()->view("errors.404", [], 503);
                }
            }

            if ($exception->getStatusCode() == 404) {
                return response()->view("errors.404", [], 404);
            }

        });
    })

    ->create();
