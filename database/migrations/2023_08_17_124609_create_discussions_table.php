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
        Schema::create('discussions', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('represent the name of the discussion');
            $table->boolean('is_open')->default(true)->comment('if true, the discussion is not finish');
            $table->foreignId('announce_id')->constrained()->onDelete('cascade');
            $table->boolean('is_agree_seller')->nullable()->comment('use to close discussion');
            $table->boolean('is_agree_customer')->nullable()->comment('use to close discussion');
            $table->foreignId('user_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussions');
    }
};
