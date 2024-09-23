<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class JwtTesteParametro
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $token = $request->query('token');

        if (!$token) {
            return response()->json(['error' => 'Token incorreto.'], 401);
        }

        try {
            if (!$user = JWTAuth::setToken($token)->authenticate()) {
                return response()->json(['error' => 'Usuario nâo encontrado.'], 404);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Token invalido.'], 401);
        }

        return $next($request);
    }
}
