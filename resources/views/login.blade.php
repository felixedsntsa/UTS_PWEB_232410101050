<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen" style="background: url('/asset/mitra_melon.jpg'); background-size: cover;">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="flex items-center justify-center">
            <img src="/asset/tractor.svg" class="w-14 h-14">
        </div>
        <h2 class="text-2xl text-green-600 font-bold mb-6 text-center">Lahan Tani</h2>
        <form action="{{ route('login.masuk') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Username</label>
                <input type="text" name="username" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold">Password</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
                Login
            </button>
        </form>
    </div>
</body>
</html>
