@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="title">
        <h1>Create new pizza</h1>
        </div>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="type">Choose pizza type</label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>

            </select>
            <br>
            <select name="base" id="base">
                <option value="cheesy crust">cheesy crust</option>
                <option value="garlic crust">garlic crust</option>
                <option value="thin & crispy">thin & crispy</option>
                <option value="thick">thick</option>

            </select>
            <br>
            <fieldset>
                <label>Extra toppings:</label><br>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
                <input type="checkbox" name="toppings[]" value="olives">Olives<br>
            </fieldset>

            <br>
            <button type="submit">Order Pizza</button>
        </form>  
    </div>
    
</div>
@endsection