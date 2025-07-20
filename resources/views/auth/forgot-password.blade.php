<x-guest-layout>
    {{-- Navbar Logo --}}
    <nav class="bg-white w-full border divide-y divide-gray-500 dark:divide-gray-500">
        <div class="container px-6 py-2 mx-auto md:flex md:justify-between md:items-center">
            <a href="{{ route('login') }}">
                <img class="w-auto h-12 sm:h-24" src="{{ asset('images/logo-apotek.png') }}" alt="">
            </a>
        </div>
    </nav>

    <div class="mt-32 justify-center flex flex-col md:flex-row">
        <div class="bg-white px-4 py-6 md: border border-gray-300 shadow-md rounded-lg">
            <div class="p-6 md:p-8 w-full max-w-xl">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 text-gray-400">
                                    <path
                                        d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                    <path
                                        d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                                </svg>
                            </div>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="block w-full font-anuphan pl-10 pr-3 py-4 border border-gray-300 rounded-lg bg-gray-50 text-gray-900 placeholder-gray-300 placeholder:font-medium focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="E.g. johndoe@gmail.com" required autofocus>

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-guest-layout>
