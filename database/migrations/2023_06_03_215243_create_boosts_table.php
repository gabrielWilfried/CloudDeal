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
            $table->double('price');
            $table->string('period');
            $table->integer('status')->default(1);
            $table->date('Begin_date')->nullable();
            $table->date('End-date')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('annonce_id')->constrained();
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
