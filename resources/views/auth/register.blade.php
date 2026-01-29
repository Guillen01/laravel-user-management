@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="flex justify-center items-center min-h-[calc(100vh-200px)]">
        <div class="w-full max-w-md bg-white p-8 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
            <h2 class="text-3xl font-black mb-6 text-center text-black uppercase tracking-tight">Create Account</h2>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block text-sm font-bold text-black mb-2 uppercase">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all placeholder-gray-400" placeholder="John Doe" required autofocus>
                </div>

                <div class="mb-5">
                    <label for="email" class="block text-sm font-bold text-black mb-2 uppercase">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all placeholder-gray-400" placeholder="name@example.com" required>
                </div>

                <div class="mb-5">
                    <label for="password" class="block text-sm font-bold text-black mb-2 uppercase">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all placeholder-gray-400" placeholder="••••••••" required>
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-bold text-black mb-2 uppercase">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all placeholder-gray-400" placeholder="••••••••" required>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-4 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all uppercase tracking-wide">
                    Register
                </button>
            </form>

            <p class="mt-8 text-center text-sm font-medium text-gray-600">
                Already have an account? <a href="{{ route('login') }}" class="text-black font-bold hover:underline decoration-2 decoration-blue-600">Log in</a>
            </p>
        </div>
    </div>
@endsection
