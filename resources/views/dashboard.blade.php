@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white overflow-hidden shadow-lg rounded-xl border border-gray-100">
            <div class="p-6 sm:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-bold text-gray-900">User Dashboard</h1>
                    <span class="px-3 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Active</span>
                </div>

                <div class="prose max-w-none text-gray-600">
                    <p class="text-lg">Hello, <span class="font-semibold text-gray-900">{{ Auth::user()->name }}</span>!</p>
                    <p class="mt-2">You are successfully logged in. This is your personal dashboard area.</p>
                </div>

                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="p-4 bg-blue-50 rounded-lg border border-blue-100">
                        <h3 class="font-semibold text-blue-800 mb-1">Profile Status</h3>
                        <p class="text-sm text-blue-600">Your account is verified.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
