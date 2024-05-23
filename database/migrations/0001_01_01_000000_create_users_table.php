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
            $table->increments('id_users');
            $table->string('nama_lengkap', 255);
            $table->string('email', 255)->unique();
            $table->string('role', 255);
            $table->string('password', 255);
            $table->string('NIM', 255)->nullable();
            $table->string('gedung', 255)->nullable();
            $table->string('kamar', 255)->nullable();
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
