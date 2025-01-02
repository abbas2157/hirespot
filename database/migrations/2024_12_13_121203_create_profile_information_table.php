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
        Schema::create('profile_information', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('last_name')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('phone')->nullable();
            $table->string('technology')->nullable();
            $table->string('title')->nullable();
            $table->string('designation_at_org')->nullable();
            $table->string('tagline')->nullable();
            $table->text('about_me')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_information');
    }
};
