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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->string('degree_title')->nullable();
            $table->integer('year_completion')->nullable();
            $table->string('institute')->nullable();
            $table->string('city')->nullable();
            $table->decimal('cgpa_percentage', 4, 2)->nullable();
            $table->boolean('is_percentage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
