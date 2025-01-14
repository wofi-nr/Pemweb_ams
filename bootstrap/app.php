<?php


use App\Http\Middleware\WisLogin;
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
        // Nah kie alias Middleware nggo ngload file "app/Http/Middleware/WisLogin.php" ben kena di manfatna nang route "routes/web.php" nganggo grup route "weslogin"
        $middleware->alias([
            'wis_login_urung_kie_nek_urung_ya_aja_akses_sing_routing_nang_jero_kene' => WisLogin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
