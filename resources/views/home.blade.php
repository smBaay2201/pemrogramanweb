<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuBaDiBaKo - Budi Baik Di Balas Koko</title>
    <meta name="description" content="Komunitas sosial yang berfokus pada pertukaran kebaikan">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-sans antialiased">
    <!-- Navbar -->
    <nav class="w-full ">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
            <a href="#" class="text-2xl font-bold">
                <span class="text-black">Bu</span><span class="text-emerald-500">Ba</span><span class="text-black">Di</span><span class="text-emerald-500">Ba</span><span class="text-black">Ko</span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                   <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="flex items-center text-emerald-500 hover:text-emerald-600 transition-colors duration-200">
                        Profile
                        <svg class="ml-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute left-0 mt-2 bg-white shadow-lg rounded-lg py-2 w-40 z-20">
                        <a href="/pengurus" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-500 transition-colors duration-200">Pengurus</a>
                    </div>
                </div>
                <a href="#tentangKami" class="text-gray-700 hover:text-emerald-500 transition-colors duration-200">Tentang Kami</a>
                <a href="#proker " class="text-emerald-500 hover:text-emerald-600 transition-colors duration-200">Proker Kami</a>
                <a href="#kontak" class="text-gray-700 hover:text-emerald-500 transition-colors duration-200">Kontak</a>
                <a href="#notulensi" class="text-emerald-500 hover:text-emerald-600 transition-colors duration-200">Notulensi</a>
            </div>
            
            <!-- Mobile Navigation Toggle -->
            <button class="md:hidden flex items-center" x-data="{ open: false }" @click="open = !open">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                
                <!-- Mobile Menu -->
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-16 right-4 bg-white shadow-lg rounded-lg py-2 w-48 z-20">
                    <a href="/" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-500 transition-colors duration-200">Beranda</a>
                    <a href="/pengurus" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-500 transition-colors duration-200">Pengurus</a>
                    <a href="/kontak" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-500 transition-colors duration-200">Kontak</a>
                    <a href="/notulensi" class="block px-4 py-2 text-emerald-500 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Notulensi</a>
                </div>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24" id='beranda'>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/bubadibako-logo.png') }}" alt="BuBaDiBaKo Logo" class="w-22 h-22 md:w-30 md:h-30 object-contain">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold tracking-tight flex gap-0">
                            <span class="text-black">Bu</span>
                            <span class="text-emerald-500">Ba</span>
                            <span class="text-black">Di</span>
                            <span class="text-emerald-500">Ba</span>
                            <span class="text-black">Ko</span>
                        </h1>
                        <p class="text-lg md:text-xl text-gray-600">
                            Budi <span class="text-emerald-500">Baik</span> Di Balas <span class="text-emerald-500">Koko</span>
                        </p>
                    </div>
                </div>

                <p class="text-gray-700 leading-relaxed text-lg max-w-prose">
                    "BuBaDiBaKo adalah komunitas sosial yang berfokus pada pertukaran kebaikan. Kami percaya bahwa setiap
                    tindakan baik yang dilakukan akan kembali dalam bentuk yang lebih besar. Dengan semangat gotong royong,
                    kami mengajak setiap individu untuk berbagi kebaikan dan memberikan manfaat bagi sesama."
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="/jelajahi" class="px-6 py-3 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors duration-300 flex items-center space-x-2 shadow-md">
                        <span>Login</span>
                    </a>
                    <a href="/daftar" class="px-6 py-3 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 transition-colors duration-300 flex items-center space-x-2 shadow-md">
                        <span>Daftar</span>
                    </a>
                </div>
            </div>

            <div class="relative aspect-video rounded-2xl overflow-hidden shadow-xl">
                <img src="{{ asset('images/Team_BuBaDiBaKo.webp') }}" alt="Team BuBaDiBaKo" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-gray-50 py-16 md:py-24" id="tentangKami">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">
                <span class="text-black">Tentang</span> <span class="text-emerald-500">Kami</span>
            </h2>

            <div class="relative aspect-video rounded-2xl overflow-hidden shadow-xl mb-10 group">
                <div id="videoContainer" class="w-full h-full" data-src="https://www.youtube.com/embed/-sm1vsg3Yn0?autoplay=1&mute=1"></div>
            </div>

            <div class="prose prose-lg max-w-none">
                <p class="text-gray-700 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi tempore sequi illo, consectetur voluptatum
                    minima laboriosam hic suscipit repudiandae, officia consequuntur eligendi atque? Consectetur accusantium,
                    expedita eos temporibus quos dolorem vitae, officiis sunt illo natus rem!
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Sit laudantium assumenda ipsum dolore, ducimus quis nulla at ab natus cupiditate esse facilis est sed
                    exercitationem. Facilis reiciendis eius, modi pariatur ducimus itaque dolorum iure error, laudantium quod
                    id dicta mollitia nemo alias placeat labore quas a vitae eaque ullam assumenda omnis?
                </p>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24" id="proker">
        <h2 class="text-3xl md:text-4xl font-bold mb-12">
            <span class="text-emerald-500">Proker</span> <span class="text-black">Kami</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Program Card 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl group">
                <div class="relative h-64 w-full overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Program Sosial" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 left-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">Sosial</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Program Sosial</h3>
                    <p class="text-gray-600 mb-4">Kegiatan sosial untuk membantu masyarakat yang membutuhkan</p>
                </div>
            </div>

            <!-- Program Card 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl group">
                <div class="relative h-64 w-full overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Program Edukasi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 left-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">Edukasi</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Program Edukasi</h3>
                    <p class="text-gray-600 mb-4">Berbagi pengetahuan dan keterampilan untuk meningkatkan kualitas hidup</p>
                </div>
            </div>

            <!-- Program Card 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl group">
                <div class="relative h-64 w-full overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Program Lingkungan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-4 left-4">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-medium">Lingkungan</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Program Lingkungan</h3>
                    <p class="text-gray-600 mb-4">Menjaga dan melestarikan lingkungan untuk masa depan yang lebih baik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Notulensi Section -->
    <section class="bg-gray-50 py-16 md:py-24" id="notulensi">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-emerald-500">NOTULENSI</h2>

            <div class="space-y-8">
                <!-- Notulensi Banner 1 -->
                <div class="relative w-full md:w-3/4 h-40 flex items-center px-8 md:px-16 bg-black" 
                     style="clip-path: polygon(0 0%, 100% 25%, 100% 75%, 0 100%);">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">Ketua</h3>
                </div>

                <!-- Notulensi Banner 2 -->
                <div class="relative w-full md:w-3/4 h-40 flex items-center px-8 md:px-16 bg-emerald-500 ml-auto" 
                     style="clip-path: polygon(0 25%, 100% 0%, 100% 100%, 0 75%);">
                    <h3 class="text-3xl md:text-4xl font-bold text-white ml-auto">Sekretaris</h3>
                </div>

                <!-- Notulensi Banner 3 -->
                <div class="relative w-full md:w-3/4 h-40 flex items-center px-8 md:px-16 bg-black" 
                     style="clip-path: polygon(0 0%, 100% 25%, 100% 75%, 0 100%);">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">Bendahara</h3>
                </div>

                <!-- Notulensi Banner 4 -->
                <div class="relative w-full md:w-3/4 h-40 flex items-center px-8 md:px-16 bg-emerald-500 ml-auto" 
                     style="clip-path: polygon(0 25%, 100% 0%, 100% 100%, 0 75%);">
                    <h3 class="text-3xl md:text-4xl font-bold text-white ml-auto">Koordinator Program</h3>
                </div>

                <!-- Notulensi Banner 5 -->
                <div class="relative w-full md:w-3/4 h-40 flex items-center px-8 md:px-16 bg-black" 
                     style="clip-path: polygon(0 0%, 100% 25%, 100% 75%, 0 100%);">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">Anggota</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24" id="kontak">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">KONTAK KAMI</h2>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- WhatsApp Contact Card -->
            <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl border-none shadow-lg hover:shadow-xl transition-all duration-300 h-full p-8">
                <h3 class="text-2xl font-bold text-center flex items-center justify-center gap-2 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    WhatsApp
                </h3>
                <ul class="space-y-4">
                    <li class="text-center">
                        <p class="font-semibold text-lg">Bayu</p>
                        <p class="text-emerald-600">080000000000</p>
                    </li>
                    <li class="text-center">
                        <p class="font-semibold text-lg">Bayu</p>
                        <p class="text-emerald-600">080000000000</p>
                    </li>
                    <li class="text-center">
                        <p class="font-semibold text-lg">Bayu</p>
                        <p class="text-emerald-600">080000000000</p>
                    </li>
                </ul>
            </div>

            <!-- Email Contact Card -->
            <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl border-none shadow-lg hover:shadow-xl transition-all duration-300 h-full p-8">
                <h3 class="text-2xl font-bold text-center flex items-center justify-center gap-2 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email
                </h3>
                <ul class="space-y-4">
                    <li class="text-center">
                        <p class="font-semibold text-lg">Bayu</p>
                        <p class="text-emerald-600">Bayufirdaus@gmail.com</p>
                    </li>
                    <li class="text-center">
                        <p class="font-semibold text-lg">Bayu</p>
                        <p class="text-emerald-600">Bayufirdaus@gmail.com</p>
                    </li>
                    <li class="text-center">
                        <p class="font-semibold text-lg">Bayu</p>
                        <p class="text-emerald-600">Bayufirdaus@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Floating Action Button -->
    <div id="chatBox" class="fixed bottom-24 right-6 w-80 bg-white shadow-lg rounded-xl p-4 hidden z-50">
    <h3 class="font-bold text-gray-700 mb-2">Tanya AI</h3>
    <textarea id="chatInput" class="w-full h-24 border border-gray-300 rounded-md p-2 resize-none focus:outline-none focus:ring focus:ring-emerald-300" placeholder="Ketik pertanyaan..."></textarea>
    <button class="mt-2 bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-md w-full">
        Kirim
    </button>
</div>

    <footer>
      
    </footer>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>