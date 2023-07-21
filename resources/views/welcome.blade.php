@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div>
            <h1>Welcome to my LaraShop ^^</h1>
        </div>
        <div>
            <img src="image/1688718628781.png" alt="" width="200">
        </div>
        <p class="message">{{session('message')}}</p>
        <a href="/pizzas/create">Order Pizza</a>
    </div>
</div>
@endsection