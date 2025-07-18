<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pelajar;
use App\Models\Tutor; 
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::oldest()->get();
        return view('admin_tutor.user_crud.index', compact('users'));
    }

    public function create()
    {
        return view('admin_tutor.user_crud.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
            'role' => 'required|in:admin,tutor,pelajar',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'role' => $request->role,
                'email_verified_at' => now(),
            ]);

            match ($request->role) {
                'pelajar' => Pelajar::create(['user_id' => $user->id, 'name' => $user->name]),
                'tutor'   => Tutor::create(['user_id' => $user->id, 'name' => $user->name]),
                'admin'   => Admin::create(['user_id' => $user->id, 'name' => $user->name]),
            };

            return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }

    public function edit(User $user)
    {
        return view('admin_tutor.user_crud.edit', compact('user'));
    }

    public function update(Request $request, User $user)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
        'phone_number' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:500',
        'role' => 'required|in:admin,tutor,pelajar',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    try {
        $oldRole = $user->role; // Simpan role lama sebelum update
        $data = $request->only(['name', 'email', 'phone_number', 'address', 'role']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        if ($oldRole !== $request->role) {
            match ($oldRole) {
                'admin' => Admin::where('user_id', $user->id)->delete(),
                'tutor' => Tutor::where('user_id', $user->id)->delete(),
                'pelajar' => Pelajar::where('user_id', $user->id)->delete(),
            };

            match ($request->role) {
                'admin' => Admin::create(['user_id' => $user->id, 'name' => $user->name]),
                'tutor' => Tutor::create(['user_id' => $user->id, 'name' => $user->name]),
                'pelajar' => Pelajar::create(['user_id' => $user->id, 'name' => $user->name]),
            };
        } else {
            match ($request->role) {
                'admin' => Admin::where('user_id', $user->id)->update(['name' => $user->name]),
                'tutor' => Tutor::where('user_id', $user->id)->update(['name' => $user->name]),
                'pelajar' => Pelajar::where('user_id', $user->id)->update(['name' => $user->name]),
            };
        }

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui!');
    } catch (\Exception $e) {
        return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
    }
}


    public function destroy(User $user)
    {
        try {
            if ($user->id === Auth::id()) {
                return back()->with('error', 'Anda tidak dapat menghapus akun sendiri!');
            }

            if ($user->role === 'admin' && User::where('role', 'admin')->count() <= 1) {
                return back()->with('error', 'Tidak dapat menghapus admin terakhir!');
            }

            $user->delete();

            return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
