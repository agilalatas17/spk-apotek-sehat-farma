<footer class="bg-neutral-950 text-white">
    <div class="container px-6 py-24 mx-auto">
        <div class="flex flex-col items-center text-center">
            <a href="#">
                <img class="w-auto h-12" src="{{ asset('images/logo-apotek.png') }}" alt="Apotek Farma Logo">
            </a>

            <div class="flex flex-wrap items-center justify-center py-6 gap-4 lg:gap-6 lg:mt-0">
                <a href="#"
                    class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
                    Beranda
                </a>

                <a href="#"
                    class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
                    Rekomendasi Obat
                </a>

                <a href="#"
                    class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
                    Contact
                </a>
                <a href="{{ route('login.admin') }}"
                    class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
                    Teams
                </a>
            </div>
        </div>

        <hr class="my-6 border-gray-700 md:my-10" />

        <div class="flex flex-col items-center sm:flex-row sm:justify-between">
            <p class="text-sm text-gray-400">
                © 2025 - <span class="text-sky-500 font-semibold">Apotek Farma</span>. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
