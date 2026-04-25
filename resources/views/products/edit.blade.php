@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    <!-- HEADER -->
    <div class="mb-6">

        <!-- BACK BUTTON (PINDAH KE ATAS) -->
        <a href="{{ route('products.index') }}"
           class="inline-flex items-center gap-2 text-gray-600 hover:text-blue-700 mb-4 transition">

            <iconify-icon icon="mdi:arrow-left" width="20"></iconify-icon>
            <span>Kembali</span>
        </a>

        <h1 class="text-2xl font-bold text-blue-900">
            Edit Produk
        </h1>
        <p class="text-gray-500 text-sm">
            Perbarui data produk
        </p>
    </div>

    <!-- CARD -->
    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">

        <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- NAMA -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nama Produk
                </label>
                <input type="text" name="name"
                       value="{{ $product->name }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- HARGA -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Harga
                </label>
                <input type="number" name="price"
                       value="{{ $product->price }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- STOCK -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Stock
                </label>
                <input type="number" name="stock"
                       value="{{ $product->stock }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- ACTION -->
            <div class="flex justify-end pt-4">

                <button type="submit"
                    class="inline-flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white px-5 py-2.5 rounded-lg shadow-sm transition">

                    <iconify-icon icon="mdi:content-save-outline" width="20"></iconify-icon>
                    Update
                </button>

            </div>

        </form>

    </div>

</div>
@endsection