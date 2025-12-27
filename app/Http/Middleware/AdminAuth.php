<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah ada session 'id' (artinya sudah login)
        if (!session()->has('id')) {
            // Kalau belum login, redirect ke halaman login
            return redirect('/admin/login')->with('error', 'Silakan login terlebih dahulu');
        }

        // Kalau sudah login, lanjutkan request
        return $next($request);
    }
}