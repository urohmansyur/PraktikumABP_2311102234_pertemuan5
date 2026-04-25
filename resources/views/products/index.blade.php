@extends('layouts.app')

@section('content')

<!-- ICONIFY -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<div class="max-w-7xl mx-auto px-6 py-8">

    <!-- HEADER -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-4">

        <div>
            <h1 class="text-3xl font-bold text-blue-900">
                Data Produk
            </h1>
            <p class="text-gray-500 mt-1">
                Kelola stok dan harga produk toko
            </p>
        </div>

        <a href="{{ route('products.create') }}"
           class="inline-flex items-center gap-2 bg-blue-800 hover:bg-blue-900 text-white px-5 py-2.5 rounded-lg shadow transition">

            <iconify-icon icon="mdi:plus" width="20"></iconify-icon>
            Tambah Produk
        </a>
    </div>


    <!-- FLASH MESSAGE -->
    @if(session('success'))
        <div class="mb-6 bg-green-100 text-green-700 px-4 py-3 rounded-lg border border-green-200">
            {{ session('success') }}
        </div>
    @endif


    <!-- TABLE -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">

        <table class="w-full text-sm">

            <!-- HEAD -->
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Nama Produk</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Harga</th>
                    <th class="px-6 py-3 text-center font-semibold text-gray-700">Stock</th>
                    <th class="px-6 py-3 text-center font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>

            <!-- BODY -->
            <tbody class="divide-y divide-gray-200">

                @forelse ($products as $product)
                <tr class="hover:bg-gray-50 transition">

                    <!-- NAMA -->
                    <td class="px-6 py-4 font-medium text-gray-800">
                        {{ $product->name }}
                    </td>

                    <!-- HARGA -->
                    <td class="px-6 py-4 text-gray-700">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </td>

                    <!-- STOCK -->
                    <td class="px-6 py-4 text-center">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full
                            {{ $product->stock <= 10 ? 'bg-red-100 text-red-600' : 'bg-blue-100 text-blue-700' }}">
                            {{ $product->stock }}
                        </span>
                    </td>

                    <!-- AKSI -->
                    <td class="px-6 py-4">
                        <div class="flex justify-center items-center gap-6">

                            <!-- EDIT -->
                            <a href="{{ route('products.edit', $product->id) }}"
                               class="flex items-center gap-1 text-blue-700 hover:text-blue-900">

                                <iconify-icon icon="mdi:pencil-outline" width="18"></iconify-icon>
                                <span>Edit</span>
                            </a>

                            <!-- DELETE -->
                            <form action="{{ route('products.destroy', $product->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin hapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="flex items-center gap-1 text-red-600 hover:text-red-800">

                                    <iconify-icon icon="mdi:delete-outline" width="18"></iconify-icon>
                                    <span>Hapus</span>
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>

                @empty
                <tr>
                    <td colspan="4" class="text-center py-12 text-gray-400">
                        <div class="flex flex-col items-center gap-2">
                            <iconify-icon icon="mdi:database-off-outline" width="40"></iconify-icon>
                            Belum ada data produk
                        </div>
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>

    </div>


    <!-- PAGINATION -->
    @if(method_exists($products, 'links'))
        <div class="mt-6">
            {{ $products->links() }}
        </div>
    @endif

</div>

@endsection