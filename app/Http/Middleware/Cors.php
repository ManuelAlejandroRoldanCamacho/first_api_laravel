<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{

    public function handle(Request $request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*') //permite todos los origenes de peticiones
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS') //permite el acceso a estos metodos
            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
              //definimos las solicitudes permitidas (autenticacion, recepcion de datos, etc...)
    }

}
