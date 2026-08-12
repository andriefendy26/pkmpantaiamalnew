<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'UPTD Puskesmas Pantai Amal')</title>
    <meta name="description" content="@yield('description', 'Website resmi UPTD Puskesmas Pantai Amal, Tarakan')" />

    {{-- Terapkan tema sebelum body dirender, supaya tidak ada flash --}}
    <script>
        (function () {
            const theme = localStorage.getItem('theme');
            if (theme === 'dark' || (! theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>

    {{-- 1) Muat Tailwind CDN dulu --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- 2) BARU set config-nya, setelah objek `tailwind` ada --}}
    <script>
        tailwind.config = {
            darkMode: 'class',
        };

        window.toggleTheme = function () {
            const html = document.documentElement;
            const isDark = html.classList.contains('dark');
            html.classList.toggle('dark', !isDark);
            localStorage.setItem('theme', isDark ? 'light' : 'dark');
            if (window.lucide) lucide.createIcons();
        };
    </script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Hand:wght@400..700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">

    {{-- Alpine.js --}}
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        .edu-vic-wa-nt-hand { font-family: 'Edu VIC WA NT Hand', cursive; }
        .roboto-mono { font-family: 'Roboto Mono', monospace; }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .6s ease, transform .6s ease;
        }
        .reveal.reveal-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes fadeInBlur {
            from { opacity: 0; transform: translateY(10px); filter: blur(4px); }
            to   { opacity: 1; transform: translateY(0);   filter: blur(0); }
        }
        .word-anim {
            display: inline-block;
            opacity: 0;
            animation: fadeInBlur .3s ease forwards;
        }

        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        .fade-in { animation: fadeIn .4s ease forwards; }

        [x-cloak] { display: none !important; }
    </style>

    @stack('head')
</head>
<body class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden"
      x-data="{ mobileOpen: false }"
      x-init="renderLucide();"
>

    <x-navbar />

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <x-footer />

    <script>
        function renderLucide() { if (window.lucide) lucide.createIcons(); }
        document.addEventListener('DOMContentLoaded', renderLucide);
        document.addEventListener('alpine:init', renderLucide);
        window.addEventListener('load', renderLucide);
    </script>

    @stack('scripts')
</body>
</html>