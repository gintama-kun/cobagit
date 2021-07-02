<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CekStatus
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
        
        // if (Auth::check() && Auth::user()->status == 'b') {
        //     return $next($request);
        // }


       
       if (Auth::user()->status == 'a' || Auth::user()->status == null) {
           
            return $next($request);
        }
        else
        {
            return redirect('/blocked');
        }
    }
}
