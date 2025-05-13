<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-center text-gray-800">
            {{ __('Baca E-book Disini') }}
        </h2>
    </x-slot>

    <!-- Grid Buku -->
    <div id="bookList" class="grid grid-cols-1 gap-6 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($books as $book)
            <div class="p-4 bg-white rounded-lg shadow-md">
                <img src="{{ asset('storage/products/'.$book->gambarbuku) }}" alt="Buku" class="object-cover w-full rounded-lg h-80">
                <h3 class="mt-3 text-lg font-bold text-center">{{ $book->judulbuku }}</h3>
                <p class="text-center">"Membaca Buku Sangat Bermanfaat Untuk Menambah Ilmu-Ilmu Baru"</p>
                <div class="flex justify-center gap-4 mt-5">
                    <a href="{{ route('baca', $book->id) }}">Baca Disini</a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>