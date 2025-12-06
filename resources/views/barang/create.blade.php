<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('barang.index') }}" class="mr-4 text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tambah Barang Baru') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('barang.store') }}">
                        @csrf

                        <!-- Nama Barang -->
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">
                                Nama Barang <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('nama') border-red-500 @enderror"
                                placeholder="Masukkan nama barang" required>
                            @error('nama')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-4">
                            <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">
                                Kategori <span class="text-red-500">*</span>
                            </label>

                            <select name="kategori" id="kategori"
                                class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('kategori') border-red-500 @enderror"
                                required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Elektronik" {{ old('kategori') == 'Elektronik' ? 'selected' : '' }}>
                                    Elektronik</option>
                                <option value="Furniture" {{ old('kategori') == 'Furniture' ? 'selected' : '' }}>
                                    Furniture</option>
                                <option value="Alat Tulis" {{ old('kategori') == 'Alat Tulis' ? 'selected' : '' }}>Alat
                                    Tulis</option>
                                <option value="Makanan" {{ old('kategori') == 'Makanan' ? 'selected' : '' }}>Makanan
                                </option>
                                <option value="Minuman" {{ old('kategori') == 'Minuman' ? 'selected' : '' }}>Minuman
                                </option>
                                <option value="Pakaian" {{ old('kategori') == 'Pakaian' ? 'selected' : '' }}>Pakaian
                                </option>
                                <option value="Aksesoris" {{ old('kategori') == 'Aksesoris' ? 'selected' : '' }}>
                                    Aksesoris</option>
                            </select>

                            @error('kategori')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <!-- Jumlah -->
                            <div>
                                <label for="jumlah" class="block text-sm font-medium text-gray-700 mb-1">
                                    Jumlah/Stok <span class="text-red-500">*</span>
                                </label>
                                <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah') }}"
                                    min="0"
                                    class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('jumlah') border-red-500 @enderror"
                                    placeholder="0" required>
                                @error('jumlah')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Harga Satuan -->
                            <div>
                                <label for="harga_satuan" class="block text-sm font-medium text-gray-700 mb-1">
                                    Harga Satuan (Rp) <span class="text-red-500">*</span>
                                </label>
                                <input type="number" name="harga_satuan" id="harga_satuan"
                                    value="{{ old('harga_satuan') }}" min="0"
                                    class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('harga_satuan') border-red-500 @enderror"
                                    placeholder="0" required>
                                @error('harga_satuan')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Total Nilai Preview -->
                        <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-700">Total Nilai:</span>
                                <span id="total-nilai" class="text-lg font-bold text-indigo-600">Rp 0</span>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="flex items-center justify-end space-x-3">
                            <a href="{{ route('barang.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Batal
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateTotalNilai() {
            const jumlah = parseFloat(document.getElementById('jumlah').value) || 0;
            const harga = parseFloat(document.getElementById('harga_satuan').value) || 0;
            const total = jumlah * harga;
            document.getElementById('total-nilai').textContent = 'Rp ' + total.toLocaleString('id-ID');
        }

        document.getElementById('jumlah').addEventListener('input', updateTotalNilai);
        document.getElementById('harga_satuan').addEventListener('input', updateTotalNilai);
    </script>
</x-app-layout>
