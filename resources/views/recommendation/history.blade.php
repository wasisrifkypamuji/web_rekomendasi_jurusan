<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Rekomendasi Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    @include('partials.nav')
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6 text-center">Riwayat Rekomendasi Jurusan</h1>
        @if ($recommendations->isEmpty())
            <p class="text-center text-gray-600">Belum ada riwayat rekomendasi.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full bg-white shadow-md rounded-lg">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">B. Indonesia</th>
                            <th class="py-3 px-6 text-left">B. Inggris</th>
                            <th class="py-3 px-6 text-left">Matematika</th>
                            <th class="py-3 px-6 text-left">Fisika</th>
                            <th class="py-3 px-6 text-left">Kimia</th>
                            <th class="py-3 px-6 text-left">Biologi</th>
                            <th class="py-3 px-6 text-left">Ekonomi</th>
                            <th class="py-3 px-6 text-left">Sosiologi</th>
                            <th class="py-3 px-6 text-left">Geografi</th>
                            <th class="py-3 px-6 text-left">Jurusan</th>
                            <th class="py-3 px-6 text-left">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm">
                        @foreach ($recommendations as $recommendation)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">{{ $recommendation->name }}</td>
                                <td class="py-3 px-6">{{ $recommendation->indonesian_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->english_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->math_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->physics_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->chemistry_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->biology_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->economics_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->sociology_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->geography_score }}</td>
                                <td class="py-3 px-6">{{ $recommendation->recommended_major }}</td>
                                <td class="py-3 px-6">{{ $recommendation->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        <a href="{{ route('recommendation.form') }}" class="mt-6 inline-block bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Kembali ke Form</a>
    </div>
</body>
</html>