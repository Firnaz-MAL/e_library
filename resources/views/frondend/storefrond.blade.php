<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-blue-100">
    <!-- Navbar -->
    <nav class="p-4 bg-blue-600 shadow-lg">
        <div class="container flex items-center justify-between mx-auto">
            <a href="/" class="text-2xl font-bold text-white">E-Library</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/books" class="hover:underline">Books</a></li>
                <li><a href="/store" class="hover:underline">Store</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
            <div>
                @auth
                    <a href="/dashboard" class="px-4 py-2 text-white bg-green-500 rounded">Dashboard</a>
                @else
                    <a href="/login" class="px-4 py-2 text-white bg-gray-700 rounded">Login</a>
                    <a href="/register" class="px-4 py-2 text-white bg-yellow-500 rounded">Register</a>
                @endauth
            </div>
        </div>
    </nav>

        {{-- isi halaman store --}}
        <div class="container px-6 py-12 mx-auto">
            <h1 class="mb-8 text-3xl font-bold text-center text-gray-800">Lokasi Perpustakaan Offline</h1>
            <div class="grid gap-6 md:grid-cols-3">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-700">Perpustakaan jakarta</h2>
                    <p class="mt-2 text-gray-500">Jl. Sudirman No. 10, Jakarta Selatan</p>
                    <p class="text-gray-500">Jam Operasional : 08.00 - 20.00</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-700">Perpustakaan bandung</h2>
                    <p class="mt-2 text-gray-500">Jl. Cimani No. 08, Bandung Barat</p>
                    <p class="text-gray-500">Jam Operasional : 08.00 - 20.00</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Surabaya</h2>
                    <p class="mt-2 text-gray-500">Jl. Ahmad Yani No. 01, Surabaya Selatan</p>
                    <p class="text-gray-500">Jam Operasional : 08.00 - 20.00</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Medan</h2>
                    <p class="mt-2 text-gray-500">Jl. Madura No. 22, Medan Utara</p>
                    <p class="text-gray-500">Jam Operasional : 08.00 - 20.00</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Lampung</h2>
                    <p class="mt-2 text-gray-500">Jl. Sudirman No. 31, Lampung Tengah</p>
                    <p class="text-gray-500">Jam Operasional : 08.00 - 20.00</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Balikpapan</h2>
                    <p class="mt-2 text-gray-500">Jl. Tungking No. 28, Balikpapan</p>
                    <p class="text-gray-500">Jam Operasional : 08.00 - 20.00</p>
                </div>
            </div>
        </div>
</body>
</html>