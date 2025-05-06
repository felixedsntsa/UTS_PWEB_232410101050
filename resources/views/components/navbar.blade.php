@php
    $username = request()->query('username');
    $password = request()->query('password');
@endphp

<nav class="bg-[#539442]/60 py-4 shadow-md border-b" x-data="{ openMenu: false, openDropdown: false }">
    <div class="container mx-auto px-4 flex items-center justify-between">

        <div class="flex items-center">
            <img src="/asset/tractor.svg" alt="" class="w-9 mr-3">
            <h1 class="text-3xl font-bold text-green-900">LahanTani</h1>
        </div>

        <button @click="openMenu = !openMenu" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <div class="hidden md:flex space-x-8 items-center">
            <a href="{{ route('profile', ['username' => $username, 'password' => $password]) }}" class="text-black hover:text-green-900 font-medium">Profil</a>
            <a href="{{ route('pengelolaan') }}" class="text-black hover:text-green-900 font-medium">Pengelolaan</a>

            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="w-8 h-8 rounded-full focus:outline-none">
                    <img src="/asset/profilerepo.svg" alt="Profile"/>
                </button>

                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 mt-2 w-20 bg-white shadow-lg rounded-md z-50 py-2 text-sm">
                    <a href="{{ route('logout') }}" class="w-full text-center px-4 py-2 text-red-600 hover:text-red-800">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div x-show="openMenu" class="md:hidden mt-4 px-4 space-y-2">
        <a href="{{ route('profile', ['username' => $username, 'password' => $password]) }}" class="block text-black hover:text-green-900 font-medium">Profil</a>
        <a href="{{ route('pengelolaan') }}" class="block text-black hover:text-green-900 font-medium">Pengelolaan</a>

        <div class="border-t pt-2">
            <a href="{{ route('logout') }}" class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-100">Logout</a>
        </div>
    </div>
</nav>
