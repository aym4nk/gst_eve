<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {

            $table->id();

            // titre
            $table->string('title');

            // date debut
            $table->date('date_start');

            // date fin
            $table->date('date_end');

            // lieu
            $table->string('location');

            // organisateur
            $table->unsignedBigInteger('organizer_id');

            $table->foreign('organizer_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};