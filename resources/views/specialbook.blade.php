<x-app-layout>

    <x-slot name="header"></x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Special Book</title>

        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="p-6 bg-gray-100">
        <div class="container mx-auto">

            {{-- Section 1 --}}
            <section class="px-6 mb-12">
                <h2 class="mb-8 text-4xl font-extrabold text-center text-gray-900">Special Book</h2>
                <div class="grid justify-center grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                    {{-- Card 1 --}}
                    <div class="p-6 mx-auto text-white transition duration-300 transform shadow-lg bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl w-80 hover:scale-105">
                        <img src="{{ asset('storage/products/pergi.jpg') }}" alt="Book Image" class="object-cover w-full mb-4 rounded-xl h-[400px]">
                        <h3 class="mt-2 text-xl font-bold">Judul Buku</h3>
                        <p class="mt-2 text-gray-200">Deskripsi singkat mengenai buku ini.</p><br>
                        <a href="https://drive.google.com/file/d/1tbbJveMy5J7jCiTWA64IzRBL1_BPwhHs/view?usp=sharing" storage="_blank" class="px-5 py-3 mt-6 font-semibold text-red-600 transition duration-300 bg-white w--full rounded-xl hover:bg-gray-200">Baca</a>
                    </div>

                    {{-- Card 2 --}}
                    <div class="p-6 mx-auto text-white transition duration-300 transform shadow-lg bg-gradient-to-br from-pink-500 to-red-500 rounded-xl w-80 hover:scale-105">
                        <img src="https://via.placeholder.com/300" alt="Book Image" class="object-cover w-full h-56 mb-4 rounded-xl">
                        <h3 class="mt-2 text-xl font-bold">Judul Buku</h3>
                        <p class="mt-2 text-gray-200">Deskripsi singkat mengenai buku ini.</p>
                        <button class="w-full px-5 py-3 mt-4 font-semibold text-red-600 transition duration-300 bg-white rounded-xl hover:bg-gray-200">Baca</button>
                    </div>

                    {{-- Card 3 --}}
                    <div class="p-6 mx-auto text-white transition duration-300 transform shadow-lg bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl w-80 hover:scale-105">
                        <img src="https://via.placeholder.com/300" alt="Book Image" class="object-cover w-full h-56 mb-4 rounded-xl">
                        <h3 class="mt-2 text-xl font-bold">Judul Buku</h3>
                        <p class="mt-2 text-gray-200">Deskripsi singkat mengenai buku ini.</p>
                        <button class="w-full px-5 py-3 mt-4 font-semibold text-blue-600 transition duration-300 bg-white rounded-xl hover:bg-gray-200">Baca</button>
                    </div>

                </div>
            </section>
            
        </div>
    </body>
    </html>

</x-app-layout>