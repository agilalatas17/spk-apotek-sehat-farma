<x-user-layout>
    <header class="w-full bg-center bg-cover h-4/5 lg:h-[56rem] relative"
        style="background-image: url('{{ asset('images/apotek-farma.jpg') }}')">
        <div class="flex items-center justify-center w-full h-full bg-gray-900/60">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-white">“Kesehatan Anda, Prioritas Kami”
                </h1>
                <p class="mt-4 text-xl text-gray-100">Selamat datang di Apotek Sehat
                    Farma, tempat di mana kesehatan
                    keluarga Anda menjadi fokus utama kami.</p>
                <a href="{{ route('user.preferensi.index') }}"
                    class="inline-block px-6 py-3 mt-8 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-500">Cari
                    Rekomendasi Obat</a>
            </div>
        </div>
    </header>

    <section class="bg-white">
        <div class="container px-6 py-20 mx-auto">
            <div class="mt-8 space-y-8 lg:mt-12">
                <div class="lg:flex lg:items-center">
                    <div class="mt-4 lg:w-full lg:mt-0">
                        <img class="object-cover w-full h-4/5 rounded-lg md:h-96"
                            src="{{ asset('images/apotek (1).jpg') }}" alt="">
                    </div>
                    <div class="lg:w-1/2 px-12">
                        <p class="text-md font-semibold tracking-wider text-gray-600 uppercase">Fasilitas & Layananan
                        </p>
                        <h2 class="my-6 text-5xl font-medium font-serif text-gray-800 capitalize">Apotek Sehat <br>
                            Farma</h2>

                        <hr class="border border-sky-500 w-[10rem]">

                        <p class="mt-3 text-gray-600">Apotek Farma menyediakan berbagai produk kesehatan
                            dan siap melayani anda dengan sepenuh hati. Kami menjamin semua produk yang kami jual asli
                            dan
                            terjaga kualitasnya.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container px-6 py-20 mx-auto">
            <div class="mt-8 space-y-8 lg:mt-12">
                <div class="lg:flex lg:items-center">
                    <div class="lg:w-1/2 px-12">
                        <p class="text-md font-semibold tracking-wider text-gray-600 uppercase">Sistem Pintar &
                            Rekomendasi
                        </p>
                        <h2 class="my-6 text-5xl font-medium font-serif text-gray-800 capitalize">Apotek Farma <br>
                            Pintar</h2>

                        <hr class="border border-sky-500 w-[10rem]">

                        <p class="mt-3 text-gray-600">Dengan sistem pintar dan layanan apoteker berpengalaman, kami
                            membantu Anda menemukan obat yang tepat, aman, dan terpercaya, khususnya untuk demam balita
                            dan kebutuhan lainnya.
                        </p>
                    </div>
                    <div class="mt-4 lg:w-full lg:mt-0">
                        <img class="object-cover w-full h-4/5 rounded-lg md:h-96"
                            src="{{ asset('images/sehat-farma.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-user-layout>
