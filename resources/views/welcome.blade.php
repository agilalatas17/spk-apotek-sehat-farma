<x-user-layout>
    <header class="bg-white">
        <div
            class="container flex flex-col px-6 my-16 py-10 mx-auto space-y-6 lg:h-[48rem] lg:py-16 lg:flex-row lg:items-center">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-3xl font-semibold text-gray-800 lg:text-5xl">Selamat Datang
                        <br> di <span class="text-sky-500 ">Apotek Farma</span>
                    </h1>

                    <p class="mt-3 text-gray-600 dark:text-gray-400">Apotek Farma menyediakan berbagai produk kesehatan
                        dan siap melayani anda dengan sepenuh hati. Kami menjamin semua produk yang kami jual asli dan
                        terjaga kualitasnya.
                    </p>

                    <button
                        class="w-full px-5 py-3.5 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-600 rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Cari
                        rekomendasi obat</button>
                </div>
            </div>

            <div class="flex items-center justify-center w-full h-5/6 lg:w-4/6">
                <img class="object-cover w-full h-full mx-auto rounded-md" src="{{ asset('images/apotek (1).jpg') }}"
                    alt="glasses photo">
            </div>
        </div>
    </header>

    <section class="bg-white">
        <div class="container px-6 py-44 mx-auto">
            <div class="mt-8 space-y-8 lg:mt-12">
                <div class="lg:flex lg:items-center">
                    <div class="mt-4 lg:w-full lg:mt-0">
                        <img class="object-cover w-full h-4/5 rounded-lg md:h-96" src="{{ asset('images/tablet.jpg') }}"
                            alt="">
                    </div>
                    <div class="lg:w-1/2 px-12">
                        <p class="text-md font-semibold tracking-wider text-gray-600 uppercase">Fasilitas & Layananan
                        </p>
                        <h2 class="my-6 text-5xl font-medium font-serif text-gray-800 capitalize">Apotek Sehat <br>
                            Farma</h2>

                        <hr class="border border-sky-500 w-[10rem]">

                        <p class="mt-3 text-gray-600">Apotek Farma memberikan produk asli yang telah
                            terdaftar di BPOM dan memiliki nomer izin edar. Apoteker kami memberikan pelayanan yang
                            ramah dan memudahkan anda berkonsultasi seputar medikasi.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Hero Section + Form --}}
    {{-- <section id="form-preferensi" class="bg-gray-50 py-16 px-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-black mb-4">Temukan Obat Terbaik Sesuai Kebutuhan Anda</h1>
            <p class="text-gray-700 text-base md:text-lg mb-8 max-w-2xl mx-auto">
                Sistem rekomendasi yang menyesuaikan rasa, bentuk, harga, dan efek samping sesuai preferensimu.
            </p>

            <form action="#" method="POST"
                class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto text-left">
                @csrf

                <div>
                    <label class="block font-medium mb-1">Rasa Obat</label>
                    <select name="rasa" class="w-full rounded border-gray-300 p-2">
                        <option value="manis">Manis</option>
                        <option value="pahit">Pahit</option>
                        <option value="netral">Netral</option>
                    </select>
                </div>

                <div>
                    <label class="block font-medium mb-1">Tingkat Efek Samping</label>
                    <select name="efek_samping" class="w-full rounded border-gray-300 p-2">
                        <option value="ringan">Ringan</option>
                        <option value="sedang">Sedang</option>
                        <option value="berat">Berat</option>
                    </select>
                </div>

                <div>
                    <label class="block font-medium mb-1">Kisaran Harga</label>
                    <select name="harga" class="w-full rounded border-gray-300 p-2">
                        <option value="murah">Murah</option>
                        <option value="sedang">Sedang</option>
                        <option value="mahal">Mahal</option>
                    </select>
                </div>

                <div>
                    <label class="block font-medium mb-1">Bentuk Sediaan</label>
                    <select name="bentuk" class="w-full rounded border-gray-300 p-2">
                        <option value="tablet">Tablet</option>
                        <option value="sirup">Sirup</option>
                        <option value="kapsul">Kapsul</option>
                    </select>
                </div>


                <div class="md:col-span-2 text-center mt-4">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition w-full md:w-auto shadow-md">
                        Lihat Rekomendasi Obat
                    </button>
                </div>
            </form>
        </div>
    </section> --}}

    {{-- Keunggulan --}}
    {{-- <section class="py-16 px-4 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl md:text-3xl font-semibold mb-10 text-gray-800">Mengapa Menggunakan Sistem Ini?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="flex flex-col items-center text-center">
                    <div class="text-4xl md:text-5xl text-blue-600 mb-4">⚙️</div>
                    <h3 class="font-bold text-lg md:text-xl mb-2">Cerdas & Otomatis</h3>
                    <p class="text-gray-600 text-sm md:text-base">
                        Didukung oleh algoritma SAW untuk hasil rekomendasi yang objektif dan cepat.
                    </p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="text-4xl md:text-5xl text-blue-600 mb-4">🧬</div>
                    <h3 class="font-bold text-lg md:text-xl mb-2">Personalisasi Tinggi</h3>
                    <p class="text-gray-600 text-sm md:text-base">
                        Setiap pengguna mendapatkan hasil rekomendasi yang sesuai dengan kebutuhan masing-masing.
                    </p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="text-4xl md:text-5xl text-blue-600 mb-4">📱</div>
                    <h3 class="font-bold text-lg md:text-xl mb-2">Mudah Digunakan</h3>
                    <p class="text-gray-600 text-sm md:text-base">
                        Antarmuka bersih dan ramah pengguna, bisa diakses dari berbagai perangkat.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- CTA Akhir --}}
    {{-- <section class="bg-white py-28 px-4 mx-auto text-black text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Siap Temukan Obat Terbaik?</h2>
        <p class="mb-6 text-base md:text-lg text-gray-600">
            Mulai isi preferensi Anda dan lihat rekomendasi terbaik secara langsung.
        </p>
        <a href="#form-preferensi"
            class="bg-sky-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-sky-400 transition shadow-lg">
            Coba Sekarang
        </a>
    </section> --}}
</x-user-layout>
