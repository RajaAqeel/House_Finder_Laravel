<?php

namespace App\Http\Middleware;

use Closure;

class ServiceProviderMiddleware
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
        if(Auth::user()->user_type == "Service Provider")
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }
    }
}
