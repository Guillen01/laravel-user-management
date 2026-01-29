@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
    <div class="flex justify-center items-center min-h-[calc(100vh-200px)]">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            <h2 class="text-2xl font-bold mb-2 text-center text-gray-800">Forgot Password</h2>
            <p class="text-center text-gray-500 mb-6 text-sm">Enter your email and we'll send you a new password.</p>

            <form action="{{ route('forgot-password.send') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required autofocus>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2.5 px-4 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition duration-300 shadow-md">
                    Send New Password
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-gray-600">
                Remembered it? <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-medium hover:underline">Log in</a>
            </p>
        </div>
    </div>
@endsection
