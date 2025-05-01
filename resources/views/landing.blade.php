<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css') <!-- Jika pakai Vite -->
</head>
<body class="bg-white text-gray-800">

    <!-- Header -->
    <header class="bg-gray-900 text-white py-6 text-center">
        <h1 class="text-3xl font-bold">Selamat Datang di Website Kami</h1>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-100 py-20 text-center px-4">
        <h2 class="text-4xl font-extrabold mb-4">Judul Besar Halaman</h2>
        <p class="text-lg text-gray-600 mb-6">Deskripsi singkat yang menarik perhatian pengunjung.</p>
        <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition">Pelajari Lebih Lanjut</a>
    </section>

    <!-- Features Section -->
    <section class="py-16 px-4 text-center">
        <h2 class="text-3xl font-bold mb-8">Fitur Unggulan</h2>
        <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-8">
            <div class="bg-white border shadow-sm p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-2">Fitur 1</h3>
                <p class="text-gray-600">Deskripsi fitur pertama.</p>
            </div>
            <div class="bg-white border shadow-sm p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-2">Fitur 2</h3>
                <p class="text-gray-600">Deskripsi fitur kedua.</p>
            </div>
            <div class="bg-white border shadow-sm p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-2">Fitur 3</h3>
                <p class="text-gray-600">Deskripsi fitur ketiga.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 text-center">
        <p>&copy; {{ date('Y') }} Nama Website. All rights reserved.</p>
    </footer>

</body>
</html>
