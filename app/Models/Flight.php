<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_number',
        'airline',
        'origin',
        'destination',
        'aircraft',
        'departure_time',
        'arrival_time',
        'scheduled_departure',
        'scheduled_arrival',
        'user_id',
    ];
    public function users()
{
    return $this->belongsToMany(User::class);
}
}
