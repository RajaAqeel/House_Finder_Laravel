<?php

namespace App\Http\Middleware;

use Closure;

class HouseOwnerMiddleware
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
        if(Auth::user()->user_type == "House Owner")
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }
    }
}
