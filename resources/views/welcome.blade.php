<x-user-layout>
    <header class="bg-white">
        <div class="w-full bg-center bg-cover h-screen"
            style="background-image: url('https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80');">
            <div class="flex items-center justify-center w-full px-6 py-8 lg:h-screen lg:w-1/2">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Build Your New <span
                            class="text-blue-600 dark:text-blue-400">Idea</span></h2>

                    <p class="mt-4 text-sm text-gray-500 dark:text-gray-400 lg:text-base">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id
                        necessitatibus odio quam quasi, quibusdam rem tempora voluptates.</p>

                    <div class="flex flex-col mt-6 space-y-3 lg:space-y-0 lg:flex-row">
                        <a href="#"
                            class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-white transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-700">Get
                            Started</a>
                        <a href="#"
                            class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-gray-700 transition-colors duration-300 transform bg-gray-200 rounded-md lg:mx-4 hover:bg-gray-300">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Hero Section + Form --}}
    <section id="form-preferensi" class="bg-gray-50 py-16 px-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-black mb-4">Temukan Obat Terbaik Sesuai Kebutuhan Anda</h1>
            <p class="text-gray-700 text-base md:text-lg mb-8 max-w-2xl mx-auto">
                Sistem rekomendasi yang menyesuaikan rasa, bentuk, harga, dan efek samping sesuai preferensimu.
            </p>

            {{-- FORM Preferensi --}}
            <form action="#" method="POST"
                class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto text-left">
                @csrf

                {{-- Rasa Obat --}}
                <div>
                    <label class="block font-medium mb-1">Rasa Obat</label>
                    <select name="rasa" class="w-full rounded border-gray-300 p-2">
                        <option value="manis">Manis</option>
                        <option value="pahit">Pahit</option>
                        <option value="netral">Netral</option>
                    </select>
                </div>

                {{-- Efek Samping --}}
                <div>
                    <label class="block font-medium mb-1">Tingkat Efek Samping</label>
                    <select name="efek_samping" class="w-full rounded border-gray-300 p-2">
                        <option value="ringan">Ringan</option>
                        <option value="sedang">Sedang</option>
                        <option value="berat">Berat</option>
                    </select>
                </div>

                {{-- Harga --}}
                <div>
                    <label class="block font-medium mb-1">Kisaran Harga</label>
                    <select name="harga" class="w-full rounded border-gray-300 p-2">
                        <option value="murah">Murah</option>
                        <option value="sedang">Sedang</option>
                        <option value="mahal">Mahal</option>
                    </select>
                </div>

                {{-- Bentuk Sediaan --}}
                <div>
                    <label class="block font-medium mb-1">Bentuk Sediaan</label>
                    <select name="bentuk" class="w-full rounded border-gray-300 p-2">
                        <option value="tablet">Tablet</option>
                        <option value="sirup">Sirup</option>
                        <option value="kapsul">Kapsul</option>
                    </select>
                </div>

                {{-- Tombol Submit --}}
                <div class="md:col-span-2 text-center mt-4">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition w-full md:w-auto shadow-md">
                        Lihat Rekomendasi Obat
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Keunggulan --}}
    <section class="py-16 px-4 bg-white">
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
    </section>

    {{-- CTA Akhir --}}
    <section class="bg-white py-28 px-4 mx-auto text-black text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Siap Temukan Obat Terbaik?</h2>
        <p class="mb-6 text-base md:text-lg text-gray-600">
            Mulai isi preferensi Anda dan lihat rekomendasi terbaik secara langsung.
        </p>
        <a href="#form-preferensi"
            class="bg-sky-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-sky-400 transition shadow-lg">
            Coba Sekarang
        </a>
    </section>
</x-user-layout>
