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
        Schema::create('batch', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beer_type_id')->constrained('beer_type');
            $table->integer('speed');
            $table->integer('assigned_quantity');
            $table->integer('defective_products');
            $table->decimal('avg_temperature');
            $table->decimal('avg_humidity');
            $table->decimal('avg_vibration');
            $table->foreignId('preset_id')->constrained('production_preset');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batch');
    }
};
