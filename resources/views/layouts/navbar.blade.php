@php
    $navItems = [
        ['name' => 'Beranda', 'link' => '/'],
        ['name' => 'Pelayanan', 'link' => '#', 'children' => [
            ['name' => 'Klaster 1 — Manajemen', 'link' => '/layanan/klaster-1-manajemen'],
            ['name' => 'Klaster 2 — Ibu dan Anak', 'link' => '/layanan/klaster-2-ibu-anak'],
            ['name' => 'Klaster 3 — Usia Dewasa dan Lanjut Usia', 'link' => '/layanan/klaster-3-dewasa-lanjut-usia'],
            ['name' => 'Klaster 4 — Penanggulangan Penyakit Menular', 'link' => '/layanan/klaster-4-penyakit-menular'],
            ['name' => 'Lintas Klaster', 'link' => '/layanan/lintas-klaster'],
            ['name' => 'Jadwal Pelayanan', 'link' => '/jadwal-pelayanan', 'children' => [
                ['name' => 'Loket Pendaftaran', 'link' => '/jadwal-pelayanan#loket-pendaftaran'],
                ['name' => 'Pelayanan Pasien', 'link' => '/jadwal-pelayanan#pelayanan-pasien'],
            ]],
        ]],
        ['name' => 'Profil', 'link' => '#', 'children' => [
            ['name' => 'Tentang Puskesmas', 'link' => '/profil/tentang'],
            ['name' => 'Visi dan Misi', 'link' => '/profil/visi-misi'],
            ['name' => 'Struktur Organisasi', 'link' => '/profil/struktur-organisasi'],
            ['name' => 'Tenaga Kesehatan', 'link' => '/profil/tenaga-kesehatan'],
            ['name' => 'Maklumat Pelayanan', 'link' => '/profil/maklumat-pelayanan'],
        ]],
        ['name' => 'Informasi', 'link' => '#', 'children' => [
            ['name' => 'Artikel dan Berita', 'link' => '/post'],
            ['name' => 'Jadwal Pelayanan', 'link' => '/informasi/jadwal-pelayanan'],
            ['name' => 'Dokter dan Tenaga Kesehatan', 'link' => '/informasi/dokter-tenaga-kesehatan'],
            ['name' => 'Berita dan Pengumuman', 'link' => '/informasi/berita-pengumuman'],
            ['name' => 'Informasi Kesehatan', 'link' => '/informasi/informasi-kesehatan'],
        ]],
        ['name' => 'Statistik', 'link' => '#', 'children' => [
            ['name' => 'Kunjungan Pasien', 'link' => '/statistik/kunjungan-pasien'],
            ['name' => 'Penyakit Terbanyak', 'link' => '/statistik/penyakit-terbanyak'],
        ]],
        // ['name' => 'Fitur', 'link' => '/fitur'],
        ['name' => 'FAQ', 'link' => '/faq'],
        ['name' => 'Portal Sistem Informasi', 'link' => '/portal'],
        ['name' => 'Layanan Lainnya', 'link' => '#', 'children' => [
            ['name' => 'Survey Kepuasan Masyarakat', 'link' => '/survey-kepuasan-masyarakat'],
            ['name' => 'PPID', 'link' => '/ppid'],
            ['name' => 'SIPPN', 'link' => 'https://sippn.menpan.go.id/instansi/uptd-puskesmas-pantai-amal-173699'],
            ['name' => 'Pengaduan', 'link' => '/pengaduan'],
            ['name' => 'Galeri', 'link' => '/galeri'],
        ]],
    ];

    $socialLinks = [
        ['name' => 'Instagram', 'icon' => 'instagram', 'link' => 'https://instagram.com/puskesmaspantaiamal'],
        ['name' => 'Facebook', 'icon' => 'facebook', 'link' => 'https://facebook.com/puskesmaspantaiamal'],
        ['name' => 'YouTube', 'icon' => 'youtube', 'link' => 'https://youtube.com/@puskesmaspantaiamal'],
    ];

@endphp

<div class="fixed top-0 left-0 w-full z-[999]"
     x-data="{ mobileOpen: false, activeDropdown: null, scrolled: false }"
     x-init="
        scrolled = window.scrollY > 20;
        window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 }, { passive: true });
     "
>
    {{-- ── TOP INFO BAR (desktop only, collapse saat scroll) ──── --}}
    <div class="hidden lg:block overflow-hidden bg-emerald-700 text-emerald-50 transition-all duration-300 ease-out"
         :class="scrolled ? 'max-h-0 opacity-0' : 'max-h-10 opacity-100'">
        <div class="flex w-full items-center justify-between px-6 xl:px-10 py-1.5 text-xs xl:text-sm">
            
            <div class="flex items-center gap-4 xl:gap-6">
                <a href="mailto:pkm.pantaiamal@gmail.com" class="flex items-center gap-1.5 hover:text-white transition-colors">
                    <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                    <span>pkm.pantaiamal@gmail.com</span>
                </a>
                <a href="https://wa.me/6285179663858" target="_blank" rel="noopener" class="flex items-center gap-1.5 hover:text-white transition-colors">
                    <i data-lucide="phone" class="w-3.5 h-3.5"></i>
                    <span>+62 851-7966-3858</span>
                </a>
            </div>

            <div class="flex items-center gap-3 xl:gap-4">
                @foreach ($socialLinks as $social)
                    <a href="{{ $social['link'] }}" target="_blank" rel="noopener" aria-label="{{ $social['name'] }}" class="hover:text-white transition-colors">
                        <i data-lucide="{{ $social['icon'] }}" class="w-3.5 h-3.5"></i>
                    </a>
                @endforeach

                {{-- TikTok — lucide belum punya ikon resmi, pakai SVG inline --}}
                <a href="https://tiktok.com/@puskesmaspantaiamal" target="_blank" rel="noopener" aria-label="TikTok" class="hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.59 2.59 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6 0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64 0 3.33 2.76 5.7 5.69 5.7 3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48z"/>
                    </svg>
                </a>
                {{-- Instagram --}}
                <a href="https://www.instagram.com/pkmpantaiamal/" target="_blank" rel="noopener" aria-label="Instagram" class="hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/>
                    </svg>
                </a>

                {{-- Facebook --}}
                <a href="https://www.facebook.com/puskesmas.amal.puspa" target="_blank" rel="noopener" aria-label="Facebook" class="hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.185.33-.284.827-.284 1.5v1.549h3.746l-.643 3.667h-3.103v7.98H9.101z"/>
                    </svg>
                </a>

                {{-- YouTube --}}
                <a href="https://www.youtube.com/@puskesmaspantaiamal7397" target="_blank" rel="noopener" aria-label="YouTube" class="hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- ── DESKTOP NAVBAR ───────────────────────────────── --}}
    <nav
        class="hidden lg:flex w-full items-center justify-between border-b transition-all duration-300 ease-out backdrop-blur-md px-6 xl:px-10"
        :class="scrolled
            ? 'py-2 xl:py-2.5 bg-white/95 dark:bg-neutral-900/95 border-neutral-200 dark:border-neutral-800 shadow-md'
            : 'py-4 xl:py-5 bg-white/70 dark:bg-neutral-900/70 border-transparent shadow-none'"
    >
        <a href="/" class="flex shrink-0 items-center gap-2 font-bold text-slate-800 dark:text-white">
            <img src="{{ asset('storage/home/logo-puskesmas.png') }}" alt="Logo Puskesmas Pantai Amal" class="h-10 w-auto">
            <div>
                <span class=" transition-all duration-300"
                :class="scrolled ? 'text-base xl:text-sm' : 'text-lg xl:text-sm'">
                    Puskesmas
                    {{-- <br/> --}}
                    Pantai Amal
                </span>
            </div>
        </a>
        {{-- <a href="/" class="flex shrink-0 items-center gap-2 font-bold text-slate-800 dark:text-white">
            <img src="{{ asset('storage/home/logo-puskesmas.png') }}" alt="Logo Puskesmas Pantai Amal" class="h-8 w-auto">
            <div>
                <span>
                    Puskesmas
                </span>
                <br/>
                <span class="edu-vic-wa-nt-hand whitespace-nowrap transition-all duration-300"
                      :class="scrolled ? 'text-base xl:text-lg' : 'text-lg xl:text-xl'">
                    Pantai Amal
                </span>
            </div>
        </a> --}}

        <div class="flex items-center gap-0.5 xl:gap-1 text-xs xl:text-sm font-medium text-neutral-600 dark:text-neutral-300">
            @foreach ($navItems as $item)
                @if (isset($item['children']))
                    <div class="relative shrink-0" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button @click="open = !open" class="group relative flex items-center gap-1 whitespace-nowrap rounded-md px-2 xl:px-3 py-2 transition-colors hover:text-emerald-600 dark:hover:text-emerald-400">
                            {{ $item['name'] }}
                            <i data-lucide="chevron-down" class="w-3 h-3 transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                            <span class="absolute left-2 right-2 xl:left-3 xl:right-3 -bottom-0.5 h-0.5 origin-left scale-x-0 bg-emerald-600 transition-transform duration-200 group-hover:scale-x-100 dark:bg-emerald-400"></span>
                        </button>
                        <div x-show="open"
                             x-cloak
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 -translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 -translate-y-1"
                             class="absolute top-full left-0 mt-2 w-56 rounded-md border border-neutral-200 bg-white p-2 shadow-lg dark:border-neutral-700 dark:bg-neutral-900 z-50">
                             @foreach ($item['children'] as $child)
                                 @if (isset($child['children']))
                                     <div class="px-3 py-2 text-xs font-semibold text-neutral-400 uppercase tracking-wider">
                                         {{ $child['name'] }}
                                     </div>
                                     @foreach ($child['children'] as $subChild)
                                         <a href="{{ $subChild['link'] }}" class="flex items-center rounded-md pl-6 pr-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-emerald-50 hover:text-emerald-700 dark:text-neutral-300 dark:hover:bg-emerald-950/40 dark:hover:text-emerald-300">
                                             {{ $subChild['name'] }}
                                         </a>
                                     @endforeach
                                 @else
                                     <a href="{{ $child['link'] }}" class="flex items-center rounded-md px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-emerald-50 hover:text-emerald-700 dark:text-neutral-300 dark:hover:bg-emerald-950/40 dark:hover:text-emerald-300">
                                         {{ $child['name'] }}
                                     </a>
                                 @endif
                             @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $item['link'] }}"
                       class="group relative shrink-0 whitespace-nowrap rounded-md px-2 xl:px-3 py-2 transition-colors hover:text-emerald-600 dark:hover:text-emerald-400 {{ request()->is(ltrim($item['link'], '/')) || ($item['link'] === '/' && request()->is('/')) ? 'text-emerald-600 dark:text-emerald-400' : '' }}">
                        {{ $item['name'] }}
                        <span class="absolute left-2 right-2 xl:left-3 xl:right-3 -bottom-0.5 h-0.5 origin-left bg-emerald-600 transition-transform duration-200 dark:bg-emerald-400 {{ request()->is(ltrim($item['link'], '/')) || ($item['link'] === '/' && request()->is('/')) ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                    </a>
                @endif
            @endforeach
        </div>

        <div class="flex shrink-0 items-center gap-2 xl:gap-4">
            <button onclick="toggleTheme()" class="p-2 rounded-md transition-colors hover:bg-gray-100 dark:hover:bg-gray-800" aria-label="Ganti tema">
                <i data-lucide="sun" class="w-5 h-5 dark:hidden"></i>
                <i data-lucide="moon" class="w-5 h-5 hidden dark:block"></i>
            </button>
            <a href="#kontak" class="inline-flex items-center whitespace-nowrap rounded-md bg-emerald-600 px-4 xl:px-5 py-2 text-xs xl:text-sm font-semibold text-white shadow-sm transition-all hover:bg-emerald-700 hover:shadow-md">
                Hubungi Kami
            </a>
        </div>
    </nav>

    {{-- ── MOBILE / TABLET NAVBAR ───────────────────────── --}}
    <div class="lg:hidden w-full">
        
        <div class="flex items-center justify-between border-b transition-all duration-300 ease-out backdrop-blur-md px-4"
             :class="scrolled
                ? 'py-2 bg-white/95 dark:bg-neutral-900/95 border-neutral-200 dark:border-neutral-800 shadow-md'
                : 'py-3 bg-white/80 dark:bg-neutral-900/80 border-transparent shadow-none'">
            <img src="{{ asset('storage/home/logo-puskesmas.png') }}" alt="Logo Puskesmas Pantai Amal" class="h-10 w-auto">
            <a href="/" class="edu-vic-wa-nt-hand font-bold text-slate-800 dark:text-white truncate max-w-[70vw]">Puskesmas Pantai Amal</a>
            <button @click="mobileOpen = !mobileOpen" class="p-2 shrink-0" aria-label="Buka menu">
                <i data-lucide="menu" x-show="!mobileOpen"></i>
                <i data-lucide="x" x-show="mobileOpen" x-cloak></i>
            </button>
        </div>

        <div x-show="mobileOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-250"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="flex w-full flex-col gap-4 border-b border-neutral-200 bg-white p-6 shadow-lg dark:border-neutral-800 dark:bg-neutral-900">
            @foreach ($navItems as $item)
                @if (isset($item['children']))
                    <div>
                        <button @click="activeDropdown = activeDropdown === '{{ $item['name'] }}' ? null : '{{ $item['name'] }}'" class="flex w-full items-center justify-between text-neutral-600 dark:text-neutral-300 font-medium">
                            {{ $item['name'] }}
                            <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform duration-200" :class="activeDropdown === '{{ $item['name'] }}' ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="activeDropdown === '{{ $item['name'] }}'"
                             x-cloak
                             x-collapse
                             class="mt-2 ml-4 flex flex-col gap-2">
                             @foreach ($item['children'] as $child)
                                 @if (isset($child['children']))
                                     <div class="mt-1 ml-4 flex flex-col gap-1">
                                         <div class="text-xs font-semibold text-neutral-400 uppercase tracking-wider">
                                             {{ $child['name'] }}
                                         </div>
                                         @foreach ($child['children'] as $subChild)
                                             <a href="{{ $subChild['link'] }}" @click="mobileOpen = false" class="text-sm text-neutral-500 dark:text-neutral-400 transition-colors hover:text-emerald-600 dark:hover:text-emerald-400">
                                                 {{ $subChild['name'] }}
                                             </a>
                                         @endforeach
                                     </div>
                                 @else
                                     <a href="{{ $child['link'] }}" @click="mobileOpen = false" class="text-sm text-neutral-500 dark:text-neutral-400 transition-colors hover:text-emerald-600 dark:hover:text-emerald-400">
                                         {{ $child['name'] }}
                                     </a>
                                 @endif
                             @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $item['link'] }}" @click="mobileOpen = false" class="text-neutral-600 dark:text-neutral-300 font-medium transition-colors hover:text-emerald-600 dark:hover:text-emerald-400">
                        {{ $item['name'] }}
                    </a>
                @endif
            @endforeach

            {{-- Kontak & sosial media juga ditampilkan di menu mobile --}}
            <div class="flex flex-col gap-2 border-t border-neutral-200 pt-4 dark:border-neutral-800">
                <a href="mailto:info@puskesmaspantaiamal.go.id" class="flex items-center gap-2 text-sm text-neutral-500 dark:text-neutral-400 hover:text-emerald-600 dark:hover:text-emerald-400">
                    <i data-lucide="mail" class="w-4 h-4"></i>
                    <span>info@puskesmaspantaiamal.go.id</span>
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="flex items-center gap-2 text-sm text-neutral-500 dark:text-neutral-400 hover:text-emerald-600 dark:hover:text-emerald-400">
                    <i data-lucide="phone" class="w-4 h-4"></i>
                    <span>0812-3456-7890</span>
                </a>
                <div class="flex items-center gap-4 pt-1">
                    @foreach ($socialLinks as $social)
                        <a href="{{ $social['link'] }}" target="_blank" rel="noopener" aria-label="{{ $social['name'] }}" class="text-neutral-500 dark:text-neutral-400 hover:text-emerald-600 dark:hover:text-emerald-400">
                            <i data-lucide="{{ $social['icon'] }}" class="w-4 h-4"></i>
                        </a>
                    @endforeach
                    <a href="https://tiktok.com/@puskesmaspantaiamal" target="_blank" rel="noopener" aria-label="TikTok" class="text-neutral-500 dark:text-neutral-400 hover:text-emerald-600 dark:hover:text-emerald-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.59 2.59 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6 0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64 0 3.33 2.76 5.7 5.69 5.7 3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48z"/>
                        </svg>
                    </a> 
                </div>
            </div>

            <a href="#kontak" @click="mobileOpen = false"
               class="w-full text-center rounded-md bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-emerald-700 hover:shadow-md">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>