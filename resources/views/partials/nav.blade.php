<nav class="bg-blue-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="text-white font-bold text-xl">
                Rekomendasi Jurusan
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('home') }}" class="text-white px-3 py-2 rounded hover:bg-blue-500 transition">Beranda</a>
                <a href="{{ route('majors.index') }}" class="text-white px-3 py-2 rounded hover:bg-blue-500 transition">Info Jurusan</a>

                @auth
                    <a href="{{ route('recommendation.form') }}" class="text-white px-3 py-2 rounded hover:bg-blue-500 transition">Form Rekomendasi</a>
                    <a href="{{ route('recommendation.history') }}" class="text-white px-3 py-2 rounded hover:bg-blue-500 transition">Riwayat</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="flex items-center bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7" />
                        </svg>
                        Logout
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="menu" class="md:hidden px-4 pb-4 space-y-2 hidden bg-blue-600">
        <a href="{{ route('home') }}" class="block text-white px-3 py-2 rounded hover:bg-blue-500 transition">Beranda</a>
        <a href="{{ route('majors.index') }}" class="block text-white px-3 py-2 rounded hover:bg-blue-500 transition">Info Jurusan</a>

        @auth
            <a href="{{ route('recommendation.form') }}" class="block text-white px-3 py-2 rounded hover:bg-blue-500 transition">Form Rekomendasi</a>
            <a href="{{ route('recommendation.history') }}" class="block text-white px-3 py-2 rounded hover:bg-blue-500 transition">Riwayat</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="flex items-center bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17 16l4-4m0 0l-4-4m4 4H7" />
                </svg>
                Logout
            </a>
        @endauth
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
</script>
