@extends('layouts.app')
@section('title', 'Pengelolaan Tanaman')
@section('content')

    <x-navbar></x-navbar>

    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold text-green-700 mb-6">Daftar Tanaman</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 divide-y divide-gray-200 shadow-md rounded-lg overflow-hidden">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Gambar</th>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">Jenis</th>
                        <th class="px-4 py-2 text-left">Deskripsi</th>
                        <th class="px-4 py-2 text-left">Perawatan</th>
                        <th class="px-4 py-2 text-left">Harga</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($list as $item)
                        <tr>
                            <td class="px-4 py-3">
                                <img src="{{ asset($item['image']) }}" alt="{{ $item['nama'] }}" class="w-20 h-20 object-cover rounded-md">
                            </td>
                            <td class="px-4 py-3 font-semibold text-gray-800">{{ $item['nama'] }}</td>
                            <td class="px-4 py-3">{{ $item['jenis'] }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $item['deskripsi'] }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $item['perawatan'] }}</td>
                            <td class="px-4 py-3 text-green-700 font-medium">{{ $item['harga'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
