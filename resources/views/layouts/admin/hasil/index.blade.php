<x-admin-layout>
    <x-slot name="header">
        <nav class="bg-white w-full shadow-md rounded-md">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-start py-4 gap-4 sm:gap-0">
                    <div class="flex items-center gap-3 sm:gap-6">
                        <div>
                            <h1 class="text-base sm:text-xl font-bold">
                                {{ __('Hasil dan Perangkingan') }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ __('Urutan produk obat terbaik') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    {{-- Judul Halaman --}}
    <div class="px-16 py-3">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Perhitungan SAW - Rekomendasi Obat</h1>
            <p class="text-sm text-gray-500">Berikut adalah hasil perhitungan Simple Additive Weighting.</p>
        </div>
    </div>

    <div class="px-16 max-w-9xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-2">1. Tabel Nilai Awal</h2>
                <div class="overflow-auto border rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-600 text-white">
                            <tr>
                                <th class="px-4 py-2 text-left">Obat</th>
                                @foreach ($kriteria as $k)
                                    <th class="px-4 py-2 text-left">{{ $k->nama }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($obats as $obat)
                                <tr>
                                    <td class="px-4 py-2">{{ $obat->nama_obat }}</td>
                                    @foreach ($kriteria as $k)
                                        <td class="px-12 py-2">{{ $nilaiAwal[$obat->id][$k->id] ?? '-' }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-2">2. Tabel Normalisasi</h2>
                <div class="overflow-auto border rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-600 text-white">
                            <tr>
                                <th class="px-4 py-2 text-left">Obat</th>
                                @foreach ($kriteria as $k)
                                    <th class="px-4 py-2 text-left">{{ $k->nama }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($obats as $obat)
                                <tr>
                                    <td class="px-4 py-2">{{ $obat->nama_obat }}</td>
                                    @foreach ($kriteria as $k)
                                        <td class="px-8 py-2">
                                            {{ number_format($normalisasi[$obat->id][$k->id] ?? 0, 4) }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-2">3. Skor Akhir & Ranking</h2>
                <div class="overflow-auto border rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-600 text-white">
                            <tr>
                                <th class="px-4 py-2 text-left">Ranking</th>
                                <th class="px-4 py-2 text-left">Nama Obat</th>
                                <th class="px-4 py-2 text-left">Skor</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($hasil as $index => $row)
                                <tr>
                                    <td class="px-8 py-2">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2">{{ $row['nama_obat'] }}</td>
                                    <td class="px-2 py-2">{{ number_format($row['skor'], 4) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
