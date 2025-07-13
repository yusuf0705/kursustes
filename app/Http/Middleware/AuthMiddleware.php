<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('logout') || $request->routeIs('logout')) {
            return $next($request);
        }

        if (!Auth::check()) {
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'message' => 'Unauthorized. Please login first.',
                    'redirect' => route('login')
                ], 401);
            }
                         
            return redirect()->route('login')
                ->with('error', 'Please login to access this page.');
        }

      
        $currentUser = Auth::user();
        
      
        
        session([
            'current_user_id' => $currentUser->id,
            'current_user_email' => $currentUser->email,
            'current_user_role' => $currentUser->role
        ]);

        return $next($request);
    }
}