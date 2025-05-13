<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-gray-900">
            {{ __('Manajemen') }}
        </h2>
    </x-slot>

    <div class="container py-12 mx-auto">
        <h1 class="mb-8 text-4xl font-extrabold text-center text-indigo-600">E-Library</h1>

        <!-- Tombol Tambah Data -->
        <div class="flex justify-center mb-8">
            <a href="{{ route('manajemen.create') }}" class="px-6 py-3 text-lg font-semibold text-white transition duration-300 bg-indigo-500 rounded-lg shadow-md hover:bg-indigo-600">Tambah Buku</a>
        </div>

        <!-- Grid Buku -->
        <div id="booklist" class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($books as $book)
                <div class="p-6 transition duration-300 bg-white shadow-lg rounded-2xl hover:shadow-2xl">
                    <img src="{{ asset('storage/products/'.$book->gambarbuku) }}" alt="Buku" class="object-cover w-full rounded-lg h-80">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">{{ $book->judulbuku }}</h3>
                    <p class="mt-2 text-sm text-gray-600">📚 "Setiap buku adalah petualangan yang menunggu untuk dijelajahi."</p>
                    
                    <div class="flex items-center justify-center gap-6 mt-5">
                        <a href="{{ route('manajemen.edit', $book->id) }}" class="text-lg font-semibold text-indigo-500 transition hover:text-indigo-700">Edit</a>
                        <form action="{{ route('manajemen.destroy', $book->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-lg font-semibold text-red-500 transition hover:text-red-700">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "sukses",
                text: "{{ session('success') }}",
            });
            @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "Gagal",
                text: "Datanya gak bisa di hapuss",
            });
        @endif
    </script>
</x-app-layout>
