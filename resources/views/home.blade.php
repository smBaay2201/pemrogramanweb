<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuBaDiBaKo - Budi Baik Di Balas Koko</title>
    <meta name="description" content="Komunitas sosial yang berfokus pada pertukaran kebaikan">
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
    <section class="px-8 sm:px-10 lg:px-8 py-23 md:pb-43" id='beranda'>
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
    <section class="bg-gray-50 py-10 md:py-10" id="tentangKami">
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

    <section class="bg-gray-50 py-20 md:py-28" id="notulensi">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl md:text-4xl font-bold mb-16 text-emerald-600 text-center">NOTULENSI</h2>

    <div class="space-y-12 max-w-4xl mx-auto">
      <!-- Ketua -->
      <a href="/notulensi/ketua" class="group flex flex-col md:flex-row items-center md:items-start w-full text-left bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden focus:outline-none">
        <div class="w-full md:w-full p-10 bg-emerald-500 text-white text-center">
          <h3 class="text-2xl font-bold">Ketua</h3>
        </div>
      </a>

      <!-- Sekretaris -->
      <a href="/notulensi/sekretaris" class="group flex flex-col md:flex-row-reverse items-center md:items-start w-full text-left bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden focus:outline-none">
        <div class="w-full md:w-full p-10 bg-black text-white text-center">
          <h3 class="text-2xl font-bold">Sekretaris</h3>
        </div>
      </a>

      <!-- Bendahara -->
      <a href="/notulensi/bendahara" class="group flex flex-col md:flex-row items-center md:items-start w-full text-left bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden focus:outline-none">
        <div class="w-full md:w-full p-10 bg-emerald-500 text-white text-center">
          <h3 class="text-2xl font-bold">Bendahara</h3>
        </div>
      </a>

      <!-- Koordinator Program -->
      <a href="/notulensi/koordinator-program" class="group flex flex-col md:flex-row-reverse items-center md:items-start w-full text-left bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden focus:outline-none">
        <div class="w-full md:w-full p-10 bg-black text-white text-center">
          <h3 class="text-2xl font-bold">Koordinator Program</h3>
        </div>
      </a>
      
    </div>
  </div>
</section>


<section class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28" id="kontak">
  <h2 class="text-3xl md:text-4xl font-bold mb-16 text-center text-emerald-600">KONTAK KAMI</h2>

  <div class="grid md:grid-cols-2 gap-10 max-w-6xl mx-auto">
    <!-- WhatsApp Card -->
    <div class="group bg-white border border-gray-200 rounded-2xl shadow-md hover:shadow-2xl transition duration-300 p-10 text-center">
      <div class="flex flex-col items-center justify-center space-y-4">
        <div class="bg-emerald-100 text-emerald-600 rounded-full p-4 group-hover:scale-110 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.52 3.48a11.94 11.94 0 0 0-16.9 0 12.06 12.06 0 0 0-2.43 13.07l-1.13 4.14a.75.75 0 0 0 .92.92l4.14-1.13a12.02 12.02 0 0 0 5.83 1.5c3.2 0 6.23-1.24 8.49-3.51a12 12 0 0 0 0-16.99zM12 21.25a9.24 9.24 0 0 1-4.61-1.22.75.75 0 0 0-.58-.07l-3.42.94.93-3.42a.75.75 0 0 0-.07-.58 9.28 9.28 0 1 1 7.75 4.35z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800">WhatsApp</h3>
        <ul class="space-y-2">
          <li>
            <p class="font-medium">Bayu</p>
            <a href="https://wa.me/6280000000000" target="_blank" class="text-emerald-600 hover:underline">0800-0000-0000</a>
          </li>
          <li>
            <p class="font-medium">Rina</p>
            <a href="https://wa.me/6281111111111" target="_blank" class="text-emerald-600 hover:underline">0811-1111-1111</a>
          </li>
          <li>
            <p class="font-medium">Dika</p>
            <a href="https://wa.me/6282222222222" target="_blank" class="text-emerald-600 hover:underline">0822-2222-2222</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Email Card -->
    <div class="group bg-white border border-gray-200 rounded-2xl shadow-md hover:shadow-2xl transition duration-300 p-10 text-center">
      <div class="flex flex-col items-center justify-center space-y-4">
        <div class="bg-emerald-100 text-emerald-600 rounded-full p-4 group-hover:scale-110 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4m8-6v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6m16 0V6a2 2 0 00-2-2H6a2 2 0 00-2 2v6" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800">Email</h3>
        <ul class="space-y-2">
          <li>
            <p class="font-medium">Bayu</p>
            <a href="mailto:bayufirdaus@gmail.com" class="text-emerald-600 hover:underline">bayufirdaus@gmail.com</a>
          </li>
          <li>
            <p class="font-medium">Rina</p>
            <a href="mailto:rina@example.com" class="text-emerald-600 hover:underline">rina@example.com</a>
          </li>
          <li>
            <p class="font-medium">Dika</p>
            <a href="mailto:dika@example.com" class="text-emerald-600 hover:underline">dika@example.com</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

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

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
  #chatbot-button {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: #4A90E2;
    color: white;
    border: none;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    font-size: 24px;
    cursor: pointer;
    z-index: 999;
  }

  #chatbot-box {
    display: none;
    position: fixed;
    bottom: 100px;
    right: 30px;
    width: 300px;
    max-height: 400px;
    background: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    overflow: hidden;
    z-index: 998;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  }

  #chat-messages {
    height: 300px;
    overflow-y: auto;
    padding: 10px;
    font-size: 14px;
  }

  #chat-input {
    display: flex;
    border-top: 1px solid #ccc;
  }

  #chat-input input {
    flex: 1;
    border: none;
    padding: 10px;
    font-size: 14px;
  }

  #chat-input button {
    background-color: #4A90E2;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
  }
</style>

<button id="chatbot-button">💬</button>

<div id="chatbot-box">
  <div id="chat-messages"></div>
  <div id="chat-input">
    <input type="text" id="message" placeholder="Tulis pertanyaan...">
    <button onclick="sendMessage()">Kirim</button>
  </div>
</div>

<script>
  const button = document.getElementById('chatbot-button');
  const box = document.getElementById('chatbot-box');
  const messages = document.getElementById('chat-messages');
  const input = document.getElementById('message');

  button.addEventListener('click', () => {
    box.style.display = box.style.display === 'none' ? 'block' : 'none';
  });

  function sendMessage() {
    const text = input.value;
    if (!text) return;

    appendMessage('👤', text);
    input.value = '';

    fetch('/api/chatbot', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ message: text })
    })
    .then(res => res.json())
    .then(data => {
      const reply = data?.candidates?.[0]?.content?.parts?.[0]?.text || 'Maaf, saya tidak mengerti.';
      appendMessage('🤖', reply);
    })
    .catch(() => {
      appendMessage('❌', 'Terjadi kesalahan.');
    });
  }

  function appendMessage(sender, text) {
    const msg = document.createElement('div');
    msg.innerHTML = `<strong>${sender}</strong>: ${text}`;
    messages.appendChild(msg);
    messages.scrollTop = messages.scrollHeight;
  }
</script>
</body>
</html>