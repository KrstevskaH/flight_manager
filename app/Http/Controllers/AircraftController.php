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
                'image' => '/images/a220.jpg',
                'description' => 'The A220 is a narrow-body, twin-engine jet designed for short to medium-range routes.',
                'max_speed' => '871 km/h',
                 'range' => '6,300 km',
                'seats' => '100-150',
            ],
            [
                'model' => 'Airbus A320-200',
                'manufacturer' => 'Airbus',
                'engines' => '2 × PW1500G',
                'image' => '/images/a320.jpg',
                'description' => 'The A320 is a popular short- to medium-range aircraft, widely used worldwide.',
                'max_speed' => '871 km/h',
                 'range' => '6,100 km',
                 'seats' => '140-180',
            ],
            [
                'model' => 'Airbus A320neo',
                'manufacturer' => 'Airbus',
                'engines' => '2 × CFM LEAP-1A',
                'image' => '/images/a320neo.jpg',
                'description' => 'The A320 Neo is an upgraded A320 with more fuel-efficient engines and advanced aerodynamics.',
                'max_speed' => '871 km/h',
                'range' => '6,300 km',
                'seats' => '140-180',
            ],
            [
                'model' => 'Airbus A340-600',
                'manufacturer' => 'Airbus',
                'engines' => '4 ×  Rolls-Royce Trent 500',
                'image' => '/images/a340.jpg',
                'description' => 'The A340 is a long-range, four-engine wide-body jet, ideal for intercontinental flights.',
                'max_speed' => '871 km/h',
                 'range' => '13,500 km',
                 'seats' => '250-375',
            ],
            [
                'model' => 'Airbus A350-900',
                'manufacturer' => 'Airbus',
                'engines' => '2 × Rolls-Royce Trent XWB',
                'image' => '/images/a350.jpg',
                'description' => 'The A350 is a long-range, twin-engine aircraft featuring modern aerodynamics and composite materials.',
                'max_speed' => '945 km/h',
                'range' => '15,000 km',
                 'seats' => '300-350',
            ],
            
            [
                'model' => 'Airbus A380-800',
                'manufacturer' => 'Airbus',
                'engines' => '4 × Rolls-Royce Trent 900',
                'image' => '/images/a380.jpg',
                'description' => 'The A380 is the world\'s largest passenger airliner, with two full decks and high capacity.',
                'max_speed' => '1,020 km/h',
                'range' => '15,200 km',
                'seats' => '525-853',

            ],
            
        ];

        return view('aircraft.index', compact('aircrafts'));
    }
}