@extends('layouts.dashboardadmin')

@section('title', 'Manajemen User')

@section('content')

<!-- Main Content -->
<div class="flex-1 flex flex-col text-center">
    <!-- Header -->
    <header class="bg-white p-4 shadow">
        <div class="container mx-auto">
            <h1 class="text-xl font-semibold text-gray-800">Aplikasi Kursus Bahasa Asing</h1>
        </div>
    </header>

    <!-- Success & Error Messages -->
    @if(session('success'))
        <div class="container mx-auto mt-4 px-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="container mx-auto mt-4 px-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <div class="container mx-auto mt-4 flex justify-end px-4">
        <a href="{{ route('admin.users.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm shadow">
            + Tambah User
        </a>
    </div>

<div class="overflow-x-auto m-4">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full table-auto border border-gray-300">
        <thead class="bg-gray-700 text-white">
            <tr>
                <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">No</th>
                <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Nama</th>
                <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Email</th>
                <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Role</th>
                <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Telepon</th>
                <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @forelse($users as $index => $user)
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-6 py-4">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 px-6 py-4">{{ $user->name }}</td>
                    <td class="border border-gray-300 px-6 py-4">{{ $user->email }}</td>
                    <td class="border border-gray-300 px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full 
                            @if($user->role === 'admin') bg-red-100 text-red-800
                            @elseif($user->role === 'tutor') bg-blue-100 text-blue-800
                            @else bg-green-100 text-green-800
                            @endif">
                            {{ ucfirst($user->role) }}
                        </span>
                    </td>
                    <td class="border border-gray-300 px-6 py-4">{{ $user->phone_number ?? '-' }}</td>
                    <td class="border border-gray-300 px-6 py-4 space-x-2">
                        <a href="{{ route('admin.users.edit', $user->id) }}" 
                           class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm shadow-sm transition">
                            Edit
                        </a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm shadow-sm transition"
                                    onclick="return confirm('Yakin ingin menghapus user {{ $user->name }}?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="border border-gray-300 px-6 py-4 text-center text-gray-500">
                        Tidak ada data user
                    </td>
                </tr>
            @endforelse
        </tbody>
        </table>
    </div>
</div>

</div>
@endsection