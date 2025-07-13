<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {
        if (Auth::check() && request()->has('auto_redirect')) {
            return $this->redirectBasedOnRole(Auth::user());
        }
        
        return view('auth.register');
    }

    public function registerSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'role' => 'required|string|in:admin,tutor,pelajar',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'role' => $request->role,
        ]);

        switch ($request->role) {
            case 'pelajar':
                \App\Models\Pelajar::create([
                    'user_id' => $user->id,
                    'name' => $request->name,
                ]);
                break;
            case 'tutor':
                \App\Models\Tutor::create([
                    'user_id' => $user->id,
                    'name' => $request->name,
                ]);
                break;
            case 'admin':
                \App\Models\Admin::create([
                    'user_id' => $user->id,
                    'name' => $request->name,
                ]);
                break;
        }

        return redirect()->route('login')
            ->with('success', 'Pendaftaran berhasil! Silakan login dengan akun baru Anda.');
    }

    public function login()
    {
        if (Auth::check() && request()->has('auto_redirect')) {
            return $this->redirectBasedOnRole(Auth::user());
        }
        
        if (request()->has('force_logout')) {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }
        
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();
        
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors([
                'email' => 'Email atau password yang Anda masukkan tidak valid.',
            ])->withInput($request->except('password'));
        }

       
        if (Auth::check()) {
            Auth::logout();
        }
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        $request->session()->start();
        
        Auth::login($user, $request->boolean('remember'));
        
        $request->session()->regenerate();
        
        $sessionData = [
            'login_time' => now()->toDateTimeString(),
            'user_id' => $user->id,
            'user_role' => $user->role,
            'user_email' => $user->email,
            'last_activity' => time(),
            'session_token' => hash('sha256', $user->id . time() . rand(1000, 9999))
        ];
        
        foreach ($sessionData as $key => $value) {
            $request->session()->put($key, $value);
        }
        
      

        return $this->redirectBasedOnRole($user);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->flush();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        $cookies = [];
        foreach ($request->cookies as $name => $value) {
            if (str_contains($name, 'laravel') || str_contains($name, 'session')) {
                $cookies[] = cookie()->forget($name);
            }
        }
        
        // Return response
        if ($request->ajax() || $request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Logged out successfully',
                'redirect' => route('login')
            ], 200);
        }
        
        $response = redirect()->route('login')
            ->with('success', 'You have been logged out successfully.');
            
        // Attach cookies to response
        foreach ($cookies as $cookie) {
            $response->withCookie($cookie);
        }
        
        return $response;
    }

    private function redirectBasedOnRole($user)
    {
        
        switch ($user->role) {
            case 'admin':
                return redirect()->route('dashboardadmin');
            case 'tutor':
                return redirect()->route('dashboardadmin');
            case 'pelajar':
                return redirect()->route('pelajar.dashboard');
            default:
                return redirect()->route('home');
        }
    }
}