@php
    $books = session('books', []);
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookds</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="bookList" class="grid grid-cols-1 gap-6 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($books as $book)
            <div class="p-4 bg-white rounded-lg shadow-md">
                <img src="{{ asset('storage/products/'.$book->gambarbuku) }}" alt="Buku" class="object-cover w-full rounded-lg h-80">
                <h3 class="mt-3 text-lg font-bold text-center">{{ $book->judulbuku }}</h3>
                <p class="text-center">"Membaca Buku Sangat Bermanfaat Untuk Menambah Ilmu-Ilmu Baru"</p>
                <div class="flex justify-center gap-4 mt-5">
                    <a href="{{ route('/login') }}">Baca Disini</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
