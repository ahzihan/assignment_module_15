<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        $key=$request->key;

        if('123xyz'==$key){
            return $next($request);
        }else{
            return response()->json('Invalid',401);
        }
    }
}
