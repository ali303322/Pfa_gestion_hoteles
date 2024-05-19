<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_chambres', function (Blueprint $table) {
            $table->id();
            $table->integer("NChambre");
            $table->integer("PrixNuit");
            $table->float("PrixNuit");
            $table->int("IdHotel");
            $table->int("IdClient");
            $table->foreign("IdHotel")->references('id')->on('hotels');
            $table->foreign("IdClient")->references('id')->on('application_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_chambres');
    }
};
