<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            // Hapus kolom lama
            $table->dropColumn([
                'math_score',
                'science_score',
                'social_score',
                'english_score',
                'interest_science',
                'interest_tech',
                'interest_social',
                'interest_arts'
            ]);

            // Tambahkan kolom baru untuk nilai
            $table->integer('indonesian_score')->nullable();
            $table->integer('english_score')->nullable();
            $table->integer('math_score')->nullable();
            $table->integer('physics_score')->nullable();
            $table->integer('chemistry_score')->nullable();
            $table->integer('biology_score')->nullable();
            $table->integer('economics_score')->nullable();
            $table->integer('sociology_score')->nullable();
            $table->integer('geography_score')->nullable();

            // Kolom untuk menyimpan jawaban pertanyaan sebagai JSON
            $table->json('question_answers')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            // Kembalikan kolom lama
            $table->integer('math_score')->nullable();
            $table->integer('science_score')->nullable();
            $table->integer('social_score')->nullable();
            $table->integer('english_score')->nullable();
            $table->string('interest_science')->nullable();
            $table->string('interest_tech')->nullable();
            $table->string('interest_social')->nullable();
            $table->string('interest_arts')->nullable();

            // Hapus kolom baru
            $table->dropColumn([
                'indonesian_score',
                'english_score',
                'math_score',
                'physics_score',
                'chemistry_score',
                'biology_score',
                'economics_score',
                'sociology_score',
                'geography_score',
                'question_answers'
            ]);
        });
    }
};