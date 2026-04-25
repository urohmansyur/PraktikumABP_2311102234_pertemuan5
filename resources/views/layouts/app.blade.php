<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- ICONIFY -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!-- VITE -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

<div class="min-h-screen flex flex-col">

    <!--  NAVBAR (STICKY + MODERN) -->
    <nav class="bg-blue-700 text-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- LEFT -->
            <div class="flex items-center gap-2">
                <iconify-icon icon="mdi:storefront-outline" width="22"></iconify-icon>
                <h1 class="font-semibold text-lg tracking-wide">
                    Toko Pak Cokomi & Mas Wowo
                </h1>
            </div>

            <!-- RIGHT -->
            <div class="flex items-center gap-6">

                <!-- USER -->
                <div class="flex items-center gap-2 text-sm">
                    <iconify-icon icon="mdi:account-circle-outline" width="20"></iconify-icon>
                    <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                </div>

                <!-- LOGOUT -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        class="flex items-center gap-1 text-sm hover:opacity-80 transition">

                        <iconify-icon icon="mdi:logout" width="18"></iconify-icon>
                        <span class="hidden sm:inline">Logout</span>
                    </button>
                </form>

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="flex-1">
        <div class="max-w-7xl mx-auto px-6 py-8">

            <!-- GLOBAL SUCCESS -->
            @if(session('success'))
                <div id="toast"
                    class="mb-6 px-4 py-3 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-center gap-2">

                    <iconify-icon icon="mdi:check-circle-outline"></iconify-icon>
                    {{ session('success') }}
                </div>
            @endif

            <!-- GLOBAL ERROR -->
            @if($errors->any())
                <div class="mb-6 px-4 py-3 bg-red-50 border border-red-200 text-red-700 rounded-lg">
                    <ul class="list-disc pl-5 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="text-center text-sm text-gray-400 py-4 border-t">
        © {{ date('Y') }} 2311102234— MANSYUROH
    </footer>

</div>

<script>
    setTimeout(() => {
        const toast = document.getElementById('toast');
        if (toast) {
            toast.style.transition = "opacity 0.5s";
            toast.style.opacity = "0";
            setTimeout(() => toast.remove(), 500);
        }
    }, 2500);
</script>

</body>
</html>