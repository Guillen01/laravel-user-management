@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-5xl mx-auto">
        <!-- Page Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4 border-b-2 border-black pb-6">
            <div class="flex items-center gap-3">
                <div class="p-3 bg-yellow-300 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                    <x-ui.icon name="dashboard" class="w-6 h-6 text-black" />
                </div>
                <div>
                    <h1 class="text-4xl font-black text-black uppercase tracking-tight leading-none">Dashboard</h1>
                    <p class="text-sm font-bold text-gray-500 mt-1">Overview of your account.</p>
                </div>
            </div>

            <div class="bg-white border-2 border-black px-4 py-2 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] font-bold text-sm flex items-center gap-2">
                <div class="w-2 h-2 bg-green-500 rounded-full border border-black"></div>
                System Online
            </div>
        </div>

        <!-- Welcome Card -->
        <x-ui.card class="mb-8 bg-blue-50">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-black text-black uppercase tracking-tight mb-2">Hello, {{ Auth::user()->name }}!</h2>
                    <p class="text-gray-700 font-bold max-w-xl">You are successfully logged in. This is your personal dashboard where you can manage your account settings and view your profile information.</p>
                </div>
                <div class="flex-shrink-0">
                    <span class="inline-block px-4 py-2 bg-white border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] font-black uppercase tracking-wide text-sm">
                        {{ ucfirst(Auth::user()->role) }} Account
                    </span>
                </div>
            </div>
        </x-ui.card>

        <!-- Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Profile Status -->
            <div class="bg-white border-2 border-black p-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-black text-black uppercase tracking-tight group-hover:text-blue-600 transition-colors">Account Status</h3>
                    <div class="p-2 bg-green-100 border-2 border-black rounded-full">
                        <x-ui.icon name="check" class="w-5 h-5 text-green-700" />
                    </div>
                </div>
                <p class="text-sm font-bold text-gray-500 mb-4">Your account is fully verified and active.</p>
                <div class="w-full bg-gray-200 h-2 border-2 border-black rounded-full overflow-hidden">
                    <div class="bg-green-500 h-full w-full"></div>
                </div>
                <p class="text-xs font-bold text-right mt-2 text-green-600">100% Complete</p>
            </div>

            <!-- Email Info -->
            <div class="bg-white border-2 border-black p-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-black text-black uppercase tracking-tight group-hover:text-purple-600 transition-colors">Contact Info</h3>
                    <div class="p-2 bg-purple-100 border-2 border-black rounded-full">
                        <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
                <p class="text-sm font-bold text-gray-500 mb-1">Registered Email:</p>
                <p class="text-base font-black text-black break-all">{{ Auth::user()->email }}</p>
            </div>

            <!-- Security -->
            <div class="bg-white border-2 border-black p-6 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all group">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-black text-black uppercase tracking-tight group-hover:text-red-600 transition-colors">Security</h3>
                    <div class="p-2 bg-red-100 border-2 border-black rounded-full">
                        <x-ui.icon name="lock" class="w-5 h-5 text-red-700" />
                    </div>
                </div>
                <p class="text-sm font-bold text-gray-500 mb-4">Manage your password and security settings.</p>
                <button class="w-full py-2 bg-gray-100 border-2 border-black font-bold text-xs uppercase hover:bg-gray-200 transition-colors">
                    Update Settings
                </button>
            </div>
        </div>
    </div>
@endsection
