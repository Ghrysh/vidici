<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDICI - PT Vidya Diginara Cipta</title>
    @vite('resources/css/app.css')
    
    <style>
        .glow-bg {
            background: radial-gradient(circle at 50% 0%, rgba(168, 85, 247, 0.15) 0%, rgba(8, 11, 20, 0) 50%);
        }
    </style>
</head>
<body class="bg-[#080b14] text-white font-sans antialiased selection:bg-fuchsia-500/30 glow-bg">
    
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>