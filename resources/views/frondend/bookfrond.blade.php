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

        {{-- isi halaman Book --}}
        <div class="min-h-screen p-6 bg-gray-100">
            <div class="bg-white shadow-md oferflow-x-auto rounded-2xl">
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50"></thead>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Buku
                            </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td class="px-6 py-3">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-3">
                                    <img src="{{ asset('storage/products/' . $book->gambarbuku) }}" alt="bambar Buku" class="w-16 h-16 rounded-md">
                                </td>
                                <td class="px-6 py-3">
                                    {{ $book->judulbuku }}
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
        
</body>
</html>