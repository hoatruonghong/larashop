@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="title">
        <h1>Order for pizza - {{ $pizza->name }}</h1>
        </div>
        <p>Type: {{$pizza->type}}</p>
        <p>Base: {{$pizza->base}}</p>
        <br>
        <a href="/pizzas">All pizzas</a>

    </div>
</div>
@endsection