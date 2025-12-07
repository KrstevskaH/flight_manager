<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AircraftController extends Controller
{
    public function index()
    {
        
        $aircrafts = [
            [
                'model' => 'Airbus A220-300',
                'manufacturer' => 'Airbus',
                'engines' => '2 × PW1500G',
                'image' => '/images/a220.jpg'
            ],
            [
                'model' => 'Airbus A320neo',
                'manufacturer' => 'Airbus',
                'engines' => '2 × CFM LEAP-1A',
                'image' => '/images/a320.jpg'
            ],
            [
                'model' => 'Airbus A350-900',
                'manufacturer' => 'Airbus',
                'engines' => '2 × Rolls-Royce Trent XWB',
                'image' => '/images/a350.jpg'
            ],
        ];

        return view('aircraft.index', compact('aircrafts'));
    }
}
