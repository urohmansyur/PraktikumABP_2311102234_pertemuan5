<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toko Pak Cokomi</title>

    <!-- Font (Google Fonts) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-white">

<!-- NAVBAR -->
<nav class="bg-blue-800 text-white px-6 py-4 flex justify-between items-center shadow">
    <div class="flex items-center gap-2">
        <iconify-icon icon="mdi:store" width="24"></iconify-icon>
        <h1 class="font-semibold text-lg">Toko Pak Cokomi & Mas Wowo</h1>
    </div>

    <div class="flex gap-4">
        @auth
            <a href="/dashboard" class="hover:underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="hover:underline">Login</a>
            <a href="{{ route('register') }}" class="hover:underline">Register</a>
        @endauth
    </div>
</nav>

<!-- HERO -->
<section class="text-center mt-24 px-6">

    <div class="flex justify-center mb-6">
        <iconify-icon icon="mdi:warehouse" width="80" class="text-blue-700"></iconify-icon>
    </div>

    <h2 class="text-4xl font-semibold text-blue-900 mb-4">
        Sistem Inventori Toko
    </h2>

    <p class="text-gray-600 max-w-xl mx-auto mb-8">
        Kelola stok barang, harga, dan data produk dengan mudah dan efisien 
        menggunakan sistem inventori modern berbasis web.
    </p>

    <div class="flex justify-center gap-4">
        <a href="{{ route('login') }}"
            class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-lg flex items-center gap-2">
            <iconify-icon icon="mdi:login"></iconify-icon>
            Login
        </a>

        <a href="{{ route('register') }}"
            class="border border-blue-700 text-blue-700 px-6 py-3 rounded-lg hover:bg-blue-50 flex items-center gap-2">
            <iconify-icon icon="mdi:account-plus"></iconify-icon>
            Register
        </a>
    </div>

</section>

<!-- FEATURES -->
<section class="mt-20 px-6 grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">

    <div class="bg-blue-50 p-6 rounded-lg text-center shadow-sm">
        <iconify-icon icon="mdi:package-variant" width="40" class="text-blue-700 mb-3"></iconify-icon>
        <h3 class="font-semibold text-blue-900">Manajemen Produk</h3>
        <p class="text-sm text-gray-600 mt-2">Kelola data produk dengan mudah</p>
    </div>

    <div class="bg-blue-50 p-6 rounded-lg text-center shadow-sm">
        <iconify-icon icon="mdi:cash" width="40" class="text-blue-700 mb-3"></iconify-icon>
        <h3 class="font-semibold text-blue-900">Harga & Stok</h3>
        <p class="text-sm text-gray-600 mt-2">Pantau harga dan stok barang</p>
    </div>

    <div class="bg-blue-50 p-6 rounded-lg text-center shadow-sm">
        <iconify-icon icon="mdi:chart-line" width="40" class="text-blue-700 mb-3"></iconify-icon>
        <h3 class="font-semibold text-blue-900">Efisien</h3>
        <p class="text-sm text-gray-600 mt-2">Sistem cepat dan mudah digunakan</p>
    </div>

</section>

</body>
</html>