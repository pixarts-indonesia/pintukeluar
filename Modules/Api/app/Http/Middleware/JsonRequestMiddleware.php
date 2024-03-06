<?php

namespace Modules\Api\app\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JsonRequestMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->expectsJson()) {
            return $next($request);
        }

        return response()->json(['error' => 'Invalid Request.'], 405);
    }
}
