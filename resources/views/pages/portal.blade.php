@extends('layouts.app')

@section('title', 'Portal Sistem Informasi - UPTD Puskesmas Pantai Amal')

@section('content')
@php
    $sistemInformasi = [
        [
            'id' => 1, 'name' => 'E-Puskesmas', 'fullName' => 'Sistem Informasi Manajemen Puskesmas',
            'description' => 'Mengelola data pasien, rekam medis, dan administrasi puskesmas secara digital',
            'icon' => 'globe', 'url' => 'https://kotatarakan.epuskesmas.id', 'category' => 'pelayanan', 'status' => 'aktif',
        ],
        [
            'id' => 2, 'name' => 'Arsip Digital PUSPA', 'fullName' => 'Sistem Informasi Manajemen Arsip Digital',
            'description' => 'Mengelola arsip digital puskesmas secara terstruktur dan aman',
            'icon' => 'archive', 'url' => 'https://arsip.pkmpantaiamal.com/admin', 'category' => 'managemen', 'status' => 'aktif',
        ],
        [
            'id' => 3, 'name' => 'Surat Keterangan PUSPA', 'fullName' => 'Sistem Informasi Manajemen Surat Keterangan',
            'description' => 'Menerbitkan, mengelola, dan mengarsipkan surat keterangan puskesmas',
            'icon' => 'file-text', 'url' => 'https://sk.pkmpantaiamal.com/admin', 'category' => 'managemen', 'status' => 'aktif',
        ],
        [
            'id' => 4, 'name' => 'Sistem Informasi RKBU', 'fullName' => 'Sistem Informasi Manajemen RKBU',
            'description' => 'Mengelola data rencana kebutuhan barang unit secara efisien',
            'icon' => 'clipboard-list', 'url' => 'https://rkbu.pkmpantaiamal.com/admin', 'category' => 'managemen', 'status' => 'aktif',
        ],
    ];

    $stats = [
        ['label' => 'Total Sistem', 'value' => count($sistemInformasi), 'accent' => ''],
        ['label' => 'Sistem Aktif', 'value' => count(array_filter($sistemInformasi, fn ($s) => $s['status'] === 'aktif')), 'accent' => 'emerald'],
        ['label' => 'Maintenance', 'value' => count(array_filter($sistemInformasi, fn ($s) => $s['status'] === 'maintenance')), 'accent' => 'amber'],
        ['label' => 'Kategori', 'value' => 2, 'accent' => 'sky'],
    ];
@endphp

<div class="min-h-screen bg-white dark:bg-neutral-950"
     x-data="{
        search: '',
        sistem: {{ Illuminate\Support\Js::from($sistemInformasi) }},
        get filtered() {
            const q = this.search.toLowerCase();
            return this.sistem.filter(s =>
                s.name.toLowerCase().includes(q) ||
                s.fullName.toLowerCase().includes(q) ||
                s.description.toLowerCase().includes(q)
            );
        }
     }"
     x-init="$nextTick(() => renderLucide()); $watch('filtered', () => $nextTick(() => renderLucide()))">

    {{-- ── HERO ──────────────────────────────────────────── --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 h-56 w-56 rounded-full bg-teal-100/50 dark:bg-teal-900/20 blur-2xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28 fade-in">
            <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/60 dark:text-emerald-300">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                UPTD Puskesmas Pantai Amal
            </span>

            <h1 class="edu-vic-wa-nt-hand mb-4 text-5xl font-bold tracking-tight text-slate-800 dark:text-white md:text-6xl lg:text-7xl">
                Portal<br />
                <span class="text-emerald-600 dark:text-emerald-400">Sistem Informasi</span>
            </h1>

            <p class="mb-8 max-w-xl text-base leading-relaxed text-neutral-500 dark:text-neutral-400 md:text-lg">
                Akses mudah ke semua sistem informasi Puskesmas dalam satu platform terpadu
            </p>

            {{-- Search --}}
            <div class="relative max-w-sm">
                <i data-lucide="search" class="absolute left-3.5 top-1/2 -translate-y-1/2 text-neutral-400 w-[15px] h-[15px]"></i>
                <input
                    type="text"
                    placeholder="Cari sistem..."
                    x-model="search"
                    class="w-full rounded-xl border border-neutral-200 bg-white/80 py-3 pl-10 pr-4 text-sm text-slate-800 placeholder-neutral-400 shadow-sm backdrop-blur-sm focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-100 dark:border-neutral-700 dark:bg-neutral-900/80 dark:text-slate-100 dark:placeholder-neutral-500 dark:focus:border-emerald-600 dark:focus:ring-emerald-950"
                />
            </div>
        </div>
    </div>

    {{-- ── CONTENT ───────────────────────────────────────── --}}
    <div class="mx-auto max-w-7xl px-6 py-12 space-y-10">

        {{-- Stats --}}
        <div class="grid grid-cols-2 gap-3 md:grid-cols-4 fade-in">
            @foreach ($stats as $s)
                <div class="rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <div class="mb-1 text-3xl font-bold
                        @if($s['accent'] === 'emerald') text-emerald-600 dark:text-emerald-400
                        @elseif($s['accent'] === 'amber') text-amber-600 dark:text-amber-400
                        @elseif($s['accent'] === 'sky') text-sky-600 dark:text-sky-400
                        @else text-slate-800 dark:text-white
                        @endif">
                        {{ $s['value'] }}
                    </div>
                    <div class="text-xs font-semibold uppercase tracking-wider text-neutral-400">{{ $s['label'] }}</div>
                </div>
            @endforeach
        </div>

        {{-- Section label + Grid --}}
        <div>
            <span class="mb-4 inline-block text-xs font-semibold uppercase tracking-widest text-emerald-600 dark:text-emerald-400">
                Sistem Tersedia
            </span>

            {{-- Empty state --}}
            <div x-show="filtered.length === 0" x-cloak x-transition class="py-20 text-center">
                <div class="mb-3 text-5xl opacity-20">○</div>
                <p class="text-sm text-neutral-400">Sistem tidak ditemukan</p>
            </div>

            {{-- Grid --}}
            <div x-show="filtered.length > 0" x-transition class="grid gap-4 sm:grid-cols-2">
                <template x-for="(sistem, i) in filtered" :key="sistem.id">
                    <a :href="sistem.url" target="_blank" rel="noopener noreferrer"
                       class="group flex items-start gap-4 rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm transition-all duration-200 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-900 dark:hover:border-emerald-700">

                        {{-- Icon --}}
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 transition-colors group-hover:bg-emerald-100 dark:bg-emerald-950/50 dark:text-emerald-400">
                            <i :data-lucide="sistem.icon" class="w-5 h-5"></i>
                        </div>

                        {{-- Content --}}
                        <div class="min-w-0 flex-1">
                            <div class="mb-0.5 flex items-center justify-between gap-2">
                                <h3 class="truncate font-bold text-slate-800 dark:text-slate-100" x-text="sistem.name"></h3>
                                <span
                                    class="shrink-0 rounded-full px-2.5 py-0.5 font-mono text-[10px] font-semibold"
                                    :class="sistem.status === 'aktif'
                                        ? 'bg-emerald-50 text-emerald-700 dark:bg-emerald-950/50 dark:text-emerald-300'
                                        : 'bg-amber-50 text-amber-700 dark:bg-amber-950/50 dark:text-amber-300'"
                                >
                                    ● <span x-text="sistem.status"></span>
                                </span>
                            </div>

                            <p class="mb-2 text-xs text-neutral-400" x-text="sistem.fullName"></p>

                            <div class="mb-3 h-px bg-neutral-100 dark:bg-neutral-800"></div>

                            <p class="mb-3 text-xs leading-relaxed text-neutral-500 dark:text-neutral-400" x-text="sistem.description"></p>

                            <div class="flex items-center gap-1 text-xs font-semibold text-emerald-600 transition-transform group-hover:translate-x-0.5 dark:text-emerald-400">
                                Buka Sistem
                                <i data-lucide="chevron-right" class="w-[13px] h-[13px]"></i>
                            </div>
                        </div>
                    </a>
                </template>
            </div>
        </div>

        {{-- Footer help --}}
        <div class="overflow-hidden rounded-2xl border border-neutral-200 bg-gradient-to-br from-emerald-50 via-white to-teal-50 p-8 dark:border-neutral-700 dark:from-emerald-950/30 dark:via-neutral-900 dark:to-teal-950/20">
            <h2 class="edu-vic-wa-nt-hand mb-2 text-2xl font-bold text-slate-800 dark:text-white md:text-3xl">
                Butuh Bantuan?
            </h2>
            <p class="mb-6 max-w-md text-sm leading-relaxed text-neutral-500 dark:text-neutral-400">
                Jika mengalami kesulitan mengakses sistem informasi, silakan hubungi admin atau bagian IT kami.
            </p>
            <div class="flex flex-wrap gap-3">
                <a
                    href="https://api.whatsapp.com/send/?phone=6282255187877&text=Halo%2C+aplikasi+saya+bermasalah."
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition-all hover:-translate-y-0.5 hover:bg-emerald-700 hover:shadow-md dark:bg-emerald-500 dark:hover:bg-emerald-600"
                >
                    <i data-lucide="message-circle" class="w-[15px] h-[15px]"></i>
                    Hubungi Admin
                </a>
                <a
                    href="{{ url('/informasi/faq') }}"
                    class="inline-flex items-center gap-2 rounded-xl border border-neutral-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 shadow-sm transition-all hover:-translate-y-0.5 hover:border-neutral-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800 dark:text-slate-200"
                >
                    <i data-lucide="help-circle" class="w-[15px] h-[15px]"></i>
                    Lihat FAQ
                </a>
            </div>
        </div>

    </div>
</div>
@endsection