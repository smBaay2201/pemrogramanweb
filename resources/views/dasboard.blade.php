<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Organisasi</title>
  <link rel="stylesheet" href="./src/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="antialiased">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 transform -translate-x-full md:translate-x-0 bg-white border-r border-gray-200 transition-transform duration-300 ease-in-out">
      <div class="flex items-center justify-between p-4 border-b">
        <div class="flex items-center space-x-2">
          <img src="https://via.placeholder.com/40" alt="Logo" class="h-8 w-8 rounded-full" />
          <span class="text-xl font-bold text-primary-600">BuBaDiBaKo</span>
        </div>
        <button id="closeSidebar" class="md:hidden text-gray-500 hover:text-gray-700">
          <i class="fas fa-times"></i>
        </button>
      </div>
      
      <nav class="p-4 space-y-1">
        <a href="#dashboard" class="flex items-center space-x-3 px-3 py-2 rounded-md bg-primary-50 text-primary-700">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
        <a href="#content" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">
          <i class="fas fa-edit"></i>
          <span>Update Konten</span>
        </a>
        <a href="#attendance" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">
          <i class="fas fa-clipboard-check"></i>
          <span>Presensi</span>
        </a>
        <a href="#events" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">
          <i class="fas fa-calendar-alt"></i>
          <span>Eventaris</span>
        </a>
        <a href="#members" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">
          <i class="fas fa-users"></i>
          <span>Daftar Anggota</span>
        </a>
        <a href="#finance" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">
          <i class="fas fa-money-bill-wave"></i>
          <span>Keuangan</span>
        </a>
        <a href="#notes" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100">
          <i class="fas fa-file-alt"></i>
          <span>Notulensi</span>
        </a>
      </nav>
      
      <div class="absolute bottom-0 w-full p-4 border-t">
        <div class="flex items-center space-x-3">
          <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
          <div>
            <p class="text-sm font-medium">Ahmad Fauzi</p>
            <p class="text-xs text-gray-500">Admin</p>
          </div>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 md:ml-64">
      <!-- Top Navigation -->
      <header class="bg-white border-b border-gray-200 sticky top-0 z-30">
        <div class="px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
          <div class="flex items-center">
            <button id="openSidebar" class="md:hidden text-gray-500 hover:text-gray-700 mr-4">
              <i class="fas fa-bars"></i>
            </button>
            <h1 class="text-lg font-medium">Dashboard Organisasi</h1>
          </div>
          
          <div class="flex items-center space-x-4">
            <div class="relative">
              <input type="text" placeholder="Cari..." class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" />
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-400"></i>
              </div>
            </div>
            
            <button class="relative p-1 rounded-full text-gray-500 hover:text-gray-700 focus:outline-none">
              <i class="fas fa-bell"></i>
              <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
            </button>
            
            <div class="relative">
              <button id="userMenuButton" class="flex items-center space-x-2 focus:outline-none">
                <img src="https://via.placeholder.com/40" alt="User" class="h-8 w-8 rounded-full" />
                <span class="hidden md:block text-sm font-medium">Ahmad Fauzi</span>
                <i class="fas fa-chevron-down text-xs"></i>
              </button>
              
              <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                <div class="border-t border-gray-100"></div>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Page Content -->
      <main class="p-4 sm:p-6 lg:p-8">
        <!-- Dashboard Overview -->
        <section id="dashboard" class="mb-8">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="card">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-sm font-medium text-gray-500">Total Anggota</p>
                  <p class="text-2xl font-bold">45</p>
                </div>
                <div class="h-12 w-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <div class="mt-4 flex items-center text-sm">
                <span class="text-green-500 flex items-center">
                  <i class="fas fa-arrow-up mr-1"></i> 12%
                </span>
                <span class="text-gray-500 ml-2">Dari bulan lalu</span>
              </div>
            </div>
            
            <div class="card">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-sm font-medium text-gray-500">Kehadiran</p>
                  <p class="text-2xl font-bold">87%</p>
                </div>
                <div class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                  <i class="fas fa-clipboard-check"></i>
                </div>
              </div>
              <div class="mt-4 flex items-center text-sm">
                <span class="text-green-500 flex items-center">
                  <i class="fas fa-arrow-up mr-1"></i> 3%
                </span>
                <span class="text-gray-500 ml-2">Dari bulan lalu</span>
              </div>
            </div>
            
            <div class="card">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-sm font-medium text-gray-500">Acara Bulan Ini</p>
                  <p class="text-2xl font-bold">8</p>
                </div>
                <div class="h-12 w-12 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600">
                  <i class="fas fa-calendar-alt"></i>
                </div>
              </div>
              <div class="mt-4 flex items-center text-sm">
                <span class="text-red-500 flex items-center">
                  <i class="fas fa-arrow-down mr-1"></i> 5%
                </span>
                <span class="text-gray-500 ml-2">Dari bulan lalu</span>
              </div>
            </div>
            
            <div class="card">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-sm font-medium text-gray-500">Saldo Kas</p>
                  <p class="text-2xl font-bold">Rp 5.4 Jt</p>
                </div>
                <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                  <i class="fas fa-money-bill-wave"></i>
                </div>
              </div>
              <div class="mt-4 flex items-center text-sm">
                <span class="text-green-500 flex items-center">
                  <i class="fas fa-arrow-up mr-1"></i> 8%
                </span>
                <span class="text-gray-500 ml-2">Dari bulan lalu</span>
              </div>
            </div>
          </div>
          
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="card lg:col-span-2">
              <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-medium">Kegiatan Mendatang</h2>
                <button class="btn btn-outline text-sm">Lihat Semua</button>
              </div>
              <div class="table-container">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nama Kegiatan</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                      <th>Peserta</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="font-medium">Rapat Koordinasi Bulanan</td>
                      <td>18 Apr 2025</td>
                      <td><span class="badge badge-blue">Akan Datang</span></td>
                      <td>45 orang</td>
                      <td class="text-right"><button class="text-primary-600 hover:text-primary-800">Detail</button></td>
                    </tr>
                    <tr>
                      <td class="font-medium">Bakti Sosial di Panti Asuhan</td>
                      <td>20 Apr 2025</td>
                      <td><span class="badge badge-blue">Akan Datang</span></td>
                      <td>25 orang</td>
                      <td class="text-right"><button class="text-primary-600 hover:text-primary-800">Detail</button></td>
                    </tr>
                    <tr>
                      <td class="font-medium">Workshop Manajemen Keuangan</td>
                      <td>25 Apr 2025</td>
                      <td><span class="badge badge-blue">Akan Datang</span></td>
                      <td>30 orang</td>
                      <td class="text-right"><button class="text-primary-600 hover:text-primary-800">Detail</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <div class="card">
              <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-medium">Aktivitas Terkini</h2>
                <button class="btn btn-outline text-sm">Lihat Semua</button>
              </div>
              <div class="space-y-4">
                <div class="flex items-start space-x-3">
                  <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
                  <div>
                    <p class="text-sm"><span class="font-medium">Ahmad Fauzi</span> menambahkan notulensi rapat <span class="font-medium">Rapat Koordinasi Bulanan</span></p>
                    <p class="text-xs text-gray-500">10 menit yang lalu</p>
                  </div>
                </div>
                <div class="flex items-start space-x-3">
                  <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
                  <div>
                    <p class="text-sm"><span class="font-medium">Siti Rahayu</span> mengupdate data anggota <span class="font-medium">Rina Wati</span></p>
                    <p class="text-xs text-gray-500">30 menit yang lalu</p>
                  </div>
                </div>
                <div class="flex items-start space-x-3">
                  <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
                  <div>
                    <p class="text-sm"><span class="font-medium">Budi Santoso</span> menambahkan laporan keuangan <span class="font-medium">Bulan April 2025</span></p>
                    <p class="text-xs text-gray-500">1 jam yang lalu</p>
                  </div>
                </div>
                <div class="flex items-start space-x-3">
                  <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
                  <div>
                    <p class="text-sm"><span class="font-medium">Dewi Lestari</span> membuat kegiatan baru <span class="font-medium">Workshop Manajemen Keuangan</span></p>
                    <p class="text-xs text-gray-500">2 jam yang lalu</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Update Konten Section -->
        <section id="content" class="hidden mb-8">
          <div class="card">
            <div class="flex items-center justify-between mb-6">
              <h2 class="text-xl font-medium">Update Konten</h2>
              <button class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i> Tambah Konten
              </button>
            </div>
            
            <div class="table-container">
              <table class="table">
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Status</th>
                    <th>Tanggal Publikasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-medium">Kegiatan Bakti Sosial April 2025</td>
                    <td>Berita</td>
                    <td>Ahmad Fauzi</td>
                    <td><span class="badge badge-green">Dipublikasikan</span></td>
                    <td>15 Apr 2025</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Panduan Kegiatan Workshop Keuangan</td>
                    <td>Panduan</td>
                    <td>Siti Rahayu</td>
                    <td><span class="badge badge-yellow">Draft</span></td>
                    <td>-</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Pengumuman Rapat Anggota Tahunan</td>
                    <td>Pengumuman</td>
                    <td>Budi Santoso</td>
                    <td><span class="badge badge-green">Dipublikasikan</span></td>
                    <td>10 Apr 2025</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Laporan Kegiatan Maret 2025</td>
                    <td>Laporan</td>
                    <td>Dewi Lestari</td>
                    <td><span class="badge badge-green">Dipublikasikan</span></td>
                    <td>5 Apr 2025</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>

        <!-- Presensi Section -->
        <section id="attendance" class="hidden mb-8">
          <div class="card">
            <div class="flex items-center justify-between mb-6">
              <h2 class="text-xl font-medium">Presensi</h2>
              <button class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i> Rekam Kehadiran
              </button>
            </div>
            
            <div class="mb-6">
              <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                  <h3 class="text-lg font-medium">Ringkasan Kehadiran</h3>
                  <p class="text-sm text-gray-500">Statistik kehadiran anggota dalam kegiatan</p>
                </div>
                <div class="flex items-center gap-2">
                  <button class="btn btn-outline text-sm flex items-center">
                    <i class="fas fa-chevron-left mr-2"></i>
                    Bulan Lalu
                  </button>
                  <div class="font-medium">April 2025</div>
                  <button class="btn btn-outline text-sm flex items-center">
                    Bulan Depan
                    <i class="fas fa-chevron-right ml-2"></i>
                  </button>
                </div>
              </div>
            </div>
            
            <div class="table-container">
              <table class="table">
                <thead>
                  <tr>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th class="text-center">Hadir</th>
                    <th class="text-center">Tidak Hadir</th>
                    <th class="text-center">Izin</th>
                    <th class="text-center">Persentase</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-medium">Rapat Koordinasi Bulanan</td>
                    <td>17 Apr 2025</td>
                    <td>09:00 - 11:00</td>
                    <td>Ruang Rapat Utama</td>
                    <td class="text-center">38</td>
                    <td class="text-center">4</td>
                    <td class="text-center">3</td>
                    <td class="text-center">
                      <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">84%</span>
                    </td>
                    <td>
                      <button class="text-primary-600 hover:text-primary-800">Detail</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Workshop Pengembangan Kepemimpinan</td>
                    <td>10 Apr 2025</td>
                    <td>13:00 - 16:00</td>
                    <td>Aula Serbaguna</td>
                    <td class="text-center">40</td>
                    <td class="text-center">2</td>
                    <td class="text-center">3</td>
                    <td class="text-center">
                      <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">89%</span>
                    </td>
                    <td>
                      <button class="text-primary-600 hover:text-primary-800">Detail</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Rapat Divisi Humas</td>
                    <td>5 Apr 2025</td>
                    <td>10:00 - 12:00</td>
                    <td>Ruang Rapat Kecil</td>
                    <td class="text-center">8</td>
                    <td class="text-center">0</td>
                    <td class="text-center">0</td>
                    <td class="text-center">
                      <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">100%</span>
                    </td>
                    <td>
                      <button class="text-primary-600 hover:text-primary-800">Detail</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>

        <!-- Eventaris Section -->
        <section id="events" class="hidden mb-8">
          <div class="card">
            <div class="flex items-center justify-between mb-6">
              <h2 class="text-xl font-medium">Eventaris</h2>
              <button class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i> Tambah Acara
              </button>
            </div>
            
            <div class="mb-6">
              <div class="flex flex-wrap gap-4">
                <button class="btn btn-outline text-sm bg-primary-50 text-primary-700 border-primary-200">Semua</button>
                <button class="btn btn-outline text-sm">Akan Datang</button>
                <button class="btn btn-outline text-sm">Berlangsung</button>
                <button class="btn btn-outline text-sm">Selesai</button>
                <button class="btn btn-outline text-sm">Dibatalkan</button>
              </div>
            </div>
            
            <div class="table-container">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Acara</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>PIC</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-medium">Rapat Koordinasi Bulanan</td>
                    <td>18 Apr 2025</td>
                    <td>09:00 - 11:00</td>
                    <td>Ruang Rapat Utama</td>
                    <td>Ahmad Fauzi</td>
                    <td><span class="badge badge-blue">Akan Datang</span></td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Bakti Sosial di Panti Asuhan</td>
                    <td>20 Apr 2025</td>
                    <td>08:00 - 12:00</td>
                    <td>Panti Asuhan Kasih Bunda</td>
                    <td>Siti Rahayu</td>
                    <td><span class="badge badge-blue">Akan Datang</span></td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Workshop Manajemen Keuangan</td>
                    <td>25 Apr 2025</td>
                    <td>13:00 - 16:00</td>
                    <td>Aula Serbaguna</td>
                    <td>Budi Santoso</td>
                    <td><span class="badge badge-blue">Akan Datang</span></td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Workshop Pengembangan Kepemimpinan</td>
                    <td>10 Apr 2025</td>
                    <td>13:00 - 16:00</td>
                    <td>Aula Serbaguna</td>
                    <td>Dewi Lestari</td>
                    <td><span class="badge badge-green">Selesai</span></td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>

        <!-- Daftar Anggota Section -->
        <section id="members" class="hidden mb-8">
          <div class="card">
            <div class="flex items-center justify-between mb-6">
              <h2 class="text-xl font-medium">Daftar Anggota</h2>
              <button class="btn btn-primary">
                <i class="fas fa-user-plus mr-2"></i> Tambah Anggota
              </button>
            </div>
            
            <div class="mb-6">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                <div class="relative">
                  <input type="search" placeholder="Cari anggota..." class="w-full sm:w-64 pl-10 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" />
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                  </div>
                </div>
                <div class="flex gap-2">
                  <button class="btn btn-outline text-sm bg-primary-50 text-primary-700 border-primary-200">Semua</button>
                  <button class="btn btn-outline text-sm">Aktif</button>
                  <button class="btn btn-outline text-sm">Tidak Aktif</button>
                </div>
              </div>
            </div>
            
            <div class="table-container">
              <table class="table">
                <thead>
                  <tr>
                    <th>Anggota</th>
                    <th>Jabatan</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Status</th>
                    <th>Tanggal Bergabung</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="flex items-center space-x-3">
                        <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
                        <span class="font-medium">Ahmad Fauzi</span>
                      </div>
                    </td>
                    <td>Ketua</td>
                    <td>ahmad.fauzi@example.com</td>
                    <td>+62 812-3456-7890</td>
                    <td><span class="badge badge-green">Aktif</span></td>
                    <td>15 Mei 2022</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex items-center space-x-3">
                        <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
                        <span class="font-medium">Siti Rahayu</span>
                      </div>
                    </td>
                    <td>Sekretaris</td>
                    <td>siti.rahayu@example.com</td>
                    <td>+62 812-3456-7891</td>
                    <td><span class="badge badge-green">Aktif</span></td>
                    <td>20 Mei 2022</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex items-center space-x-3">
                        <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
                        <span class="font-medium">Budi Santoso</span>
                      </div>
                    </td>
                    <td>Bendahara</td>
                    <td>budi.santoso@example.com</td>
                    <td>+62 812-3456-7892</td>
                    <td><span class="badge badge-green">Aktif</span></td>
                    <td>1 Juni 2022</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex items-center space-x-3">
                        <img src="https://via.placeholder.com/40" alt="User" class="h-10 w-10 rounded-full" />
                        <span class="font-medium">Rina Wati</span>
                      </div>
                    </td>
                    <td>Anggota Divisi Humas</td>
                    <td>rina.wati@example.com</td>
                    <td>+62 812-3456-7896</td>
                    <td><span class="badge badge-red">Tidak Aktif</span></td>
                    <td>10 Januari 2023</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>

        <!-- Keuangan Section -->
        <section id="finance" class="hidden mb-8">
          <div class="card">
            <div class="flex items-center justify-between mb-6">
              <h2 class="text-xl font-medium">Keuangan</h2>
              <div class="flex space-x-2">
                <button class="btn btn-outline">
                  <i class="fas fa-download mr-2"></i> Export
                </button>
                <button class="btn btn-primary">
                  <i class="fas fa-plus mr-2"></i> Tambah Transaksi
                </button>
              </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
              <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                <p class="text-sm font-medium text-green-700">Total Pemasukan</p>
                <p class="text-2xl font-bold text-green-700">Rp 8.500.000</p>
                <div class="mt-2 flex items-center text-sm">
                  <span class="text-green-600 flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i> 12%
                  </span>
                  <span class="text-green-600 ml-2">Dari bulan lalu</span>
                </div>
              </div>
              
              <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <p class="text-sm font-medium text-red-700">Total Pengeluaran</p>
                <p class="text-2xl font-bold text-red-700">Rp 3.100.000</p>
                <div class="mt-2 flex items-center text-sm">
                  <span class="text-red-600 flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i> 5%
                  </span>
                  <span class="text-red-600 ml-2">Dari bulan lalu</span>
                </div>
              </div>
              
              <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                <p class="text-sm font-medium text-blue-700">Saldo Kas</p>
                <p class="text-2xl font-bold text-blue-700">Rp 5.400.000</p>
                <div class="mt-2 flex items-center text-sm">
                  <span class="text-blue-600 flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i> 8%
                  </span>
                  <span class="text-blue-600 ml-2">Dari bulan lalu</span>
                </div>
              </div>
            </div>
            
            <div class="mb-6">
              <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div class="flex flex-wrap gap-2">
                  <button class="btn btn-outline text-sm bg-primary-50 text-primary-700 border-primary-200">Semua</button>
                  <button class="btn btn-outline text-sm">Pemasukan</button>
                  <button class="btn btn-outline text-sm">Pengeluaran</button>
                </div>
                <div class="flex items-center gap-2">
                  <button class="btn btn-outline text-sm flex items-center">
                    <i class="fas fa-chevron-left mr-2"></i>
                    Bulan Lalu
                  </button>
                  <div class="font-medium">April 2025</div>
                  <button class="btn btn-outline text-sm flex items-center">
                    Bulan Depan
                    <i class="fas fa-chevron-right ml-2"></i>
                  </button>
                </div>
              </div>
            </div>
            
            <div class="table-container">
              <table class="table">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>PIC</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>17 Apr 2025</td>
                    <td class="font-medium">Iuran Anggota Bulan April</td>
                    <td>Iuran Rutin</td>
                    <td><span class="text-green-600 font-medium">Pemasukan</span></td>
                    <td class="font-medium">Rp 2.250.000</td>
                    <td>Budi Santoso</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>15 Apr 2025</td>
                    <td class="font-medium">Donasi Program Bakti Sosial</td>
                    <td>Donasi</td>
                    <td><span class="text-green-600 font-medium">Pemasukan</span></td>
                    <td class="font-medium">Rp 3.500.000</td>
                    <td>Budi Santoso</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12 Apr 2025</td>
                    <td class="font-medium">Pembelian ATK untuk Sekretariat</td>
                    <td>Operasional</td>
                    <td><span class="text-red-600 font-medium">Pengeluaran</span></td>
                    <td class="font-medium">Rp 450.000</td>
                    <td>Siti Rahayu</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10 Apr 2025</td>
                    <td class="font-medium">Konsumsi Workshop Kepemimpinan</td>
                    <td>Kegiatan</td>
                    <td><span class="text-red-600 font-medium">Pengeluaran</span></td>
                    <td class="font-medium">Rp 1.200.000</td>
                    <td>Dewi Lestari</td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>

        <!-- Notulensi Section -->
        <section id="notes" class="hidden mb-8">
          <div class="card">
            <div class="flex items-center justify-between mb-6">
              <h2 class="text-xl font-medium">Notulensi</h2>
              <button class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i> Tambah Notulensi
              </button>
            </div>
            
            <div class="mb-6">
              <div class="relative">
                <input type="search" placeholder="Cari notulensi..." class="w-full sm:w-64 pl-10 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" />
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="fas fa-search text-gray-400"></i>
                </div>
              </div>
            </div>
            
            <div class="table-container">
              <table class="table">
                <thead>
                  <tr>
                    <th>Judul Rapat</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Peserta</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-medium">Rapat Koordinasi Bulanan</td>
                    <td>17 Apr 2025</td>
                    <td>09:00 - 11:00</td>
                    <td>Ruang Rapat Utama</td>
                    <td>38</td>
                    <td><span class="badge badge-green">Selesai</span></td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></button>
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Workshop Pengembangan Kepemimpinan</td>
                    <td>10 Apr 2025</td>
                    <td>13:00 - 16:00</td>
                    <td>Aula Serbaguna</td>
                    <td>40</td>
                    <td><span class="badge badge-green">Selesai</span></td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></button>
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Rapat Divisi Humas</td>
                    <td>5 Apr 2025</td>
                    <td>10:00 - 12:00</td>
                    <td>Ruang Rapat Kecil</td>
                    <td>8</td>
                    <td><span class="badge badge-green">Selesai</span></td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></button>
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-medium">Rapat Persiapan Kegiatan Tahunan</td>
                    <td>25 Apr 2025</td>
                    <td>14:00 - 16:00</td>
                    <td>Ruang Rapat Utama</td>
                    <td>0</td>
                    <td><span class="badge badge-blue">Dijadwalkan</span></td>
                    <td>
                      <div class="flex space-x-2">
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></button>
                        <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>

  <script type="module" src="./src/main.js"></script>
</body>
</html>