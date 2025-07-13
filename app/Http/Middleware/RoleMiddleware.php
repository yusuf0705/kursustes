<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$roles
     * @return mixed
     */
   public function handle(Request $request, Closure $next, ...$roles)
{
    if (!Auth::check()) {
       
        
        return redirect()->route('login')
            ->with('error', 'Silakan login untuk mengakses halaman ini.');
    }

    $user = Auth::user();
    $userRole = $user->role;

    if (!in_array($userRole, $roles)) {
     
        switch ($userRole) {
            case 'admin':
                return redirect()->route('dashboardadmin')
                    ->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
            case 'tutor':
                return redirect()->route('dashboardadmin')
                    ->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
            case 'pelajar':
                return redirect()->route('pelajar.dashboard')
                    ->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
            default:
                return redirect()->route('home')
                    ->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }
    }

    return $next($request);
}
}