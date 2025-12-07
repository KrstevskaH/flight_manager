<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getAirlines(Request $request)
    {
        $query = $request->get('q', ''); 

        $apiKey = env('AVIATIONSTACK_KEY'); 
        $response = Http::get("https://api.aviationstack.com/v1/airlines?access_key={$apiKey}&search={$query}");

        if ($response->successful()) {
            $data = collect($response->json()['data'])->pluck('airline_name');
            return response()->json($data);
        }

        return response()->json([]);
    }
}
