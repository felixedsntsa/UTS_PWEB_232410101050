@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    <x-navbar></x-navbar>

    <section class="px-8 py-12 flex flex-col md:flex-row items-center justify-center gap-80">
        <div class="max-w-lg">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">
                <span class="text-green-700">LahanTani:</span> <br>
                Solusi Digital untuk Budidaya Buah <span class="text-green-700">Melon</span>
            </h2>
            <h3 class="text-black text-2xl max-w-md mb-6 font-semibold">Selamat datang <span class="text-green-600">{{ $username }}</span>!</h3>
        </div>
        <img src="/asset/farmer_man.png" alt="Laptop Screenshot" class="w-20 md:w-1/3 mt-10 md:mt-0">
    </section>

    <section class="px-8 py-12 bg-white">
        <h2 class="text-2xl font-bold mb-6 text-center text-green-700">Tanaman Pilihan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($tanaman as $item)
                <div class="bg-gray-100 rounded-lg shadow-lg p-4">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['nama'] }}" class="w-full h-60 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-green-800">{{ $item['nama'] }}</h3>
                    <p class="text-sm text-gray-500 mb-1"><strong>Jenis:</strong> {{ $item['jenis'] }}</p>
                    <p class="text-gray-700 mb-2">{{ $item['deskripsi'] }}</p>
                    <p class="text-green-700 font-bold">{{ $item['harga'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <x-footer></x-footer>

@endsection
