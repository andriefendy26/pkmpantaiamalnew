@php
    $navItems = [
        ['name' => 'Beranda', 'link' => '/'],
        ['name' => 'Profil', 'link' => '#', 'children' => [
            ['name' => 'Tentang Puskesmas', 'link' => '/profil/tentang'],
            ['name' => 'Visi dan Misi', 'link' => '/profil/visi-misi'],
            ['name' => 'Struktur Organisasi', 'link' => '/profil/struktur-organisasi'],
            ['name' => 'Tenaga Kesehatan', 'link' => '/profil/tenaga-kesehatan'],
        ]],
        ['name' => 'Pelayanan', 'link' => '#', 'children' => [
            ['name' => 'Klaster 1 — Manajemen', 'link' => '/layanan/klaster-1-manajemen'],
            ['name' => 'Klaster 2 — Ibu dan Anak', 'link' => '/layanan/klaster-2-ibu-anak'],
            ['name' => 'Klaster 3 — Usia Dewasa dan Lanjut Usia', 'link' => '/layanan/klaster-3-dewasa-lanjut-usia'],
            ['name' => 'Klaster 4 — Penanggulangan Penyakit Menular', 'link' => '/layanan/klaster-4-penyakit-menular'],
            ['name' => 'Lintas Klaster', 'link' => '/layanan/lintas-klaster'],
        ]],
        ['name' => 'Informasi', 'link' => '#', 'children' => [
            ['name' => 'Jadwal Pelayanan', 'link' => '/informasi/jadwal-pelayanan'],
            ['name' => 'Dokter dan Tenaga Kesehatan', 'link' => '/informasi/dokter-tenaga-kesehatan'],
            ['name' => 'Berita dan Pengumuman', 'link' => '/informasi/berita-pengumuman'],
            ['name' => 'Informasi Kesehatan', 'link' => '/informasi/informasi-kesehatan'],
        ]],
        ['name' => 'Post', 'link' => '/post'],
        ['name' => 'Galeri', 'link' => '/galeri'],
        ['name' => 'Fitur', 'link' => '/fitur'],
        ['name' => 'Portal Sistem Informasi', 'link' => '/portal'],
    ];
@endphp

<div class="fixed w-full mt-2 z-[999]" x-data="{ mobileOpen: false, activeDropdown: null }">

    {{-- ── DESKTOP NAVBAR ───────────────────────────────── --}}
    <nav class="hidden md:flex mx-auto max-w-6xl items-center justify-between rounded-full border border-neutral-200 bg-white/80 px-6 py-3 shadow-sm backdrop-blur-md dark:border-neutral-800 dark:bg-neutral-900/80">
        <a href="/" class="flex items-center gap-2 font-bold text-slate-800 dark:text-white">
            <span class="edu-vic-wa-nt-hand text-lg">Puskesmas Pantai Amal</span>
        </a>

        <div class="flex items-center gap-1 text-sm font-medium text-neutral-600 dark:text-neutral-300">
            @foreach ($navItems as $item)
                @if (isset($item['children']))
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button @click="open = !open" class="flex items-center gap-1 rounded-full px-3 py-2 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                            {{ $item['name'] }}
                            <i data-lucide="chevron-down" class="w-3 h-3"></i>
                        </button>
                        <div x-show="open" x-cloak x-transition class="absolute top-full left-0 mt-2 w-56 rounded-2xl border border-neutral-200 bg-white p-2 shadow-lg dark:border-neutral-700 dark:bg-neutral-900">
                            @foreach ($item['children'] as $child)
                                <a href="{{ $child['link'] }}" class="flex items-center rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-emerald-50 hover:text-emerald-700 dark:text-neutral-300 dark:hover:bg-emerald-950/40 dark:hover:text-emerald-300 transition-colors">
                                    {{ $child['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $item['link'] }}"
                       class="rounded-full px-3 py-2 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors {{ request()->is(ltrim($item['link'], '/')) || ($item['link'] === '/' && request()->is('/')) ? 'text-emerald-600 dark:text-emerald-400' : '' }}">
                        {{ $item['name'] }}
                    </a>
                @endif
            @endforeach
        </div>

        <div class="flex items-center gap-4">
            <button onclick="toggleTheme()" class="p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Ganti tema">
                <i data-lucide="sun" class="w-5 h-5 dark:hidden"></i>
                <i data-lucide="moon" class="w-5 h-5 hidden dark:block"></i>
            </button>
            <a href="#kontak" class="inline-flex items-center rounded-full bg-emerald-600 px-5 py-2 text-sm font-semibold text-white shadow-sm transition-all hover:-translate-y-0.5 hover:bg-emerald-700">
                Hubungi Kami
            </a>
        </div>
    </nav>

    {{-- ── MOBILE NAVBAR ────────────────────────────────── --}}
    <div class="md:hidden mx-4">
        <div class="flex items-center justify-between rounded-2xl border border-neutral-200 bg-white/90 px-4 py-3 shadow-sm backdrop-blur-md dark:border-neutral-800 dark:bg-neutral-900/90">
            <a href="/" class="edu-vic-wa-nt-hand font-bold text-slate-800 dark:text-white">Puskesmas Pantai Amal</a>
            <button @click="mobileOpen = !mobileOpen" class="p-2" aria-label="Buka menu">
                <i data-lucide="menu" x-show="!mobileOpen"></i>
                <i data-lucide="x" x-show="mobileOpen" x-cloak></i>
            </button>
        </div>

        <div x-show="mobileOpen" x-cloak x-transition
             class="mt-2 flex flex-col gap-4 rounded-2xl border border-neutral-200 bg-white p-6 shadow-lg dark:border-neutral-800 dark:bg-neutral-900">
            @foreach ($navItems as $item)
                @if (isset($item['children']))
                    <div>
                        <button @click="activeDropdown = activeDropdown === '{{ $item['name'] }}' ? null : '{{ $item['name'] }}'" class="flex w-full items-center justify-between text-neutral-600 dark:text-neutral-300 font-medium">
                            {{ $item['name'] }}
                            <i data-lucide="chevron-down" class="w-4 h-4" :class="activeDropdown === '{{ $item['name'] }}' ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="activeDropdown === '{{ $item['name'] }}'" x-cloak x-transition class="mt-2 ml-4 flex flex-col gap-2">
                            @foreach ($item['children'] as $child)
                                <a href="{{ $child['link'] }}" @click="mobileOpen = false" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-emerald-600 dark:hover:text-emerald-400">
                                    {{ $child['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $item['link'] }}" @click="mobileOpen = false" class="text-neutral-600 dark:text-neutral-300 font-medium">
                        {{ $item['name'] }}
                    </a>
                @endif
            @endforeach

            <div class="flex items-center justify-center mb-2">
                <button onclick="toggleTheme()" class="p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Ganti tema">
                    <i data-lucide="sun" class="w-5 h-5 dark:hidden"></i>
                    <i data-lucide="moon" class="w-5 h-5 hidden dark:block"></i>
                </button>
            </div>

            <a href="#kontak" @click="mobileOpen = false"
               class="w-full text-center rounded-full bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>