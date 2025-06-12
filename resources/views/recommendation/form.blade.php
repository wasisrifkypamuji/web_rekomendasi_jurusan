<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rekomendasi Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    @include('partials.nav')
    <div class="container mx-auto p-8 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl">
            <h1 class="text-2xl font-bold mb-6 text-center">Form Rekomendasi Jurusan</h1>
            <p class="mb-4">Selamat datang, {{ Auth::user()->name }}!</p>
            <form action="{{ route('recommendation.process') }}" method="POST">
                @csrf
                <!-- Input Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="mt-1 p-2 block w-full border rounded-md" required>
                </div>
                <!-- Input Nilai -->
                <h2 class="text-lg font-semibold mb-4">Masukkan Nilai Akademik (0-100)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label for="indonesian_score" class="block text-sm font-medium text-gray-700">Bahasa Indonesia</label>
                        <input type="number" name="indonesian_score" id="indonesian_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="english_score" class="block text-sm font-medium text-gray-700">Bahasa Inggris</label>
                        <input type="number" name="english_score" id="english_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="math_score" class="block text-sm font-medium text-gray-700">Matematika</label>
                        <input type="number" name="math_score" id="math_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="physics_score" class="block text-sm font-medium text-gray-700">Fisika</label>
                        <input type="number" name="physics_score" id="physics_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="chemistry_score" class="block text-sm font-medium text-gray-700">Kimia</label>
                        <input type="number" name="chemistry_score" id="chemistry_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="biology_score" class="block text-sm font-medium text-gray-700">Biologi</label>
                        <input type="number" name="biology_score" id="biology_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="economics_score" class="block text-sm font-medium text-gray-700">Ekonomi</label>
                        <input type="number" name="economics_score" id="economics_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="sociology_score" class="block text-sm font-medium text-gray-700">Sosiologi</label>
                        <input type="number" name="sociology_score" id="sociology_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="geography_score" class="block text-sm font-medium text-gray-700">Geografi</label>
                        <input type="number" name="geography_score" id="geography_score" min="0" max="100" class="mt-1 p-2 block w-full border rounded-md" required>
                    </div>
                </div>
                <!-- Pertanyaan Minat -->
                <h2 class="text-lg font-semibold mb-4">Pertanyaan Minat</h2>
                @foreach (range(1, 20) as $i)
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            @if ($i == 1) Apakah Anda suka memecahkan masalah matematika yang kompleks? @endif
                            @if ($i == 2) Apakah Anda tertarik dengan eksperimen sains di laboratorium? @endif
                            @if ($i == 3) Apakah Anda menikmati membaca dan menganalisis teks sastra? @endif
                            @if ($i == 4) Apakah Anda suka mempelajari budaya dan bahasa asing? @endif
                            @if ($i == 5) Apakah Anda tertarik dengan teknologi dan pemrograman komputer? @endif
                            @if ($i == 6) Apakah Anda suka menganalisis data ekonomi atau keuangan? @endif
                            @if ($i == 7) Apakah Anda tertarik dengan isu sosial dan perilaku masyarakat? @endif
                            @if ($i == 8) Apakah Anda suka mempelajari peta dan fenomena geografis? @endif
                            @if ($i == 9) Apakah Anda menikmati merancang atau membuat karya seni? @endif
                            @if ($i == 10) Apakah Anda tertarik dengan penelitian biologi atau kesehatan? @endif
                            @if ($i == 11) Apakah Anda suka mengerjakan proyek teknik atau mekanik? @endif
                            @if ($i == 12) Apakah Anda tertarik dengan hukum dan keadilan sosial? @endif
                            @if ($i == 13) Apakah Anda suka menulis artikel atau cerita kreatif? @endif
                            @if ($i == 14) Apakah Anda tertarik dengan fisika dan hukum alam? @endif
                            @if ($i == 15) Apakah Anda suka mempelajari reaksi kimia atau bahan kimia? @endif
                            @if ($i == 16) Apakah Anda menikmati debat atau diskusi tentang isu politik? @endif
                            @if ($i == 17) Apakah Anda tertarik dengan lingkungan dan keberlanjutan? @endif
                            @if ($i == 18) Apakah Anda suka bekerja dengan angka dan statistik? @endif
                            @if ($i == 19) Apakah Anda tertarik dengan psikologi dan perilaku manusia? @endif
                            @if ($i == 20) Apakah Anda suka merancang sistem atau proses yang efisien? @endif
                        </label>
                        <div class="flex space-x-4">
                            <label>
                                <input type="radio" name="question_{{ $i }}" value="yes" class="mr-1" required> Ya
                            </label>
                            <label>
                                <input type="radio" name="question_{{ $i }}" value="no" class="mr-1"> Tidak
                            </label>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Dapatkan Rekomendasi</button>
            </form>
        </div>
    </div>
</body>
</html>