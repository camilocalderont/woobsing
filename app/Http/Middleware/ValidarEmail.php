<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidarEmail
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
        //Si la cuenta no está verificada mediante el campo email_verified_at, lo redirija a una página /verificación
        if( $request->user()->email_verified_at == null && 
            $request->route()->uri != 'verificacion'){
            //return redirect('/verificacion');            
        }


        return $next($request);
    }


}
