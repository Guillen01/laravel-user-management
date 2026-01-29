@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="bg-white overflow-hidden shadow-lg rounded-xl border border-gray-100 mb-8">
            <div class="p-6 sm:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
                    <span class="px-3 py-1 text-xs font-semibold text-purple-800 bg-purple-100 rounded-full">Administrator</span>
                </div>

                <p class="text-lg text-gray-600 mb-8">Welcome back, <span class="font-semibold text-gray-900">{{ Auth::user()->name }}</span>. You have full access to manage the system.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a href="{{ route('admin.users.index') }}" class="block p-6 bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:border-blue-300 transition group">
                        <div class="flex items-center mb-2">
                            <div class="p-2 bg-blue-100 rounded-lg text-blue-600 mr-3 group-hover:bg-blue-600 group-hover:text-white transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-600 transition">Manage Users</h3>
                        </div>
                        <p class="text-gray-500 text-sm">View, edit, and delete registered users.</p>
                    </a>

                    <a href="{{ route('admin.password.change') }}" class="block p-6 bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:border-gray-400 transition group">
                        <div class="flex items-center mb-2">
                            <div class="p-2 bg-gray-100 rounded-lg text-gray-600 mr-3 group-hover:bg-gray-600 group-hover:text-white transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 transition">Change Password</h3>
                        </div>
                        <p class="text-gray-500 text-sm">Update your administrator password.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
