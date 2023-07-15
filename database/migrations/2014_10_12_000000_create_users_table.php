<?php

use App\Models\Helpers;
use App\Models\Enums\SexeEnum;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('pseudo');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->enum('sex', enum_to_string_array(SexeEnum::cases()))->nullable();
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_online')->default(false);
            $table->json('location')->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
