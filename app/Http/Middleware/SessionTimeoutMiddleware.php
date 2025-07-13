<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionTimeoutMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (Auth::check()) {
            $lastActivity = session('last_activity', time());

            $timeout = config('session.lifetime') * 60;

            if (time() - $lastActivity > $timeout) {
                Auth::logout();
                session()->invalidate();
                session()->regenerateToken();

                return redirect()->route('login')
                    ->with('error', 'Session expired. Please login again.');
            }

            session(['last_activity' => time()]);
        }

        return $next($request);
    }
}
