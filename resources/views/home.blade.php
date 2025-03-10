<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuBaDiBaKo - Budi Baik Di Balas Koko</title>
    <meta name="description" content="Komunitas sosial yang berfokus pada pertukaran kebaikan">

    @vite('resources/css/app.css')

</head>
<body class="bg-white">

    <nav class="flex items-center justify-between p-4">
        <div>
            <a href="/" class="text-2xl font-bold">
                <span class="text-black">Bu</span><span class="text-green-500">Ba</span><span class="text-black">Di</span><span class="text-green-500">Ba</span><span class="text-black">Ko</span>
            </a>
        </div>
        <div class="flex space-x-4">
            <a href="/" class="text-black hover:text-green-500">Beranda</a>
            <div class="relative group">
                <a href="#" class="text-green-500 hover:text-green-700">Profile</a>

            </div>
            <a href="/kontak" class="text-black hover:text-green-500">Kontak</a>
            <a href="/notulensi" class="text-green-500 hover:text-green-700">Notulensi</a>
        </div>
    </nav>

    <div class="container mx-auto px-5 mt-5 relative">
        <div class="absolute right-4 top-0 md:w-1/2 md:pr-4 z-10">
            <div class="bg-gray-200 rounded-md w-full h-64 md:h-70 flex items-center justify-center">
                <p class="text-gray-500">Ruang untuk gambar</p>
            </div>
        </div>
    <div class="container mx-1 px-8 mt-35">
        <div class="flex flex-col md:flex-row">

            <div class="md:w-1/2 pr-4">
                <div class="flex items-start mb-6">

                    <div class="mr-4">
                    <img src="{{ asset('images/bubadibako-logo.png') }}" alt="BuBaDiBaKo Logo">
                    </div>
                    
                    <div>
                        <h1 class="text-6xl font-bold mb-3">
                            <span class="text-black">Bu</span><span class="text-green-500">Ba</span><span class="text-black">Di</span><span class="text-green-500">Ba</span><span class="text-black">Ko</span>
                        </h1>
                        <p class="text-xl mb-4">
                            <span class="text-black">Budi </span><span class="text-green-500">Baik </span><span class="text-black">Di </span><span class="text-green-500">Balas </span><span class="text-black">Koko</span>
                        </p>
                        <p class="text-sm text-gray-700 mb-6 max-w-md">
                            "BuBaDiBaKo adalah komunitas sosial yang berfokus pada pertukaran kebaikan. Kami percaya bahwa setiap tindakan baik yang dilakukan akan kembali dalam bentuk yang lebih besar. Dengan semangat gotong royong, kami mengajak setiap individu untuk berbagi kebaikan dan memberikan manfaat bagi sesama."
                        </p>
                        
                        <div class="flex space-x-2">
                            <a href="/jelajahi" class="px-4 py-2 bg-black text-white rounded-md hover:bg-gray-800">
                                Jelajahi <span class="ml-1">@</span>
                            </a>
                            <a href="/daftar" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                                Daftar <span class="ml-1">↑</span>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="fixed top-0 right-0 w-40 h-40 bg-green-200 rounded-full -z-10 transform translate-x-20 -translate-y-10"></div>
    <div class="fixed bottom-0 left-0 w-64 h-64 bg-green-200 rounded-full -z-10 transform -translate-x-16 translate-y-16"></div>
    <div class="fixed top-1/2 right-0 w-32 h-32 bg-green-200 rounded-full -z-10 transform translate-x-16"></div>
</body>
</html>