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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('first_name', 45)->nullable(); 
            $table->string('last_name', 45)->nullable();
            $table->string('email', 45)->unique();
            $table->string('login', 45)->unique();
            $table->string('password', 255);
            $table->string('phone', 20)->nullable();
            $table->enum('role', ['client', 'admin'])->default('client');
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
