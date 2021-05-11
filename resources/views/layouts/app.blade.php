<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <title>Biblioteca</title>

    @livewireStyles
</head>
<body class="bg-gray-100">
    
    <div class="container mt-10 mx-auto">
        @if (session('success'))
            <x-alerts.success>
                {{ session('success') }}
            </x-alerts.success>
        @endif

        {{ $slot }}
    </div>
    
    @livewireScripts
</body>
</html>