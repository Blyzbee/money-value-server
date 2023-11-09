<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pair;
use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function convert(Request $request)
    {
        // Valider les données de la requête
        $this->validate($request, [
            'pair_id' => 'required|exists:pairs,id',
            'amount' => 'required|numeric',
        ]);

        $pair = Pair::find($request->pair_id);

        if (!$pair) {
            return response()->json(['error' => 'Invalid pair ID'], 400);
        }

        // Effectuer la conversion de devises
        $result = $request->amount * $pair->conversion_rate;

        return response()->json(['result' => $result]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
