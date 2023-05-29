<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequestMiddleware
{
    public function handle($request, Closure $next)
    {
        // Log request method and URL
        Log::info('Request Method: ' . $request->method('POST'));
        Log::info('Request URL: ' . $request->fullUrl());

        return $next($request);
    }
}

