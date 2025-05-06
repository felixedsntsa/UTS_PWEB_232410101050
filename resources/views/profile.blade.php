@extends('layouts.app')
@section('title', 'Profil')
@section('content')

    <x-navbar></x-navbar>

    <div class="container mx-auto px-4 py-6">
        <div class="bg-white p-6 rounded-lg shadow-lg border max-w-xl mx-auto">
            <h2 class="text-2xl font-bold mb-4 text-green-700">Profil Saya</h2>

            <div class="space-y-4">
                <div>
                    <label class="font-semibold">Username:</label>
                    <p>{{ $username }}</p>
                </div>
                <div>
                    <label class="font-semibold">Password:</label>
                    <p>{{ $password }}</p>
                </div>
            </div>

            <div class="mt-6 flex justify-between">
                <a href="{{ route('dashboard') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
            </div>
        </div>
    </div>

    @endsection
