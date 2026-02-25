<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightUserTable extends Migration
{
    public function up(): void
    {
       Schema::create('flight_user', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->foreignId('flight_id')->constrained()->cascadeOnDelete();
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('flight_user');
    }
}