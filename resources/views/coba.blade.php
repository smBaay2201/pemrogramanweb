<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuBaDiBaKo - Budi Baik Di Balas Koko</title>
    <meta name="description" content="Komunitas sosial yang berfokus pada pertukaran kebaikan">
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    <!-- You may need to set up Vite correctly in your Laravel project -->
</head>
<body class="bg-white">
    <!-- Navigation Bar -->
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
            <a href="/notulensi" class="text-black hover:text-green-500">Notulensi</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 mt-8">
        <div class="flex flex-col md:flex-row">
            <!-- Left Side - Logo and Description -->
            <div class="md:w-1/2 pr-4">
                <div class="flex items-start mb-6">
                    <!-- Character Logo -->
                    <div class="mr-4">
                        <div class="w-32 h-32 bg-green-500 rounded-md overflow-hidden relative">
                            <!-- Stylized character face -->
                            <div class="absolute top-3 left-3 w-8 h-8 bg-white rounded-full"></div>
                            <div class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full"></div>
                            <div class="absolute w-4 h-4 bg-black rounded-full" style="top: 5px; left: 6px;"></div>
                            <div class="absolute w-4 h-4 bg-black rounded-full" style="top: 5px; right: 6px;"></div>
                            <div class="absolute bottom-5 left-1/4 w-16 h-10 bg-red-600 rounded-md"></div>
                        </div>
                    </div>
                    
                    <!-- Brand and Tagline -->
                    <div>
                        <h1 class="text-4xl font-bold mb-1">
                            <span class="text-black">Bu</span><span class="text-green-500">Ba</span><span class="text-black">Di</span><span class="text-green-500">Ba</span><span class="text-black">Ko</span>
                        </h1>
                        <p class="text-xl mb-4">
                            <span class="text-black">Budi </span><span class="text-green-500">Baik </span><span class="text-black">Di </span><span class="text-green-500">Balas </span><span class="text-black">Koko</span>
                        </p>
                        <p class="text-sm text-gray-700 mb-6 max-w-md">
                            "BuBaDiBaKo adalah komunitas sosial yang berfokus pada pertukaran kebaikan. Kami percaya bahwa setiap tindakan baik yang dilakukan akan kembali dalam bentuk yang lebih besar. Dengan semangat gotong royong, kami mengajak setiap individu untuk berbagi kebaikan dan memberikan manfaat bagi sesama."
                        </p>
                        
                        <!-- Action Buttons -->
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
            
            <!-- Right Side - Image Boxes shrinking to the right -->
            <div class="md:w-1/2 flex justify-start items-start mt-4 md:mt-0">
                <!-- Main section for the shrinking boxes -->
                <div class="flex flex-col w-full">
                    <!-- First row of boxes -->
                    <div class="flex items-center justify-start mb-4">
                        <!-- Box 1 (Largest) -->
                        <div class="bg-gray-200 rounded-md w-12 h-12 flex items-center justify-center mr-2">
                            <p class="text-gray-500 text-xs">50px</p>
                        </div>
                        
                        <!-- Box 2 -->
                        <div class="bg-gray-200 rounded-md w-10 h-10 flex items-center justify-center mr-2">
                            <p class="text-gray-500 text-xs">40px</p>
                        </div>
                        
                        <!-- Box 3 -->
                        <div class="bg-gray-200 rounded-md w-8 h-8 flex items-center justify-center mr-2">
                            <p class="text-gray-500 text-xs">32px</p>
                        </div>
                        
                        <!-- Box 4 (Smallest) -->
                        <div class="bg-gray-200 rounded-md w-6 h-6 flex items-center justify-center">
                            <p class="text-gray-500 text-xs">24px</p>
                        </div>
                    </div>
                    
                    <!-- Second row of boxes -->
                    <div class="flex items-center justify-start mb-4">
                        <div class="bg-gray-200 rounded-md w-12 h-12 flex items-center justify-center mr-2">
                            <p class="text-gray-500 text-xs">50px</p>
                        </div>
                        
                        <div class="bg-gray-200 rounded-md w-10 h-10 flex items-center justify-center mr-2">
                            <p class="text-gray-500 text-xs">40px</p>
                        </div>
                        
                        <div class="bg-gray-200 rounded-md w-8 h-8 flex items-center justify-center mr-2">
                            <p class="text-gray-500 text-xs">32px</p>
                        </div>
                        
                        <div class="bg-gray-200 rounded-md w-6 h-6 flex items-center justify-center">
                            <p class="text-gray-500 text-xs">24px</p>
                        </div>
                    </div>
                    
                    <!-- Space for large image placeholder -->
                    <div class="bg-gray-200 rounded-md w-full h-48 flex items-center justify-center mt-2">
                        <p class="text-gray-500">Ruang untuk gambar besar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background Decorations - Green Circles -->
    <div class="fixed top-0 right-0 w-40 h-40 bg-green-200 rounded-full -z-10 transform translate-x-20 -translate-y-10"></div>
    <div class="fixed bottom-0 left-0 w-64 h-64 bg-green-200 rounded-full -z-10 transform -translate-x-16 translate-y-16"></div>
    <div class="fixed top-1/2 right-0 w-32 h-32 bg-green-200 rounded-full -z-10 transform translate-x-16"></div>
</body>
</html>