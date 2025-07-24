<nav x-data="{ isOpen: false }"
    class="sticky top-0 bg-white shadow-md z-30 p-4 lg:px-32 flex flex-wrap items-center justify-between">
    <a href="{{ url('/') }}">
        <img class="w-auto h-12 sm:h-16" src="{{ asset('images/logo-apotek.png') }}" alt="Logo">
    </a>

    <div class="lg:hidden">
        <button @click="isOpen = !isOpen" type="button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
            </svg>
            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div :class="{ 'block': isOpen, 'hidden': !isOpen }"
        class="w-full lg:flex lg:items-center lg:w-auto mt-4 lg:mt-0 lg:space-x-8 hidden">


        <a href="{{ url('/') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Beranda</a>
        @auth
            @if (Auth::user()->role === 'user')
                <a href="{{ route('user.preferensi.index') }}"
                    class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Rekomendasi Obat</a>
            @endif
        @endauth

        @guest
            <a href="{{ route('login.user') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Rekomendasi
                Obat</a>
        @endguest
        <a href="{{ url('/contact') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Contact</a>

        <div class="mt-4 lg:mt-0 flex gap-3">
            @guest
                <a href="{{ route('login.user') }}"
                    class="px-5 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-500 transition">
                    Sign in
                </a>

            @endguest

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-5 py-2 bg-red-600 text-white rounded-full hover:bg-red-500 transition">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>
