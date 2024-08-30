<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserAuthentication
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
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                dd("true");
                return $next($request);
            }else{
                return redirect()->route('admin.login')->with('error', 'You are not authorized to access this site.');
            }
        }else{
            return redirect()->route('admin.login');
        }

    }
}
