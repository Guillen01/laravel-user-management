@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="text-center py-20">
        <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-6xl mb-6">
            Welcome to <span class="text-blue-600">User Manager</span>
        </h1>
        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
            A simple, secure, and efficient way to manage users and roles. Built with Laravel and Tailwind CSS.
        </p>
        <div class="mt-10 flex justify-center gap-4">
            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg shadow-lg transition transform hover:-translate-y-1">
                        Go to Admin Panel
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg shadow-lg transition transform hover:-translate-y-1">
                        Go to Dashboard
                    </a>
                @endif
            @else
                <a href="{{ route('register') }}" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg shadow-lg transition transform hover:-translate-y-1">
                    Get Started
                </a>
                <a href="{{ route('login') }}" class="px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 md:py-4 md:text-lg shadow-sm transition transform hover:-translate-y-1">
                    Log In
                </a>
            @endauth
        </div>
    </div>
@endsection
