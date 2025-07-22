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
                                {{ __('Edit data produk obat') }}
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
                    <h2 class="text-4xl font-semibold text-gray-900 capitalize">Edit Data Obat</h2>
                    <p class="text-md font-normal text-gray-700">Silahkan isi form data obat yang ingin diubah</p>
                </div>

                <form method="POST" action="{{ route('admin.obat.update', $obat->id) }}">
                    @csrf @method('PUT')
                    <div class="grid grid-cols-2 gap-4 mt-8 sm:grid-cols-2">
                        <div>
                            <label class="text-gray-700" for="nama_obat">Nama Obat</label>
                            <input id="nama_obat" type="text" name="nama_obat" value="{{ $obat->nama_obat }}"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="kandungan">Kandungan</label>
                            <input id="kandungan" type="text" name="kandungan" value="{{ $obat->kandungan }}"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="rasa_obat">Rasa</label>
                            <input id="rasa_obat" type="text" name="rasa_obat" value="{{ $obat->rasa_obat }}"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="efek_samping">Efek Samping</label>
                            <input id="efek_samping" type="text" name="efek_samping"
                                value="{{ $obat->efek_samping }}"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="harga_obat">Harga Obat</label>
                            <input id="harga_obat" type="number" name="harga_obat" value="{{ $obat->harga_obat }}"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="bentuk_obat">Bentuk Obat</label>
                            <input id="bentuk_obat" type="text" name="bentuk_obat" value="{{ $obat->bentuk_obat }}"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700" for="stok_obat">Stok Obat</label>
                            <input id="stok_obat" type="number" name="stok_obat" value="{{ $obat->stok_obat }}"
                                class="block w-full px-4 py-4 mt-2 text-gray-900 bg-white border border-gray-200 rounded-md dark:border-gray-600 focus:border-gray-400 focus:ring-gray-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        <a href="{{ route('admin.obat.index') }}"
                            class="inline-block px-6 py-2 rounded-xl shadow text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition">
                            Cancel
                        </a>
                        <button type="submit"
                            class="inline-block px-6 py-2 rounded-xl shadow text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
