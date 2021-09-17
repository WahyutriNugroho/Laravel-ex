<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; // agar bisa memakai

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // cek apakah user atau bukan
        if (Auth::user() && Auth::user()->roles == 'ADMIN') {
            //jika ya arahkan ke request
            return $next($request);
        }

        // jika tidak arahkan ke halaman home
        return redirect('/');
    }
}
