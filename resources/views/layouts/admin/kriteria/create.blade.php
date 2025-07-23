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
                                {{ __('Tambah data kriteria') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="flex flex-col justify-start">
        <div class="my-12 overflow-x-auto sm:mx-6">
            <div class="max-w-xl mx-8 p-8 bg-white rounded-md shadow-md border border-gray-400">
                <div>
                    <h2 class="text-4xl font-semibold text-gray-900 capitalize">Tambah Kriteria</h2>
                    <p class="text-md font-normal text-gray-700">Silahkan isi form untuk menambah data kriteria</p>
                </div>

                <form method="POST" action="{{ route('admin.kriteria.store') }}">

                    @csrf
                    <div class="grid grid-cols-1 gap-4 mt-8 sm:grid-cols-1">
                        <div>
                            <label class="text-gray-700" for="nama">Nama Kriteria</label>
                            <input id="nama" type="text" name="nama" placeholder="Nama Kriteria"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="tipe">Atribut</label>
                            <select name="tipe"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                <option selected>Silahkan pilih atribut</option>
                                <option value="benefit">Benefit</option>
                                <option value="cost">Cost</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-gray-700" for="bobot">Bobot (%)</label>
                            <input id="bobot" name="bobot" type="number" step="0.01"
                                placeholder="Bobot (0-1), Contoh: 0,20" required
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        <a href="{{ route('admin.kriteria.index') }}"
                            class="inline-block px-6 py-2 rounded-xl shadow text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition">
                            Cancel
                        </a>
                        <button type="submit"
                            class="inline-block px-6 py-2 rounded-xl shadow text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition">
                            Save
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
