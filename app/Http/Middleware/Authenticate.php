<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\AuthenticationException; 

class Authenticate extends Middleware
{
    protected function redirectTo($request): ? string
    {
        /*
        $exception = "";

        if ($exception instanceof TokenExpiredException) {
            return response()->json(['error' => 'Token ha expirado'], 401);
        } elseif ($exception instanceof TokenInvalidException) {
            return response()->json(['error' => 'Token no es válido'], 401);
        } elseif ($exception instanceof JWTException) {
            return response()->json(['error' => 'Error relacionado con JWT'], 401);
        } elseif ($exception instanceof UnauthorizedHttpException) {
            return response()->json(['error' => 'No autorizado'], 401);
        } elseif ($exception instanceof AuthenticationException) {
            return response()->json(['error' => 'No autenticado'], 401);
        }*/

        return route('articles.index');
    }
}