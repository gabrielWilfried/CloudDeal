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
        Schema::create('boosts', function (Blueprint $table) {
            $table->id();
            $table->unsignedDouble('price')->comment('price for boosting');
            $table->date('start_at');
            $table->date('end_at');
            $table->boolean('is_finish')->default(false);
            $table->unsignedBigInteger('score')->comment('the number of level to add to annonce');
            $table->foreignId('annonce_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boosts');
    }
};
