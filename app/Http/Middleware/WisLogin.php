<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class WisLogin {
    /**
     * File kie daftarna lah ming "withMiddleware" nang kene manggone "bootstrap/app.php" ben kena dimanfatna nang "routes/web.php" nanggo grup routing "wislogin"
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response {
        // Ngecek status login nganggo helper sing nang kene : app/Helpers/AMSHelpers.php
        if (!cekLogin()) {
            // Nah karena wis di cek, satatus urung login akhire ya mbalik ming halaman login lah, nang kene nggawa pesan, ben wonge ngerti
            return redirect()->route('auth')->withErrors(['error' => 'Anda harus login terlebih dahulu.']);
        }
        // Nah kie karan bener kabeh dadi Lolos, akhire lanjutlah ming reques2 liane mening.
        return $next($request);
    }


}