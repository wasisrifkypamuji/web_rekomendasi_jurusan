<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecommendationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm()
    {
        return view('recommendation.form');
    }

    public function processForm(Request $request)
    {
        // Definisikan aturan validasi
        $rules = [
            'name' => 'required|string|max:255',
            'indonesian_score' => 'required|numeric|min:0|max:100',
            'english_score' => 'required|numeric|min:0|max:100',
            'math_score' => 'required|numeric|min:0|max:100',
            'physics_score' => 'required|numeric|min:0|max:100',
            'chemistry_score' => 'required|numeric|min:0|max:100',
            'biology_score' => 'required|numeric|min:0|max:100',
            'economics_score' => 'required|numeric|min:0|max:100',
            'sociology_score' => 'required|numeric|min:0|max:100',
            'geography_score' => 'required|numeric|min:0|max:100',
        ];

        // Tambahkan aturan validasi untuk 20 pertanyaan
        for ($i = 1; $i <= 20; $i++) {
            $rules["question_{$i}"] = 'required|in:yes,no';
        }

        // Validasi semua input
        $validated = $request->validate($rules);

        // Ambil jawaban pertanyaan
        $question_answers = [];
        for ($i = 1; $i <= 20; $i++) {
            $question_answers["question_{$i}"] = $request->input("question_{$i}");
        }

        // Ambil input nilai
        $scores = [
            'indonesian' => $request->indonesian_score,
            'english' => $request->english_score,
            'math' => $request->math_score,
            'physics' => $request->physics_score,
            'chemistry' => $request->chemistry_score,
            'biology' => $request->biology_score,
            'economics' => $request->economics_score,
            'sociology' => $request->sociology_score,
            'geography' => $request->geography_score,
        ];

        // Hitung skor untuk kategori jurusan
        $science_tech_score = ($scores['math'] + $scores['physics'] + $scores['chemistry'] + $scores['biology']) / 4;
        $social_humanities_score = ($scores['indonesian'] + $scores['english'] + $scores['economics'] + $scores['sociology'] + $scores['geography']) / 5;

        // Bobot pertanyaan
        $science_tech_questions = [1, 2, 5, 10, 11, 14, 15, 17, 18, 20];
        $social_humanities_questions = [3, 4, 6, 7, 8, 9, 12, 13, 16, 19];

        foreach ($science_tech_questions as $q) {
            if ($question_answers["question_{$q}"] == 'yes') {
                $science_tech_score += 20;
            }
        }

        foreach ($social_humanities_questions as $q) {
            if ($question_answers["question_{$q}"] == 'yes') {
                $social_humanities_score += 20;
            }
        }

        // Tentukan rekomendasi
        $recommended_major = $science_tech_score > $social_humanities_score ? 'Teknik/Sains' : 'Sosial/Humaniora';

        // Simpan data ke database
        $recommendation = Recommendation::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'indonesian_score' => $scores['indonesian'],
            'english_score' => $scores['english'],
            'math_score' => $scores['math'],
            'physics_score' => $scores['physics'],
            'chemistry_score' => $scores['chemistry'],
            'biology_score' => $scores['biology'],
            'economics_score' => $scores['economics'],
            'sociology_score' => $scores['sociology'],
            'geography_score' => $scores['geography'],
            'question_answers' => $question_answers, // Laravel akan otomatis json_encode karena $casts
            'recommended_major' => $recommended_major,
        ]);

        // Tampilkan hasil
        return view('recommendation.result', compact('recommendation'));
    }

    public function showHistory()
    {
        $recommendations = Recommendation::where('user_id', Auth::id())->get();
        return view('recommendation.history', compact('recommendations'));
    }
}