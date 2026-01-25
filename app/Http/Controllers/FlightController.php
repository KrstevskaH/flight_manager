<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FlightController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Breeze middleware
    }

    public function index()
    {
        $flights = Flight::orderBy('created_at', 'desc')->get();
        return view('flights.index', compact('flights'));
    }

    public function create()
    {
        return view('flights.create');
    }

    public function store(Request $request)
    {
       

        $request->validate([
            'flight_number'  => 'required|string|max:255',
            'airline'        => 'nullable|string|max:255',
            'origin'         => 'nullable|string|max:255',
            'destination'    => 'nullable|string|max:255',
            'aircraft'       => 'nullable|string|max:255',
            'scheduled_departure' ,
            'scheduled_arrival' ,
            'departure_time' => 'nullable|date',
            'arrival_time'   => 'nullable|date',
        ]);
         $request->merge([
        'departure_time' => $request->departure_time ? str_replace('T', ' ', $request->departure_time) : null,
        'arrival_time'   => $request->arrival_time ? str_replace('T', ' ', $request->arrival_time) : null,
    ]);

        Flight::create($request->only([
            'flight_number',
            'airline',
            'origin',
            'destination',
            'aircraft',
            'scheduled_departure',
            'scheduled_arrival' ,
            'departure_time',
            'arrival_time'
        ]));

        return redirect()->route('flights.index')->with('success', 'Flight created successfully!');
    }

    public function show(Flight $flight)
    {
        return view('flights.show', compact('flight'));
    }

    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }

    public function update(Request $request, Flight $flight)
    {
        $request->validate([
            'flight_number'  => 'required|string|max:255',
            'airline'        => 'nullable|string|max:255',
            'origin'         => 'nullable|string|max:255',
            'destination'    => 'nullable|string|max:255',
            'aircraft'       => 'nullable|string|max:255',
            'scheduled_departure' => 'required|date',
            'scheduled_arrival' => 'required|date',
            'departure_time' => 'nullable|date',
            'arrival_time'   => 'nullable|date',
        ]);

        $flight->update($request->only([
            'flight_number',
            'airline',
            'origin',
            'destination',
            'aircraft',
            'scheduled_departure' ,
            'scheduled_arrival',
            'departure_time',
            'arrival_time'
        ]));

        return redirect()->route('flights.index')->with('success', 'Flight updated successfully!');
    }

    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flights.index')->with('success', 'Flight deleted successfully!');
    }
}
