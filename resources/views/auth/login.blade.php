@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center items-center min-h-[calc(100vh-200px)]">
        <x-ui.card class="w-full max-w-md">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-black text-black uppercase tracking-tight mb-2">Welcome Back</h2>
                <p class="text-gray-600 font-medium">Please enter your details to sign in.</p>
            </div>

            <!-- Demo Credentials Helper -->
            <div class="mb-8">
                <p class="text-xs font-black text-gray-500 uppercase tracking-wide mb-3 text-center">Quick Login (Demo)</p>
                <div class="grid grid-cols-2 gap-4">
                    <button type="button" onclick="fillCredentials('admin@demo.com', 'admin123')" class="group relative p-4 bg-white border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[3px] active:translate-y-[3px] active:shadow-none transition-all text-left">
                        <div class="absolute top-0 right-0 p-1">
                            <div class="w-2 h-2 bg-purple-500 rounded-full border border-black"></div>
                        </div>
                        <div class="flex items-center gap-3 mb-2">
                            <div class="p-1.5 bg-purple-100 border-2 border-black rounded-md group-hover:bg-purple-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <span class="text-xs font-black uppercase tracking-wide text-gray-500">Admin</span>
                        </div>
                        <p class="text-sm font-bold text-black group-hover:text-purple-700 transition-colors">admin@demo.com</p>
                    </button>

                    <button type="button" onclick="fillCredentials('user@demo.com', 'user123')" class="group relative p-4 bg-white border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:translate-x-[3px] active:translate-y-[3px] active:shadow-none transition-all text-left">
                        <div class="absolute top-0 right-0 p-1">
                            <div class="w-2 h-2 bg-blue-500 rounded-full border border-black"></div>
                        </div>
                        <div class="flex items-center gap-3 mb-2">
                            <div class="p-1.5 bg-blue-100 border-2 border-black rounded-md group-hover:bg-blue-500 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <span class="text-xs font-black uppercase tracking-wide text-gray-500">User</span>
                        </div>
                        <p class="text-sm font-bold text-black group-hover:text-blue-700 transition-colors">user@demo.com</p>
                    </button>
                </div>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-5 relative">
                    <label for="email" class="block text-sm font-black text-black mb-2 uppercase tracking-wide">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full pl-10 pr-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all font-bold placeholder-gray-400 bg-white" placeholder="name@example.com" required autofocus>
                    </div>
                </div>

                <div class="mb-8 relative">
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-sm font-black text-black uppercase tracking-wide">Password</label>
                        <a href="{{ route('forgot-password') }}" class="text-xs font-bold text-blue-600 hover:text-blue-800 hover:underline uppercase tracking-wide">Forgot Password?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-500">
                            <x-ui.icon name="lock" class="w-5 h-5" />
                        </div>
                        <input type="password" name="password" id="password" class="w-full pl-10 pr-4 py-3 border-2 border-black focus:outline-none focus:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all font-bold placeholder-gray-400 bg-white" placeholder="••••••••" required>
                    </div>
                </div>

                <x-ui.button type="submit" variant="primary" :fullWidth="true">
                    Log In
                </x-ui.button>
            </form>

            <div class="mt-8 pt-6 border-t-2 border-black text-center">
                <p class="text-sm font-medium text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-black font-black hover:underline decoration-2 decoration-blue-600 ml-1">Sign up</a>
                </p>
            </div>
        </x-ui.card>
    </div>

    <script>
        function fillCredentials(email, password) {
            document.getElementById('email').value = email;
            document.getElementById('password').value = password;
        }
    </script>
@endsection
