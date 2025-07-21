<x-user-layout>
    <section id="form-preferensi" class="bg-white py-16 px-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-black mb-4">Temukan Obat Terbaik Sesuai Kebutuhan Anda</h1>
            <p class="text-gray-700 text-base md:text-lg mb-8 max-w-2xl mx-auto">
                Sistem rekomendasi yang menyesuaikan rasa, bentuk, harga, dan efek samping sesuai preferensimu.
            </p>

            <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto text-left">
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
    </section>
</x-user-layout>
