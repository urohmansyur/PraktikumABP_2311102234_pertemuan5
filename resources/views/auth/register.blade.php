<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>

<body class="bg-blue-50 min-h-screen flex items-center justify-center">

<div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-blue-200">

    <!-- ICON -->
    <div class="flex justify-center mb-4">
        <iconify-icon icon="mdi:account-plus" width="50" class="text-blue-700"></iconify-icon>
    </div>

    <!-- TITLE -->
    <h2 class="text-2xl font-semibold text-blue-900 text-center mb-6">
        Register Akun
    </h2>

    <!-- ERROR -->
    @if ($errors->any())
        <div class="mb-4 text-red-500 text-sm">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- NAME -->
        <div class="mb-4">
            <label class="block text-sm text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="w-full mt-1 p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500"
                required autofocus>
        </div>

        <!-- EMAIL -->
        <div class="mb-4">
            <label class="block text-sm text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="w-full mt-1 p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500"
                required>
        </div>

        <!-- PASSWORD -->
        <div class="mb-4">
            <label class="block text-sm text-gray-700">Password</label>
            <input type="password" name="password"
                class="w-full mt-1 p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500"
                required>
        </div>

        <!-- CONFIRM -->
        <div class="mb-4">
            <label class="block text-sm text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation"
                class="w-full mt-1 p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500"
                required>
        </div>

        <!-- BUTTON -->
        <button type="submit"
            class="w-full bg-blue-700 hover:bg-blue-800 text-white py-2 rounded-md flex justify-center items-center gap-2">
            <iconify-icon icon="mdi:account-check"></iconify-icon>
            Register
        </button>

        <!-- LOGIN LINK -->
        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline text-sm">
                Sudah punya akun? Login
            </a>
        </div>

    </form>
</div>

</body>
</html>