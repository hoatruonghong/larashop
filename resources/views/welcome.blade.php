@extends('layouts.layout')

@section('content')
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