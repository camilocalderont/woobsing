<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ValidarLastLogin
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
        //Si la última sesión del usuario fue hace más de un día lo redirija a una página llamada /sesiones        
        $yesterday = Carbon::yesterday('America/Bogota');
        $lastLogin = Carbon::createFromFormat('Y-m-d H:i:s', $request->user()->last_login)->timezone('America/Bogota');


        if( $yesterday->lt($lastLogin) && 
            $request->route()->uri != 'sesiones'){
            //return redirect('/sesiones');            
        }

        return $next($request);
    }
}
