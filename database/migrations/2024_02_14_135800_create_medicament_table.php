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
        Schema::create('medicament', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->unsignedBigInteger('speciality_id'); // Ajout de la colonne speciality_id
            $table->foreign('speciality_id')->references('id')->on('specialities'); // Clé étrangère liée à la table 'specialities'
            $table->timestamps();
        });
    }    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicament');
    }
};
