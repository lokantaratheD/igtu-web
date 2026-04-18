<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika ada data 'locale' di session, ubah bahasa aplikasi
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }
        //check
        return $next($request);
    }
}