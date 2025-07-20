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

    <section class="container px-6 py-8 mx-auto">
        <form method="POST" action="{{ route('admin.penilaian.store') }}">
            @csrf
            <div class="overflow-auto rounded-lg shadow">
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
                        @foreach ($obats as $obat)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $obat->nama_obat }}</td>
                                @foreach ($kriteria as $k)
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input name="nilai[{{ $obat->id }}][{{ $k->id }}]" type="number"
                                            min="1" max="5"
                                            class="w-20 px-2 py-1 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            required>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit"
                    class="inline-flex items-center px-6 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-500 transition duration-200">
                    Simpan Nilai
                </button>
            </div>
        </form>
    </section>
</x-admin-layout>
