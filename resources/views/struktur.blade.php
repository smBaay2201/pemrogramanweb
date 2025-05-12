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
                <a href="/" class="text-2xl font-bold">
                    <span class="text-black">Bu</span>
                    <span class="text-emerald-500">Ba</span>
                    <span class="text-black">Di</span>
                    <span class="text-emerald-500">Ba</span>
                    <span class="text-black">Ko</span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/struktur" class="text-emerald-500 hover:text-emerald-600 transition-colors duration-200">
                        Struktur
                    </a>
                </div>
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
</body>
</html>