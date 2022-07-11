<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OriginSessionCookie
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
        if($request->user() == null){
            return $next($request);
        }

        //Cuando el usuario inicie sesión le almacene una Cookie llamada origin_sesion si el usuario tiene el rol 1 y la IP de origen es 127.0.0.1
        
        if($request->user()->idRol == 1 && $request->ip() == '127.0.0.1'){
            if($request->hasCookie('origin_sesion')) {
                return $next($request);    
            }
            
            return $next($request)
                ->withCookie(cookie()->forever('origin_sesion', $request->ip()));
        }

        return $next($request);
    }
}
