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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['Grass', 'Fire', 'Water', 'Electric', 'Psychic'])->nullable();
            $table->enum('subtype', ['Flying', 'Poison', 'Dragon', 'Steel', 'Ice'])->nullable();
            $table->enum('region', ['Kanto', 'Johto', 'Hoenn', 'Sinnoh', 'Unova'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
