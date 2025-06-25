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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('question_type')->default('single'); // npr: single, multiple, true_false
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('medium');
            $table->text('question_text');
            $table->text('explanation')->nullable(); // za objašnjenje odgovora, ako želiš
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
