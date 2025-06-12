<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'indonesian_score',
        'english_score',
        'math_score',
        'physics_score',
        'chemistry_score',
        'biology_score',
        'economics_score',
        'sociology_score',
        'geography_score',
        'question_answers',
        'recommended_major',
    ];

    protected $casts = [
        'question_answers' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}