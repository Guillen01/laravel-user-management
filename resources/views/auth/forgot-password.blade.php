@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
    <div class="flex justify-center items-center min-h-[calc(100vh-200px)]">
        <div class="w-full max-w-md bg-white p-8 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
            <h2 class="text-3xl font-black mb-2 text-center text-black uppercase tracking-tight">Forgot Password</h2>
            <p class="text-center text-gray-600 mb-8 text-sm font-medium">Enter your email and we'll send you a new password.</p>

            <form action="{{ route('forgot-password.send') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-bold text-black mb-2 uppercase">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all placeholder-gray-400" placeholder="name@example.com" required autofocus>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-4 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all uppercase tracking-wide">
                    Send New Password
                </button>
            </form>

            <p class="mt-8 text-center text-sm font-medium text-gray-600">
                Remembered it? <a href="{{ route('login') }}" class="text-black font-bold hover:underline decoration-2 decoration-blue-600">Log in</a>
            </p>
        </div>
    </div>
@endsection
