<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    @include('partials.nav')
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6 text-center">Info Jurusan</h1>
        <form method="GET" action="{{ route('majors.index') }}" class="mb-6">
            <div class="flex">
                <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari jurusan..." class="p-2 w-full border rounded-l-md focus:outline-none">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-r-md hover:bg-blue-600">Cari</button>
            </div>
        </form>
        @if ($majors->isEmpty())
            <p class="text-center text-gray-600">Tidak ada jurusan ditemukan.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($majors as $major)
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold mb-2">{{ $major->name }}</h2>
                        <p class="text-gray-600 mb-4">{{ $major->description }}</p>
                        <p class="text-gray-600"><strong>Prospek Karir:</strong> {{ $major->career_prospects }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>