<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    @include('partials.nav')
    <div class="container mx-auto p-8 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
            <h1 class="text-2xl font-bold mb-6 text-center">Hasil Rekomendasi</h1>
            <p class="mb-4">Selamat datang, {{ Auth::user()->name }}!</p>
            <p class="mb-4"><strong>Nama:</strong> {{ $recommendation->name }}</p>
            <p class="mb-4"><strong>Rekomendasi Jurusan:</strong> {{ $recommendation->recommended_major }}</p>
            <p class="mb-4"><strong>Detail Nilai:</strong></p>
            <ul class="list-disc pl-5 mb-4">
                <li>Bahasa Indonesia: {{ $recommendation->indonesian_score }}</li>
                <li>Bahasa Inggris: {{ $recommendation->english_score }}</li>
                <li>Matematika: {{ $recommendation->math_score }}</li>
                <li>Fisika: {{ $recommendation->physics_score }}</li>
                <li>Kimia: {{ $recommendation->chemistry_score }}</li>
                <li>Biologi: {{ $recommendation->biology_score }}</li>
                <li>Ekonomi: {{ $recommendation->economics_score }}</li>
                <li>Sosiologi: {{ $recommendation->sociology_score }}</li>
                <li>Geografi: {{ $recommendation->geography_score }}</li>
            </ul>
            <p class="mb-4"><strong>Jawaban Pertanyaan Minat:</strong></p>
            @if (is_array($recommendation->question_answers) && !empty($recommendation->question_answers))
                <ul class="list-disc pl-5">
                    @foreach ($recommendation->question_answers as $key => $answer)
                        <li>{{ str_replace('question_', 'Pertanyaan ', $key) }}: {{ $answer == 'yes' ? 'Ya' : 'Tidak' }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-600">Tidak ada jawaban pertanyaan yang tersedia.</p>
            @endif
            <a href="{{ route('recommendation.form') }}" class="mt-6 inline-block w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 text-center">Kembali ke Form</a>
            <a href="{{ route('recommendation.history') }}" class="mt-4 inline-block w-full bg-green-500 text-white p-2 rounded-md hover:bg-green-600 text-center">Lihat Riwayat</a>
        </div>
    </div>
</body>
</html>