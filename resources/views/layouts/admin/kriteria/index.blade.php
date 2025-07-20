<x-admin-layout>
    <x-slot name="header">
        <nav class="bg-white w-full shadow-md rounded-md">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-start py-4 gap-4 sm:gap-0">
                    <div class="flex items-center gap-3 sm:gap-6">
                        <div>
                            <h1 class="text-base sm:text-xl font-bold">
                                {{ __('Kriteria dan Bobot') }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ __('Kelola kriteria dan bobot obat') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <section class="px-14 max-w-4xl">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-12">
            <div>
                <h2 class="text-lg font-semibold text-gray-800">Kelola Data Produk Obat</h2>
                <p class="text-sm text-gray-500">Anda dapat mengelola daftar produk obat disini.</p>
            </div>
            <div class="mt-4 sm:mt-0">
                <a href="{{ route('admin.kriteria.create') }}"
                    class="inline-flex items-center px-4 py-2.5 text-sm font-medium tracking-wide text-white bg-blue-600 rounded-md hover:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 mr-2">
                        <path fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm.75-10.25v2.5h2.5a.75.75 0 0 1 0 1.5h-2.5v2.5a.75.75 0 0 1-1.5 0v-2.5h-2.5a.75.75 0 0 1 0-1.5h2.5v-2.5a.75.75 0 0 1 1.5 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    Tambah Kriteria
                </a>
            </div>
        </div>

        <div class="overflow-x-auto mt-8 bg-white border border-gray-200 rounded-lg shadow">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-600 text-white">
                    <tr>
                        <th class="px-8 py-5 text-left font-medium">No</th>
                        <th class="px-8 py-5 text-left font-medium">Kriteria</th>
                        <th class="px-8 py-5 text-left font-medium">Atribut</th>
                        <th class="px-8 py-5 text-left font-medium">Bobot (%)</th>
                        <th scope="col" class="relative py-3.5 px-4">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($data as $index => $kriteria)
                        <tr>
                            <td class="px-8 py-3 whitespace-nowrap capitalize">{{ $index + 1 }}</td>
                            <td class="px-8 py-3 whitespace-nowrap capitalize">{{ $kriteria->nama }}</td>
                            <td class="px-8 py-3 whitespace-nowrap capitalize">{{ $kriteria->tipe }}</td>
                            <td class="px-8 py-3 whitespace-nowrap capitalize">{{ number_format($kriteria->bobot, 2) }}
                                ({{ number_format($kriteria->bobot * 100, 0) }}%)
                            </td>
                            <td class="px-8 py-3 text-center">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('admin.kriteria.edit', $kriteria->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 text-xs text-white gap-x-1 bg-blue-600 rounded hover:bg-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                            class="size-4">
                                            <path
                                                d="M13.488 2.513a1.75 1.75 0 0 0-2.475 0L6.75 6.774a2.75 2.75 0 0 0-.596.892l-.848 2.047a.75.75 0 0 0 .98.98l2.047-.848a2.75 2.75 0 0 0 .892-.596l4.261-4.262a1.75 1.75 0 0 0 0-2.474Z" />
                                            <path
                                                d="M4.75 3.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h6.5c.69 0 1.25-.56 1.25-1.25V9A.75.75 0 0 1 14 9v2.25A2.75 2.75 0 0 1 11.25 14h-6.5A2.75 2.75 0 0 1 2 11.25v-6.5A2.75 2.75 0 0 1 4.75 2H7a.75.75 0 0 1 0 1.5H4.75Z" />
                                        </svg>

                                        <span class="mt-0.5">Edit</span>
                                    </a>
                                    <form action="{{ route('admin.kriteria.destroy', $kriteria->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-3 py-1.5 text-xs text-white gap-x-1 bg-red-600 rounded hover:bg-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                fill="currentColor" class="size-4">
                                                <path fill-rule="evenodd"
                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm2.78-4.22a.75.75 0 0 1-1.06 0L8 9.06l-1.72 1.72a.75.75 0 1 1-1.06-1.06L6.94 8 5.22 6.28a.75.75 0 0 1 1.06-1.06L8 6.94l1.72-1.72a.75.75 0 1 1 1.06 1.06L9.06 8l1.72 1.72a.75.75 0 0 1 0 1.06Z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                            <span class="mt-0.5">Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
