<?php

namespace Arispati\AppLocale\Middleware;

use Closure;
use Arispati\AppLocale\AppLocale as App;

class AppLocale
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
        if ($request->hasHeader('App-Locale')) {
            (new App())->setLocale($request->header('App-Locale'));
        }

        return $next($request);
    }
}
