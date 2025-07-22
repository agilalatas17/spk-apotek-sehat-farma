<x-admin-layout>
    <x-slot name="header">
        <nav class="bg-white w-full shadow-md rounded-md">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-start py-4 gap-4 sm:gap-0">
                    <div class="flex items-center gap-3 sm:gap-6">
                        <div>
                            <h1 class="text-base sm:text-xl font-bold">
                                {{ __('Daftar Produk Obat') }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ __('Tambah data produk obat') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="flex flex-col justify-start">
        <div class="my-12 overflow-x-auto sm:mx-6">
            <div class="max-w-3xl mx-8 p-8 bg-white rounded-md shadow-md border border-gray-400">
                <div>
                    <h2 class="text-4xl font-semibold text-gray-900 capitalize">Tambah Obat</h2>
                    <p class="text-md font-normal text-gray-700">Silahkan isi form untuk menambah data produk obat</p>
                </div>

                <form method="POST" action="{{ route('admin.obat.store') }}">

                    @csrf
                    <div class="grid grid-cols-2 gap-4 mt-8 sm:grid-cols-2">
                        <div>
                            <label class="text-gray-700" for="nama_obat">Nama Obat</label>
                            <input id="nama_obat" type="text" name="nama_obat"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="kandungan">Kandungan</label>
                            <input id="kandungan" type="text" name="kandungan"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="rasa_obat">Rasa</label>
                            <input id="rasa_obat" type="text" name="rasa_obat"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="efek_samping">Efek Samping</label>
                            <input id="efek_samping" type="text" name="efek_samping"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="harga_obat">Harga Obat</label>
                            <input id="harga_obat" type="number" name="harga_obat"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="bentuk_obat">Bentuk Obat</label>
                            <input id="bentuk_obat" type="text" name="bentuk_obat"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="stok_obat">Stok Obat</label>
                            <input id="stok_obat" type="number" name="stok_obat"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 mt-6">
                        <a href="{{ route('admin.obat.index') }}"
                            class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:bg-gray-600">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-gray-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
