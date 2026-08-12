@php
    $navItems = [
        ['name' => 'Beranda', 'link' => '/'],
        ['name' => 'Profil', 'link' => '/profil'],
        ['name' => 'Portal Sistem Informasi', 'link' => '/portal'],
        ['name' => 'Galeri', 'link' => '/galeri'],
    ];
@endphp

<div class="fixed w-full mt-2 z-[999]" x-data="{ mobileOpen: false }">

    {{-- ── DESKTOP NAVBAR ───────────────────────────────── --}}
    <nav class="hidden md:flex mx-auto max-w-6xl items-center justify-between rounded-full border border-neutral-200 bg-white/80 px-6 py-3 shadow-sm backdrop-blur-md dark:border-neutral-800 dark:bg-neutral-900/80">
        <a href="/" class="flex items-center gap-2 font-bold text-slate-800 dark:text-white">
            <span class="edu-vic-wa-nt-hand text-lg">Puskesmas Pantai Amal</span>
        </a>

        <div class="flex items-center gap-6 text-sm font-medium text-neutral-600 dark:text-neutral-300">
            @foreach ($navItems as $item)
                <a href="{{ $item['link'] }}"
                   class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors {{ request()->is(ltrim($item['link'], '/')) || ($item['link'] === '/' && request()->is('/')) ? 'text-emerald-600 dark:text-emerald-400' : '' }}">
                    {{ $item['name'] }}
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-4">
            <button @click="dark = !dark" class="p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Ganti tema">
                <i data-lucide="sun" class="w-5 h-5" x-show="dark" x-cloak></i>
                <i data-lucide="moon" class="w-5 h-5" x-show="!dark"></i>
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
                <a href="{{ $item['link'] }}" @click="mobileOpen = false"
                   class="text-neutral-600 dark:text-neutral-300 font-medium">
                    {{ $item['name'] }}
                </a>
            @endforeach

            <div class="flex items-center justify-center mb-2">
                <button @click="dark = !dark" class="p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Ganti tema">
                    <i data-lucide="sun" class="w-5 h-5" x-show="dark" x-cloak></i>
                    <i data-lucide="moon" class="w-5 h-5" x-show="!dark"></i>
                </button>
            </div>

            <a href="#kontak" @click="mobileOpen = false"
               class="w-full text-center rounded-full bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>