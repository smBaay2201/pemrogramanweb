<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - BuBaDiBaKo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-white">
       <!-- Navbar -->
       <nav class="w-full border-b">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
                <a href="/" class="text-2xl font-bold flex items-center">
                    <span class="text-black">Bu</span>
                    <span class="text-emerald-500">Ba</span>
                    <span class="text-black">Di</span>
                    <span class="text-emerald-500">Ba</span>
                    <span class="text-black">Ko</span>
                </a>
                <!-- Tombol Login -->
                <button onclick="alert('Login button clicked!')" class="bg-emerald-500 text-white px-4 py-2 rounded-lg hover:bg-emerald-600 transition">
                    Login
                </button>
            </div>
        </nav>


        <!-- Team Photos Top -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="rounded-xl overflow-hidden">
                    <img
                        src="{{ asset('images/adudu.jpg') }}"
                        alt="Tim BuBaDiBaKo 1"
                        class="w-full h-auto object-cover"
                    />
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img
                        src="{{ asset('images/adudu.jpg') }}"
                        alt="Tim BuBaDiBaKo 2"
                        class="w-full h-auto object-cover"
                    />
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img
                        src="{{ asset('images/adudu.jpg') }}"
                        alt="Tim BuBaDiBaKo 3"
                        class="w-full h-auto object-cover"
                    />
                </div>
            </div>
        </div>

        <!-- Team Description -->
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">
                    <span class="text-black">Struktur</span> <span class="text-emerald-500">Organisasi</span>
                </h2>
                <p class="text-lg text-gray-600">
                    Kami memiliki struktur organisasi yang terorganisir dengan baik untuk memastikan efisiensi dan efektivitas
                    dalam mencapai tujuan kami.
                </p>
            </div>
        </div>

        <!-- Header Section -->
        <div class="container mx-auto px-4 py-12 md:py-16">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Struktur Organisasi</h1>
                    <p class="text-lg text-gray-600">
                        Departemen yang bertugas dalam koordinasi, pengawasan, serta evaluasi terkait keberjalanan
                    </p>
                </div>
            </div>
        </div>

        <!-- Top Management -->
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 px-4">
                <!-- Ketua -->
                <div class="flex flex-col items-center">
                    <div class="relative w-64 h-64 mb-4 overflow-hidden rounded-2xl bg-emerald-400">
                        <img
                            src="{{ asset('images/adudu.jpg') }}"
                            alt="Ketua"
                            class="object-cover w-full h-full"
                        />
                    </div>
                    <h3 class="text-2xl font-bold text-center">Bayu Firdaus</h3>
                    <p class="text-xl text-center">Ketua</p>
                </div>

                <!-- Wakil Ketua -->
                <div class="flex flex-col items-center">
                    <div class="relative w-64 h-64 mb-4 overflow-hidden rounded-2xl bg-emerald-400">
                        <img
                            src="{{ asset('images/adudu.jpg') }}"
                            alt="Wakil Ketua"
                            class="object-cover w-full h-full"
                        />
                    </div>
                    <h3 class="text-2xl font-bold text-center">Ahmad Rizki</h3>
                    <p class="text-xl text-center">Wakil Ketua</p>
                </div>

                <!-- Sekretaris -->
                <div class="flex flex-col items-center">
                    <div class="relative w-64 h-64 mb-4 overflow-hidden rounded-2xl bg-emerald-400">
                        <img
                            src="{{ asset('images/adudu.jpg') }}"
                            alt="Sekretaris"
                            class="object-cover w-full h-full"
                        />
                    </div>
                    <h3 class="text-2xl font-bold text-center">Siti Nurhaliza</h3>
                    <p class="text-xl text-center">Sekretaris</p>
                </div>
            </div>
        </div>

        <!-- Bottom Management -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 max-w-4xl mx-auto">
                <!-- Bendahara -->
                <div class="flex flex-col items-center">
                    <div class="relative w-64 h-64 mb-4 overflow-hidden rounded-2xl bg-emerald-400">
                        <img
                            src="{{ asset('images/adudu.jpg') }}"
                            alt="Bendahara"
                            class="object-cover w-full h-full"
                        />
                    </div>
                    <h3 class="text-2xl font-bold text-center">Dian Sastro</h3>
                    <p class="text-xl text-center">Bendahara</p>
                </div>

                <!-- Koordinator Program -->
                <div class="flex flex-col items-center">
                    <div class="relative w-64 h-64 mb-4 overflow-hidden rounded-2xl bg-emerald-400">
                        <img
                            src="{{ asset('images/adudu.jpg') }}"
                            alt="Koordinator Program"
                            class="object-cover w-full h-full"
                        />
                    </div>
                    <h3 class="text-2xl font-bold text-center">Rudi Hartono</h3>
                    <p class="text-xl text-center">Koordinator Program</p>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-black text-white py-12 mt-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Logo & Deskripsi -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <img src="{{ asset('images/bubadibako-logo.png') }}" alt="Logo" class="w-10 h-10 object-contain">
                    <span class="text-xl font-bold">BuBaDiBaKo</span>
                </div>
                <p class="text-gray-400">
                    Budi Baik Di Balas Koko — Komunitas yang menginspirasi kebaikan melalui tindakan nyata.
                </p>
            </div>

            <!-- Navigasi -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Navigasi</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#beranda" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="#tentangKami" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#proker" class="hover:text-white transition">Proker</a></li>
                    <li><a href="#notulensi" class="hover:text-white transition">Notulensi</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-emerald-500 transition" aria-label="Instagram">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2c1.654 0 3 1.346 3 3v10c0 1.654-1.346 3-3 3H7c-1.654 0-3-1.346-3-3V7c0-1.654 1.346-3 3-3h10zM12 7c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5zm0 2c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm4.5-2a1.5 1.5 0 110 3 1.5 1.5 0 010-3z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-emerald-500 transition" aria-label="YouTube">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M10 15l5.19-3L10 9v6zm12-3c0-1.657-.673-3.156-1.757-4.243C19.156 6.673 17.657 6 16 6H8C6.343 6 4.844 6.673 3.757 7.757 2.673 8.844 2 10.343 2 12s.673 3.156 1.757 4.243C4.844 17.327 6.343 18 8 18h8c1.657 0 3.156-.673 4.243-1.757C21.327 15.156 22 13.657 22 12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 border-t border-gray-700 pt-6 text-center text-gray-500 text-sm">
            © {{ date('Y') }} BuBaDiBaKo. All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>