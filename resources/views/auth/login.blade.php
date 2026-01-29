@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center items-center min-h-[calc(100vh-200px)]">
        <div class="w-full max-w-md bg-white p-8 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
            <h2 class="text-3xl font-black mb-6 text-center text-black uppercase tracking-tight">Welcome Back</h2>

            <!-- Demo Credentials Helper -->
            <div class="mb-6 grid grid-cols-2 gap-4">
                <div onclick="fillCredentials('admin@demo.com', 'admin123')" class="cursor-pointer p-3 border-2 border-black bg-gray-50 hover:bg-blue-50 transition-colors text-center shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[1px] active:translate-y-[1px] active:shadow-none">
                    <p class="text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">Admin Demo</p>
                    <p class="text-sm font-bold text-black">Login as Admin</p>
                </div>
                <div onclick="fillCredentials('user@demo.com', 'user123')" class="cursor-pointer p-3 border-2 border-black bg-gray-50 hover:bg-blue-50 transition-colors text-center shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[1px] active:translate-y-[1px] active:shadow-none">
                    <p class="text-xs font-bold text-gray-600 uppercase tracking-wider mb-1">User Demo</p>
                    <p class="text-sm font-bold text-black">Login as User</p>
                </div>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="email" class="block text-sm font-bold text-black mb-2 uppercase">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all placeholder-gray-400" placeholder="name@example.com" required autofocus>
                </div>

                <div class="mb-6">
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-sm font-bold text-black uppercase">Password</label>
                        <a href="{{ route('forgot-password') }}" class="text-sm font-bold text-blue-600 hover:text-blue-800 hover:underline">Forgot?</a>
                    </div>
                    <input type="password" name="password" id="password" class="w-full px-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all placeholder-gray-400" placeholder="••••••••" required>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-4 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all uppercase tracking-wide">
                    Log In
                </button>
            </form>

            <p class="mt-8 text-center text-sm font-medium text-gray-600">
                Don't have an account? <a href="{{ route('register') }}" class="text-black font-bold hover:underline decoration-2 decoration-blue-600">Sign up</a>
            </p>
        </div>
    </div>

    <script>
        function fillCredentials(email, password) {
            document.getElementById('email').value = email;
            document.getElementById('password').value = password;
        }
    </script>
@endsection
