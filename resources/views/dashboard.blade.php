@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">

    <!-- TITLE -->
    <h1 class="text-3xl font-semibold text-blue-900 mb-8">
        Dashboard Inventori
    </h1>

    <!-- CARDS -->
    <div class="grid md:grid-cols-2 gap-6">

        <!-- TOTAL PRODUK -->
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-500">Total Produk</p>
                <h2 class="text-3xl font-bold text-blue-900 mt-1">
                    {{ $totalProduk }}
                </h2>
            </div>

            <div class="bg-blue-100 p-3 rounded-lg">
                <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 13V7a2 2 0 00-2-2h-3V3H9v2H6a2 2 0 00-2 2v6m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6m16 0H4"/>
                </svg>
            </div>
        </div>

        <!-- TOTAL STOCK -->
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-gray-500">Total Stock</p>
                <h2 class="text-3xl font-bold text-blue-900 mt-1">
                    {{ $totalStock }}
                </h2>
            </div>

            <div class="bg-blue-100 p-3 rounded-lg">
                <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7h18M3 12h18M3 17h18"/>
                </svg>
            </div>
        </div>

    </div>

    <!-- ACTION -->
    <div class="mt-8">
        <a href="{{ route('products.index') }}"
            class="inline-flex items-center gap-2 bg-blue-800 hover:bg-blue-900 text-white px-6 py-3 rounded-lg shadow">
            
            <!-- ICON -->
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4v16m8-8H4"/>
            </svg>

            Kelola Produk
        </a>
    </div>

</div>
@endsection