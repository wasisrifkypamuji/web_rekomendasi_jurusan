<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Rekomendasi Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    @include('partials.nav')

    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-16 flex flex-col-reverse md:flex-row items-center justify-center min-h-screen gap-12">
        <!-- Konten Kiri -->
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl font-bold text-blue-700 mb-4">Temukan Jurusan yang Tepat Untukmu</h1>
            <p class="text-gray-700 mb-6">
                Bingung memilih jurusan kuliah? Gunakan sistem rekomendasi kami untuk mendapatkan saran jurusan yang sesuai dengan minat dan kemampuanmu.
            </p>

            @if (Auth::check())
                <div class="space-y-4">
                    <p class="text-lg text-gray-800">Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</p>
                    <a href="{{ route('recommendation.form') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">Isi Form Rekomendasi</a>
                    <a href="{{ route('recommendation.history') }}" class="inline-block bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition ml-2">Riwayat Rekomendasi</a>
                </div>
            @else
                <div class="space-y-4">
                    <a href="{{ route('login') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">Login</a>
                    <a href="{{ route('register') }}" class="inline-block bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition ml-2">Register</a>
                </div>
            @endif
        </div>

        <!-- Ilustrasi Kanan -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="https://img.freepik.com/free-vector/college-admission-concept-illustration_114360-11229.jpg" alt="Ilustrasi Rekomendasi Jurusan" class="w-full max-w-md rounded-lg shadow-md">
        </div>
    </div>

    <div class="container mx-auto px-6 py-16">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Team</h2>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 place-items-center">
        @php
            $team = [
                ['name' => 'Wasis Rifky Pamuji', 'image' => 'wasis.jpg'],
                ['name' => 'Rizki Pamuji', 'image' => 'rizki.jpg'],
                ['name' => 'Riska Dwi Lestari', 'image' => 'riska.jpg'],
                ['name' => 'Faradina Mosyarina', 'image' => 'faradina.jpg'],
            ];
        @endphp

        @foreach ($team as $member)
        <div class="bg-white rounded-lg shadow-md p-4 text-center transform transition duration-300 hover:scale-105 hover:shadow-lg w-full sm:w-[180px]">
            <div class="w-50 h-50 rounded-full overflow-hidden mx-auto mb-4">
                <img src="{{ asset('images/' . $member['image']) }}"
                     alt="{{ $member['name'] }}"
                     class="w-full h-full object-cover transition duration-300 hover:grayscale-0 grayscale" />
            </div>
            <p class="font-semibold text-gray-800">{{ $member['name'] }}</p>
        </div>
        @endforeach
    </div>
</div>


    </div>
</body>
</html>
