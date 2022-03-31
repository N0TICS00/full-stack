<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;    
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
        if(($path == "overview" || $path == "logout" || $path == "faq" || $path == "courses/1" || $path == "courses/2") && (!Session::get('user'))){
            return redirect('/');
        };
        return $next($request);
    }
}
