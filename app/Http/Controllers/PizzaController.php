<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        //get data from database
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('name','mario')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas', [
            'pizzas'=> $pizzas,
        ] );
    }

    public function show($id){
            // use the $id to query the db for a record

        return view('details', [
            'id' => $id
        ]);
    }
}
