<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class DataOperatorMiddleware
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
        if(Auth::user()->user_type == "Data Operator")
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }
    }
}
