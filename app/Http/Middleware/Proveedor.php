<?php

namespace App\Http\Middleware;

use Closure;

class Proveedor
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

        if ( $request->user()->type != 'proveedor' ) {
            return response()->json([
                'mensaje' => 'Acceso a la ruta denegado'], 401);
        }

        return $next($request);
    }
}
