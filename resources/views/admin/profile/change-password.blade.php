@extends('layouts.admin')

@section('title', 'Change Password')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="mb-8 flex items-center gap-2">
            <a href="{{ route('admin.dashboard') }}" class="p-2 bg-white border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h1 class="text-3xl font-black text-black uppercase tracking-tight">Change Password</h1>
        </div>

        <div class="bg-white border-2 border-black p-8 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
            <form action="{{ route('admin.password.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="current_password" class="block text-sm font-black text-black mb-2 uppercase tracking-wide">Current Password</label>
                    <input type="password" name="current_password" id="current_password" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all font-bold placeholder-gray-400" required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-black text-black mb-2 uppercase tracking-wide">New Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all font-bold placeholder-gray-400" required>
                </div>

                <div class="mb-8">
                    <label for="password_confirmation" class="block text-sm font-black text-black mb-2 uppercase tracking-wide">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all font-bold placeholder-gray-400" required>
                </div>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('admin.dashboard') }}" class="px-6 py-3 font-bold text-black bg-gray-200 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all uppercase tracking-wide">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-3 font-bold text-white bg-purple-600 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all uppercase tracking-wide">
                        Change Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
