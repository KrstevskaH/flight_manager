<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number');
            $table->string('airline')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->string('aircraft')->nullable();
            $table->datetime('departure_time')->nullable();
            $table->datetime('arrival_time')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
