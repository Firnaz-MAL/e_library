<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="p-4 bg-blue-600 shadow-lg">
        <div class="container flex items-center justify-between mx-auto">
            <a href="/" class="text-2xl font-bold text-white">E-Library</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/books" class="hover:underline">Books</a></li>
                <li><a href="/categories" class="hover:underline">Store</a></li>
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
    
    <!-- Content -->
    <div class="container p-6 mx-auto banner">
        <div class="flex items-center justify-center h-screen max-h-screen ">
            <div class="max-w-md max-h-full p-6 overflow-auto text-center bg-white rounded-lg shadow-lg">
                <h1 class="text-2xl font-bold text-gray-800">Selamat Datang Di Website My E-library</h1>
                <p class="mt-4 text-gray-600">
                    "Buku adalah jendela dunia, dan membaca adalah kunci untuk membukanya. Setiap halaman yang kamu baca adalah langkah kecil menuju impian besar. Jangan biarkan rasa malas menghalangimu untuk terus belajar dan bertumbuh."
                </p>
                <a href="{{ route('login') }}" class="inline-block px-6 py-3 mt-6 text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700">
                    Baca Sekarang
                </a>
            </div>
        </div>
    </div>
</body>
</html>