<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ClientMiddleware
{
    public function handle($request, Closure $next)
    {
        Log::info('ClientMiddleware triggered');

        if (Auth::check()) {
            Log::info('User is authenticated');
            if (Auth::user()->role == 'client') {
                Log::info('User is a client');
                return $next($request);
            } else {
                Log::info('User is not a client');
            }
        } else {
            Log::info('User is not authenticated');
        }

        return redirect('/login')->withErrors(['message' => 'You are not authorized to access this page.']);
    }
}