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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('technology_id')->constrained()->onDelete('cascade');
            $table->text('question');
            $table->longText('answer');
            $table->longText('example')->nullable();
            $table->tinyInteger('level')->default(1)->comment('1=easy, 2=medium, 3=advance');
            $table->tinyInteger('type')->default(1)->comment('1=problem solving, 2=conceptual');
            $table->json('tags')->default('[]');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
