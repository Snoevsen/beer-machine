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
        Schema::create('production_preset', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('beer_type_id')->constrained('beer_type');
            $table->integer('speed');
            $table->integer('quantity');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_preset');
    }
};
