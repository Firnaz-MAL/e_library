<x-guest-layout>
    <div class="flex items-start justify-center p-10 bg-gradient-to-br from-pink-100 via-yellow-100 to-blue-100">
        <div class="w-full max-w-md px-4 py-3 border shadow-2xl rounded-3xl bg-gradient-to-tr from-white/60 via-purple-100/40 to-white/60 backdrop-blur-lg border-white/30">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h2 class="mb-6 text-3xl font-bold text-center text-purple-700 drop-shadow-md">📚 Welcome Back!</h2>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="font-semibold text-pink-600" />
                    <x-text-input 
                        id="email" 
                        class="block w-full mt-1 border-pink-300 shadow-md rounded-xl focus:ring-2 focus:ring-pink-400 bg-white/70 backdrop-blur-sm" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus 
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="font-semibold text-green-600" />
                    <x-text-input 
                        id="password" 
                        class="block w-full mt-1 border-green-300 shadow-md rounded-xl focus:ring-2 focus:ring-green-400 bg-white/70 backdrop-blur-sm" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            class="text-blue-600 border-gray-300 rounded shadow-sm focus:ring-blue-400" 
                            name="remember">
                        <span class="text-sm text-gray-700 ms-2">{{ __('Ingatkan Saya') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-700 underline transition duration-150 ease-in-out hover:text-blue-900" href="{{ route('password.request') }}">
                            🔐 {{ __('Lupa Password ?') }}
                        </a>
                    @endif

                    <x-primary-button class="px-4 py-2 text-white transition duration-150 ease-in-out shadow-md bg-gradient-to-r from-green-400 to-blue-500 hover:from-green-500 hover:to-blue-600 rounded-xl">
                        🎉 {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

                        <!-- Belum Punya Akun -->
                        <div class="mt-8 text-center">
                            <p class="text-sm text-gray-700">
                                Belum punya akun? 
                                <a href="{{ route('register') }}" class="font-semibold text-pink-600 underline transition hover:text-pink-800">
                                    ✨ Daftar di sini!
                                </a>
                            </p>
                        </div>
            
        </div>
    </div>
</x-guest-layout>