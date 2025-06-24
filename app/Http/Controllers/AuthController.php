<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Show the registration form
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Process registration request
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    // Buat user baru
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'address' => $request->address,
        'phone_number' => $request->phone_number,
        'role' => $request->role,
    ]);

    // Simpan data tambahan sesuai role
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


    /**
     * Show the login form
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Process login request
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Redirect based on user role
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->intended('/dashboardadmin');
            } elseif ($user->role === 'tutor') {
                return redirect()->intended('/dashboardadmin');
            } else {
                return redirect()->intended('/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan tidak valid.',
        ])->withInput($request->except('password'));
    }

    /**
     * Process logout request
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}