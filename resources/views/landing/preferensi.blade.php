<x-user-layout>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-12 mb-8">
            <div
                class="md:w-1/2 w-full bg-blue-50 border border-blue-200 rounded-lg p-6 shadow-sm flex flex-col justify-center">
                <div class="text-center my-4">
                    <h1 class="text-3xl font-bold text-center mb-4">Cari Obat Gak Perlu Ribet!</h1>
                </div>
                <p class="text-gray-700 mb-0.5">Apotek Sehat Farma hadir untuk membantu Anda menemukan obat yang tepat
                    untuk keluarga Anda dengan mudah dan cepat.</p>
                <p class="text-gray-700 mb-0.5">Dengan sistem pintar kami, Anda dapat mencari rekomendasi obat
                    berdasarkan preferensi Anda, seperti rasa, efek samping, harga, dan bentuk obat. Sistem kami
                    membantu Anda memilih obat berdasarkan:</p>
                <p class="text-gray-700 mb-4"></p>
                <ul class="list-disc pl-5 text-gray-700 space-y-1">
                    <li>✅ Efek samping yang minimal</li>
                    <li>✅ Harga yang sesuai budget</li>
                    <li>✅ Rasa dan bentuk obat yang disukai anak</li>
                    <li>✅ Ketersediaan langsung di apotek</li>
                </ul>
                <p class="text-gray-700 mt-4">
                    <strong>Butuh Saran? Konsultasi Langsung dengan Apoteker!</strong><br>
                    Kami siap membantu Anda dalam menentukan pilihan terbaik untuk keluarga tercinta.
                </p>
                <div class="mt-4 p-4 bg-blue-100 rounded-lg">
                    <p class="text-gray-800 font-semibold mb-2">Praktis & Cepat:</p>
                    <ul class="list-disc pl-5 text-gray-700 space-y-1">
                        <li>Cek rekomendasi obat otomatis</li>
                        <li>Konsultasi langsung</li>
                        <li>Pesan & ambil langsung di apotek</li>
                    </ul>
                </div>
            </div>
            <!-- Form Cari Rekomendasi Obat -->
            <div class="md:w-1/2 w-full flex flex-col justify-center">

                <form method="POST" action="{{ route('user.preferensi.index') }}"
                    class="bg-white shadow-sm border border-gray-200 rounded-lg p-12">
                    @csrf
                    <div class="my-6">
                        <h1 class="text-3xl font-bold text-center mb-8">Cari Rekomendasi Obat</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block mb-2 text-gray-700 font-semibold">Rasa Obat</label>
                            <input type="text" name="rasa_obat" placeholder="Contoh: Jeruk"
                                value="{{ old('rasa_obat') }}"
                                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                        </div>
                        <div>
                            <label class="block mb-2 text-gray-700 font-semibold">Efek Samping</label>
                            <input type="text" name="efek_samping" placeholder="Contoh: Mual"
                                value="{{ old('efek_samping') }}"
                                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                        </div>
                        <div>
                            <label class="block mb-2 text-gray-700 font-semibold">Harga Obat</label>
                            <select name="harga"
                                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                                <option value="">-- Pilih Kisaran Harga --</option>
                                <option value="murah">Murah (&lt;= Rp20.000)</option>
                                <option value="sedang">Sedang (Rp20.001 - Rp50.000)</option>
                                <option value="mahal">Mahal (&gt; Rp50.000)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 text-gray-700 font-semibold">Bentuk Obat</label>
                            <input type="text" name="bentuk_obat" placeholder="Contoh: Sirup"
                                value="{{ old('bentuk_obat') }}"
                                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center gap-4">
                        <button type="submit"
                            class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-500 transition">
                            Cari Rekomendasi
                        </button>
                        <a href="{{ route('user.preferensi.index') }}"
                            class="px-6 py-3 bg-gray-400 text-white font-semibold rounded-lg hover:bg-gray-500 transition">
                            Reset
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Hasil Rekomendasi Obat -->
        @if ($hasil->count())
            <h2 class="text-2xl font-bold mb-4 text-center">Hasil Rekomendasi Obat</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($hasil as $obat)
                    <div class="bg-white shadow-sm rounded-lg p-5 border border-gray-200 hover:shadow-xl transition">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $obat->nama_obat }}</h3>
                        <p class="text-gray-600"><strong>Rasa:</strong> {{ $obat->rasa_obat }}</p>
                        <p class="text-gray-600"><strong>Efek:</strong> {{ $obat->efek_samping }}</p>
                        <p class="text-gray-600"><strong>Bentuk:</strong> {{ $obat->bentuk_obat }}</p>
                        <p class="text-blue-600 font-bold mt-3 text-lg">
                            Rp{{ number_format($obat->harga_obat, 0, ',', '.') }}
                        </p>
                    </div>
                @endforeach
            </div>
        @elseif(request()->isMethod('post'))
            <p class="text-center text-gray-500 mt-6">Tidak ada obat yang sesuai dengan preferensi Anda.</p>
        @endif
    </div>
</x-user-layout>
