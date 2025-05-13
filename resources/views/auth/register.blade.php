<x-guest-layout>
    <div class="flex items-center justify-center p-10 bg-gradient-to-br from-yellow-100 via-pink-100 to-blue-100">
        <div class="w-full max-w-md p-6 border shadow-xl rounded-3xl border-white/40 bg-gradient-to-br from-white/50 to-white/30 backdrop-blur-md">

            <h2 class="mb-6 text-3xl font-extrabold text-center text-violet-600 drop-shadow-md">
                📚 Daftar Jadi Sahabat Perpustakaan!
            </h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nama Lengkap')" class="font-semibold text-pink-600" />
                    <x-text-input id="name" class="block w-full mt-1 border-pink-300 shadow rounded-xl focus:ring-pink-400 bg-white/80" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email Aktif')" class="font-semibold text-blue-600" />
                    <x-text-input id="email" class="block w-full mt-1 border-blue-300 shadow rounded-xl focus:ring-blue-400 bg-white/80" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="font-semibold text-green-600" />
                    <x-text-input id="password" class="block w-full mt-1 border-green-300 shadow rounded-xl focus:ring-green-400 bg-white/80" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Ulangi Password')" class="font-semibold text-purple-600" />
                    <x-text-input id="password_confirmation" class="block w-full mt-1 border-purple-300 shadow rounded-xl focus:ring-purple-400 bg-white/80" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-500" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm underline text-violet-700 hover:text-violet-900" href="{{ route('login') }}">
                        Sudah punya akun?
                    </a>

                    <x-primary-button class="px-4 py-2 font-bold text-white shadow-md bg-gradient-to-r from-pink-400 to-violet-500 hover:from-pink-500 hover:to-violet-600 rounded-xl">
                        📖 Daftar Sekarang
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>