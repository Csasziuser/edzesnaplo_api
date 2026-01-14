<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BejegyzesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "gyakorlat"=>"required|string|max:15",
            "ismetlesszam"=>"required|integer|between:1,8",
            "datum"=>"required|date"

        ],
        [
            "required"=>"A(z) :attribute mező megadása kötelező!",
            "date"=>"Rossz dátum!",
            "string"=>"A gyakorlat legyen szöveg",
            "max"=>"A gyakorlat meghaladja a 15 karakter hosszúságot",
            "integer"=>"Az ismétlésszámnak számnak kell lennie",
            "between"=>"Az ismétlésszám :min és :max érték között kell lennie"
        ],
        [
        "ismetlesszam"=>"ismétlésszám",
        "datum"=>"dátum" 
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
