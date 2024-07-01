<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stammdaten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stammdaten_typ_id');
            $table->string('abkuerzung');
            $table->string('kurzname');
            $table->string('langname');
            $table->timestamps(); //
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stammdaten');
    }
};
