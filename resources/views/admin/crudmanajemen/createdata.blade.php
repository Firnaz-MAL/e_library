<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg p-8 bg-white shadow-xl rounded-2xl">
        <h2 class="mb-6 text-3xl font-bold text-center text-indigo-600">Tambah Buku</h2>

        <form action="{{ route('manajemen.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            <div class="flex flex-col">
                <label for="judulbuku" class="text-sm font-semibold text-gray-700">Judul Buku</label>
                <input type="text" name="judulbuku" id="judulbuku" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                
                @error('judulbuku')
                <div class="px-4 py-2 text-center text-white bg-red-400">
                    <h2>{{ $message }}</h2>
                </div>
                @enderror
                
            </div>
            <div class="flex flex-col">
                <label for="deskripsi" class="text-sm font-semibold text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>

                @error('deskripsi')
                <div class="px-4 py-2 text-center text-white bg-red-400">
                    <h2>{{ $message }}</h2>
                </div>
                @enderror
                
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="kodebuku" class="text-sm font-semibold text-gray-700">Kode Buku</label>
                    <input type="text" name="kodebuku" id="kodebuku" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" >
                    
                @error('kodebuku')
                    <div class="px-4 py-2 text-center text-white bg-red-400">
                        <h2>{{ $message }}</h2>
                    </div>
                @enderror
                
                </div>
                <div class="flex flex-col">
                    <label for="penulis" class="text-sm font-semibold text-gray-700">Penulis</label>
                    <input type="text" name="penulis" id="penulis" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" >
                    
                @error('penulis')
                <div class="px-4 py-2 text-center text-white bg-red-400">
                    <h2>{{ $message }}</h2>
                </div>
                @enderror
                
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="penerbit" class="text-sm font-semibold text-gray-700">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" >
                    
                @error('penerbit')
                <div class="px-4 py-2 text-center text-white bg-red-400">
                    <h2>{{ $message }}</h2>
                </div>
                @enderror
                
                </div>
                <div class="flex flex-col">
                    <label for="tahunterbit" class="text-sm font-semibold text-gray-700">Tahun Terbit</label>
                    <input type="number" name="tahunterbit" id="tahunterbit" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" >
                    
                @error('tahunterbit')
                <div class="px-4 py-2 text-center text-white bg-red-400">
                    <h2>{{ $message }}</h2>
                </div>
                @enderror
                
                </div>
            </div>
            <div class="flex flex-col">
                <label for="image" class="text-sm font-semibold text-gray-700">Gambar Buku</label>
                <input type="file" name="image" id="image" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                
                @error('image')
                <div class="px-4 py-2 text-center text-white bg-red-400">
                    <h2>{{ $message }}</h2>
                </div>
                @enderror
                
            </div>
            
            <button type="submit" class="w-full py-3 text-white transition duration-300 bg-indigo-500 rounded-lg hover:bg-indigo-600">Tambah Buku</button>
            <a href="{{ route('manajemen.index') }}" class="block w-full py-3 mt-3 text-center text-white transition duration-300 bg-blue-500 rounded-lg hover:bg-blue-600">Back</a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
                text: "Datanya gak bisa di tambah",
            });
        @endif
    </script>
</body>
</html>
