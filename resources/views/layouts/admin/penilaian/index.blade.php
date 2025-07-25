<x-admin-layout>
    <x-slot name="header">
        <nav class="bg-white w-full shadow-md rounded-md">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-start py-4 gap-4 sm:gap-0">
                    <div class="flex items-center gap-3 sm:gap-6">
                        <div>
                            <h1 class="text-base sm:text-xl font-bold">
                                {{ __('Input Nilai Kriteria') }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ __('Masukkan nilai untuk setiap obat berdasarkan kriteria') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="px-16 py-3">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Perhitungan SAW - Input Nilai Kriteria</h1>
            <p class="text-sm text-gray-500">Penentuan obat terbaik berdasarkan kriteria yang telah ditentukan.</p>
        </div>
    </div>

    <section class="container px-16 py-2 mx-auto">
        <form method="POST" action="{{ route('admin.penilaian.store') }}">
            @csrf
            <div class="overflow-auto rounded-lg max-w-3xl shadow">
                <table class="w-full table-auto border border-gray-200">
                    <thead class="bg-gray-600 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Nama Obat</th>
                            @foreach ($kriteria as $k)
                                <th class="px-6 py-3 text-left text-sm font-semibold">{{ $k->nama }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 text-gray-800">
                        @foreach ($obats as $o)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $o->nama_obat }}</td>
                                @foreach ($kriteria as $k)
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input name="nilai[{{ $o->id }}][{{ $k->id }}]" type="number"
                                            step="0.01"
                                            class="w-20 px-2 py-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            required>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex justify-start gap-4">
                <button type="submit"
                    class="inline-block px-6 py-2 rounded-xl shadow text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition">
                    Simpan Nilai
                </button>
            </div>
            
        </form>
    </section>
</x-admin-layout>
