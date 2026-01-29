@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="mb-8">
        <h1 class="text-4xl font-black text-black uppercase tracking-tight mb-2">Dashboard</h1>
        <p class="text-lg font-bold text-gray-600">Welcome back, Commander.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Manage Users Card -->
        <a href="{{ route('admin.users.index') }}" class="block bg-white border-2 border-black p-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-black text-black uppercase group-hover:text-blue-600 transition-colors">Manage Users</h2>
                <div class="bg-blue-100 border-2 border-black p-2 rounded-full group-hover:bg-blue-500 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
            </div>
            <p class="font-bold text-gray-500">View, edit, and delete registered users from the system database.</p>
            <div class="mt-6 flex justify-end">
                <span class="inline-block px-3 py-1 bg-black text-white text-xs font-bold uppercase tracking-widest">Access</span>
            </div>
        </a>

        <!-- Change Password Card -->
        <a href="{{ route('admin.password.change') }}" class="block bg-white border-2 border-black p-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-black text-black uppercase group-hover:text-purple-600 transition-colors">Security</h2>
                <div class="bg-purple-100 border-2 border-black p-2 rounded-full group-hover:bg-purple-500 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
            </div>
            <p class="font-bold text-gray-500">Update your administrator password to keep your account secure.</p>
            <div class="mt-6 flex justify-end">
                <span class="inline-block px-3 py-1 bg-black text-white text-xs font-bold uppercase tracking-widest">Update</span>
            </div>
        </a>
    </div>
@endsection
