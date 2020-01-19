<?php

namespace App\Http\Middleware;

use Closure;

class LanguageMiddleware
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
        if (session('local') !== null && app()->getLocale() !== session('local')) {
            app()->setLocale(session('local'));
        }

        return $next($request);
    }
}
