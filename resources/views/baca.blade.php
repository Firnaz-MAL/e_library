<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6 text-gray-800 bg-gray-100">
    <div class="max-w-3xl p-8 mx-auto bg-white shadow-lg rounded-2xl">
        {{-- judul buku --}}
        <h1 class="text-3xl font-bold text-blue-700">{{ $books->judulbuku }}</h1>

        {{-- informasi buku --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 ">
            <div class="">
                <p class="text-sm text-gray-500">Penulis :</p>
                <p class="text-lg font-medium">{{ $books->detailmanajemen->penulis ?? '-' }}</p>
            </div>
            <div class="">
                <p class="text-sm text-gray-500">Penerbit :</p>
                <p class="text-lg font-medium">{{ $books->detailmanajemen->penerbit ?? '-' }}</p>
            </div>
            <div class="">
                <p class="text-sm text-gray-500">Tahun terbit :</p>
                <p class="text-lg font-medium">{{ $books->detailmanajemen->tahun_terbit ?? '-' }}</p>
            </div>
        </div>

        {{-- deskripsi buku --}}
        <div class="mt-4"></div>
            <p class="text-sm text-gray-500">ISI Buku :</p>
            <p class="text-lg font-medium">{{ $books->detailmanajemen->deskripsi ?? '-' }}</p>
        </div>
        
        {{-- Tombol Balek --}}
        @if (Auth::user()->usertype === 'admin')
            <a href="{{ Route('admin.dashboard') }}" class="px-4 py-2 mt-4 text-white bg-blue-500 rounded-lg hover:bg-blue-800">Kembali</a>
        @else 
            <a href="{{ Route('dashboard') }}" class="px-4 py-2 mt-4 text-white bg-blue-500 rounded-lg hover:bg-blue-800">Kembali</a>
        @endif
    </div>
</body>
</html>