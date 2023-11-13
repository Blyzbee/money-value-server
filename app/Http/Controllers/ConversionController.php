<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pair;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConversionController extends Controller
{
    public function status(Request $request)
    {
        return response()->json(['message' => 'API working !'], Response::HTTP_OK);
    }

    public function convert(Request $request)
    {
        // Valide les données de la requête
        $this->validate($request, [
            'pair_id' => 'required|exists:pairs,id',
            'amount' => 'required|numeric',
        ]);

        $pair = Pair::find($request->pair_id);

        if (!$pair) {
            return response()->json(['error' => 'Invalid pair ID'], 400);
        }

        // Effectue la conversion
        $result = $request->amount * $pair->conversion_rate;

        return response()->json(['result' => $result]);
    }
}
