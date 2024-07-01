<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personen_typ_id');
            $table->string('vorname');
            $table->string('nachname');
            $table->date('geburtstag');
            $table->string('email');
            $table->string('telefonnummer');
            $table->string('telefonnummer_mobil');
            $table->timestamps(); //
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personen');
    }
};
