<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ronnie Faith Paralejas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased dark:bg-white">
    <div class="absolute inset-0 h-full w-full bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="bg-gray-50 text-black">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1>Hello, it's me 🤪</h1>
            <div class="w-32">
                <video autoplay loop muted src="{{ asset('Under Construction.mp4') }}"></video>
            </div>
        </div>
    </div>
</body>

</html>
