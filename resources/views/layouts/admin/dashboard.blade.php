<x-admin-layout>
    <x-slot name="header">
        <nav class="bg-white w-full shadow-md rounded-none">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-4 gap-4 sm:gap-0">
                    <div class="flex items-center gap-3 sm:gap-6">
                        <div>
                            <h1 class="text-base sm:text-xl font-bold">
                                {{ __('Dashboard') }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ __('Welcome your dashboard!') }}
                            </p>
                        </div>
                    </div>

                    <!-- Desktop Dropdown -->
                    <div class="relative">
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div class="px-2 sm:px-4 lg:px-2">
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center gap-2">
                                                    <div>
                                                        <h1 class="text-sm font-semibold capitalize text-left">
                                                            {{ Auth::user()->name }}</h1>
                                                        <p class="text-xs text-gray-500">
                                                            {{ Auth::user()->email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="flex-1 px-2 sm:px-6 lg:px-12 overflow-y-auto">
        <div class="py-4 sm:py-6 mt-2 sm:mt-4 lg:py-8 bg-zinc-900 mx-auto shadow-lg rounded-md">
            <div class="w-full max-w-screen-xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="bg-white p-2 sm:p-8 overflow-hidden shadow-lg rounded-md">
                    <div class="flex items-center gap-4 sm:gap-6">
                        <div class="bg-zinc-900 shadow-md rounded-2xl py-3 px-3 ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>

                        </div>
                        <div class="px-2 sm:-ml-4 text-gray-900">
                            <h2 class="text-xl sm:text-3xl font-bold capitalize mb-0">
                                {{ __('Hi, Welcome back ') . Auth::user()->name . '!' }} <span
                                    class="inline-block text-xl sm:text-2xl">👋</span>
                            </h2>
                        </div>
                    </div>
                    <div class="px-2 mt-5 sm:ml-2 text-gray-500 font-semibold">
                        <p class="text-sm sm:text-base text-gray-500 leading-relaxed">
                            Kelola seluruh inventaris data produk, data kriteria, dan data penilaian alternatif dengan
                            efisien dan <br> terorganisir melalui dashboard yang telah dioptimalkan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-admin-layout>
