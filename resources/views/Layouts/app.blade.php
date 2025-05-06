<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                fontFamily {
                    Poppins: ["Poppins", "sans-serif"]
                }
            }
        }
    </script>
    <title>LahanTani | @yield('title')</title>
    <style>
            .outline-text {
            -webkit-text-stroke: 3px white;
            color: transparent;
            background-image: url('asset/mitra_melon.jpg');
            background-size: cover;
            background-position: center;
            -webkit-background-clip: text;
            background-clip: text;
            filter: brightness(1.1);
        }
    </style>
</head>
<body class="bg-white text-gray-900">

    @yield('content')

</body>
</html>
