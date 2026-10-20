{{-- Společná kostra každé stránky: <head>, hlavička a místo pro obsah. --}}
@props(['title' => 'PC Builder'])

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>

        {{-- Nastaví režim ještě před vykreslením, aby stránka neblikla. --}}
        <script>
            document.documentElement.dataset.theme =
                localStorage.getItem('theme') ??
                (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        </script>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="header">
            <div class="container header-inner">
                <a href="/" class="logo">PC Builder</a>

                <nav class="nav">
                    <a href="#">Sestavit</a>
                    <a href="#">Moje sestavy</a>
                    <a href="#">Přihlásit</a>
                    <button type="button" data-theme-toggle>Režim</button>
                </nav>
            </div>
        </header>

        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>
