<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('math_score');
            $table->float('science_score');
            $table->float('social_score');
            $table->float('english_score');
            $table->string('interest_science');
            $table->string('interest_tech');
            $table->string('interest_social');
            $table->string('interest_arts');
            $table->string('recommended_major');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};