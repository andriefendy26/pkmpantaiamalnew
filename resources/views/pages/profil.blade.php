@extends('layouts.app')

@section('title', 'Profil - UPTD Puskesmas Pantai Amal')

@section('content')
@php
    $tabs = [
        ['id' => 'tentang', 'label' => 'Tentang Kami', 'icon' => 'building-2'],
        ['id' => 'visi-misi', 'label' => 'Visi & Misi', 'icon' => 'target'],
        ['id' => 'struktur', 'label' => 'Struktur Organisasi', 'icon' => 'users'],
        ['id' => 'fasilitas', 'label' => 'Fasilitas', 'icon' => 'wrench'],
    ];

    $fasilitas = [
        ['name' => 'Ruang Poli Umum', 'desc' => 'Pelayanan kesehatan umum & konsultasi medis', 'icon' => 'stethoscope'],
        ['name' => 'Ruang KIA / KB', 'desc' => 'Kesehatan ibu, anak, dan keluarga berencana', 'icon' => 'heart'],
        ['name' => 'Ruang Gigi', 'desc' => 'Pemeriksaan & tindakan kesehatan gigi', 'icon' => 'user-round'],
        ['name' => 'Laboratorium', 'desc' => 'Pemeriksaan laboratorium klinik lengkap', 'icon' => 'flask-conical'],
        ['name' => 'Farmasi', 'desc' => 'Apotek & pelayanan obat-obatan', 'icon' => 'pill'],
        ['name' => 'Ruang IGD', 'desc' => 'Instalasi gawat darurat siap 24 jam', 'icon' => 'zap'],
    ];

    $strukturOrganisasi = [
        ['jabatan' => 'Kepala Puskesmas', 'nama' => 'drg. Desianti', 'inisial' => 'D'],
        ['jabatan' => 'Kepala Tata Usaha', 'nama' => 'Yeni Nurlaili, S.KM', 'inisial' => 'YN'],
        ['jabatan' => 'Koordinator Pelayanan', 'nama' => '—', 'inisial' => '?'],
        ['jabatan' => 'Koordinator UKM', 'nama' => '—', 'inisial' => '?'],
    ];

    $timKesehatan = [
        ['label' => 'Dokter Umum', 'count' => '—', 'icon' => 'stethoscope'],
        ['label' => 'Dokter Gigi', 'count' => '—', 'icon' => 'user-round'],
        ['label' => 'Perawat', 'count' => '—', 'icon' => 'briefcase-medical'],
        ['label' => 'Bidan', 'count' => '—', 'icon' => 'heart'],
        ['label' => 'Apoteker', 'count' => '—', 'icon' => 'pill'],
        ['label' => 'Analis Lab', 'count' => '—', 'icon' => 'flask-conical'],
        ['label' => 'Nutrisionis', 'count' => '—', 'icon' => 'users'],
        ['label' => 'Tenaga Administrasi', 'count' => '—', 'icon' => 'briefcase-medical'],
    ];

    $nilaiNilai = [
        ['label' => 'Profesional', 'icon' => 'star', 'color' => 'amber'],
        ['label' => 'Integritas', 'icon' => 'handshake', 'color' => 'emerald'],
        ['label' => 'Peduli', 'icon' => 'heart', 'color' => 'rose'],
        ['label' => 'Inovatif', 'icon' => 'lightbulb', 'color' => 'sky'],
        ['label' => 'Kolaboratif', 'icon' => 'users', 'color' => 'violet'],
        ['label' => 'Berorientasi Hasil', 'icon' => 'trophy', 'color' => 'teal'],
    ];

    $colorMap = [
        'amber'   => ['bg' => 'bg-amber-50 dark:bg-amber-950/40', 'icon' => 'bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-300', 'border' => 'border-amber-200 dark:border-amber-800'],
        'emerald' => ['bg' => 'bg-emerald-50 dark:bg-emerald-950/40', 'icon' => 'bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-300', 'border' => 'border-emerald-200 dark:border-emerald-800'],
        'rose'    => ['bg' => 'bg-rose-50 dark:bg-rose-950/40', 'icon' => 'bg-rose-100 text-rose-600 dark:bg-rose-900 dark:text-rose-300', 'border' => 'border-rose-200 dark:border-rose-800'],
        'sky'     => ['bg' => 'bg-sky-50 dark:bg-sky-950/40', 'icon' => 'bg-sky-100 text-sky-600 dark:bg-sky-900 dark:text-sky-300', 'border' => 'border-sky-200 dark:border-sky-800'],
        'violet'  => ['bg' => 'bg-violet-50 dark:bg-violet-950/40', 'icon' => 'bg-violet-100 text-violet-600 dark:bg-violet-900 dark:text-violet-300', 'border' => 'border-violet-200 dark:border-violet-800'],
        'teal'    => ['bg' => 'bg-teal-50 dark:bg-teal-950/40', 'icon' => 'bg-teal-100 text-teal-600 dark:bg-teal-900 dark:text-teal-300', 'border' => 'border-teal-200 dark:border-teal-800'],
    ];

    $jadwal = [
        ['hari' => 'Senin – Kamis', 'jam' => '07.30 – 12.00 WITA'],
        ['hari' => 'Jumat', 'jam' => '07.30 – 11.00 WITA'],
        ['hari' => 'Sabtu', 'jam' => '07.30 – 12.00 WITA'],
        ['hari' => 'Minggu', 'jam' => 'Tutup'],
    ];

    $peralatan = ['EKG', 'USG', 'X-Ray', 'Nebulizer', 'Autoclave', 'Microscope', 'Dental Unit', 'Patient Monitor', 'Oxygen Concentrator'];
@endphp

<div class="min-h-screen bg-white dark:bg-neutral-950" x-data="{ activeTab: 'tentang' }" x-init="$watch('activeTab', () => $nextTick(() => renderLucide()))">

    {{-- ── HERO ─────────────────────────────────────────── --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 h-56 w-56 rounded-full bg-teal-100/50 dark:bg-teal-900/20 blur-2xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28 fade-in">
            <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/60 dark:text-emerald-300">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                UPTD Puskesmas
            </span>
            <h1 class="edu-vic-wa-nt-hand mb-4 text-5xl font-bold tracking-tight text-slate-800 dark:text-white md:text-6xl lg:text-7xl">
                Profil UPTD<br />
                <span class="text-emerald-600 dark:text-emerald-400">Puskesmas</span>
            </h1>
            <p class="max-w-xl text-base leading-relaxed text-neutral-500 dark:text-neutral-400 md:text-lg">
                Unit Pelaksana Teknis Daerah yang berkomitmen memberikan pelayanan kesehatan berkualitas, terjangkau, dan merata bagi masyarakat Pantai Amal dan sekitarnya.
            </p>
        </div>
    </div>

    {{-- ── STICKY TABS ──────────────────────────────────── --}}
    <div class="sticky top-0 z-20 border-b border-neutral-200 bg-white/90 backdrop-blur-sm dark:border-neutral-800 dark:bg-neutral-950/90">
        <div class="mx-auto max-w-7xl px-6">
            <nav class="flex overflow-x-auto">
                @foreach ($tabs as $tab)
                    <button
                        @click="activeTab = '{{ $tab['id'] }}'"
                        class="relative flex items-center gap-2 whitespace-nowrap px-5 py-4 text-sm font-medium transition-colors"
                        :class="activeTab === '{{ $tab['id'] }}' ? 'text-emerald-600 dark:text-emerald-400' : 'text-neutral-400 hover:text-neutral-700 dark:hover:text-neutral-200'"
                    >
                        <i data-lucide="{{ $tab['icon'] }}" class="w-4 h-4"></i>
                        {{ $tab['label'] }}
                        <div
                            x-show="activeTab === '{{ $tab['id'] }}'"
                            class="absolute bottom-0 left-0 right-0 h-0.5 bg-emerald-500"
                        ></div>
                    </button>
                @endforeach
            </nav>
        </div>
    </div>

    {{-- ── CONTENT ──────────────────────────────────────── --}}
    <div class="mx-auto max-w-7xl px-6 py-12">

        {{-- TAB: TENTANG --}}
        <div x-show="activeTab === 'tentang'" x-transition class="space-y-10">
            <div class="mb-8">
                <span class="mb-2 inline-block text-xs font-semibold uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Profil</span>
                <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-white md:text-4xl">Tentang UPTD Puskesmas</h2>
            </div>

            <div class="grid gap-8 lg:grid-cols-3">
                <div class="space-y-4 text-sm leading-relaxed text-neutral-600 dark:text-neutral-400 lg:col-span-2">
                    <p>
                        UPTD Puskesmas merupakan unit pelaksana teknis daerah yang menyelenggarakan pelayanan kesehatan tingkat pertama secara menyeluruh, terpadu, dan berkesinambungan. Puskesmas kami telah melayani masyarakat Pantai Amal dengan dedikasi penuh untuk meningkatkan derajat kesehatan masyarakat.
                    </p>
                    <p>
                        Dengan didukung oleh tenaga kesehatan profesional dan fasilitas yang memadai, kami berkomitmen memberikan pelayanan yang berkualitas, terjangkau, dan merata bagi seluruh lapisan masyarakat tanpa terkecuali.
                    </p>
                    <p>
                        Sebagai garda terdepan dalam sistem kesehatan, Puskesmas Pantai Amal mengedepankan pendekatan promotif dan preventif, selaras dengan upaya mewujudkan masyarakat yang sehat dan mandiri.
                    </p>
                </div>

                <div class="overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <div class="flex items-center gap-2 border-b border-neutral-100 bg-emerald-50 px-5 py-3.5 dark:border-neutral-700 dark:bg-emerald-950/40">
                        <i data-lucide="clock" class="w-[15px] h-[15px] text-emerald-600 dark:text-emerald-400"></i>
                        <span class="text-sm font-semibold text-emerald-800 dark:text-emerald-300">Jam Operasional</span>
                    </div>
                    <div class="divide-y divide-neutral-100 dark:divide-neutral-800">
                        @foreach ($jadwal as $j)
                            <div class="flex items-center justify-between px-5 py-3.5">
                                <span class="text-sm text-neutral-600 dark:text-neutral-400">{{ $j['hari'] }}</span>
                                <span class="text-sm font-semibold {{ $j['jam'] === 'Tutup' ? 'text-red-400' : 'text-slate-800 dark:text-slate-100' }}">
                                    {{ $j['jam'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- TAB: VISI & MISI --}}
        <div x-show="activeTab === 'visi-misi'" x-cloak x-transition class="space-y-10">
            <div>
                <div class="mb-8">
                    <span class="mb-2 inline-block text-xs font-semibold uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Arah & Tujuan</span>
                    <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-white md:text-4xl">Visi</h2>
                </div>
                <div class="rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-teal-50 p-8 dark:border-emerald-800 dark:from-emerald-950/40 dark:to-teal-950/30">
                    <p class="text-lg italic leading-relaxed text-slate-700 dark:text-slate-200">"—"</p>
                </div>
            </div>

            <div>
                <div class="mb-8">
                    <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-white md:text-4xl">Misi</h2>
                </div>
                <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-8 dark:border-neutral-700 dark:bg-neutral-900">
                    <p class="text-neutral-400">—</p>
                </div>
            </div>

            <div>
                <div class="mb-8">
                    <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-white md:text-4xl">Nilai-Nilai Kami</h2>
                </div>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    @foreach ($nilaiNilai as $nilai)
                        @php $c = $colorMap[$nilai['color']]; @endphp
                        <div class="flex flex-col items-center gap-3 rounded-2xl border {{ $c['border'] }} {{ $c['bg'] }} p-6 text-center transition-transform hover:-translate-y-1">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl {{ $c['icon'] }}">
                                <i data-lucide="{{ $nilai['icon'] }}" class="w-[22px] h-[22px]"></i>
                            </div>
                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">{{ $nilai['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- TAB: STRUKTUR ORGANISASI --}}
        <div x-show="activeTab === 'struktur'" x-cloak x-transition class="space-y-10">
            <div class="mb-8">
                <span class="mb-2 inline-block text-xs font-semibold uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Organisasi</span>
                <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-white md:text-4xl">Struktur Organisasi</h2>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($strukturOrganisasi as $person)
                    <div class="flex items-center gap-4 rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-lg font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">
                            {{ $person['inisial'] }}
                        </div>
                        <div>
                            <p class="mb-0.5 text-xs font-semibold uppercase tracking-wider text-neutral-400">{{ $person['jabatan'] }}</p>
                            <p class="font-bold text-slate-800 dark:text-slate-100">{{ $person['nama'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <div class="border-b border-neutral-100 px-6 py-4 dark:border-neutral-700">
                    <h3 class="font-bold text-slate-800 dark:text-slate-100">Tim Kesehatan</h3>
                    <p class="mt-0.5 text-xs text-neutral-400">Komposisi tenaga medis & pendukung</p>
                </div>
                <div class="grid grid-cols-2 divide-x divide-y divide-neutral-100 dark:divide-neutral-800 sm:grid-cols-4">
                    @foreach ($timKesehatan as $tim)
                        <div class="flex flex-col items-center gap-2 p-5 text-center">
                            <i data-lucide="{{ $tim['icon'] }}" class="w-5 h-5 text-emerald-500"></i>
                            <span class="text-2xl font-bold text-slate-800 dark:text-white">{{ $tim['count'] }}</span>
                            <span class="text-xs text-neutral-400">{{ $tim['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- TAB: FASILITAS --}}
        <div x-show="activeTab === 'fasilitas'" x-cloak x-transition class="space-y-10">
            <div class="mb-8">
                <span class="mb-2 inline-block text-xs font-semibold uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Sarana & Prasarana</span>
                <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-white md:text-4xl">Fasilitas Kami</h2>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($fasilitas as $item)
                    <div class="group flex items-start gap-4 rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm transition-all hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-900 dark:hover:border-emerald-700">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 transition-colors group-hover:bg-emerald-100 dark:bg-emerald-950/50 dark:text-emerald-400">
                            <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <div class="flex items-center gap-1.5">
                                <i data-lucide="check-circle-2" class="w-[13px] h-[13px] text-emerald-500"></i>
                                <h3 class="font-bold text-slate-800 dark:text-slate-100">{{ $item['name'] }}</h3>
                            </div>
                            <p class="mt-1 text-xs leading-relaxed text-neutral-500 dark:text-neutral-400">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <h3 class="mb-4 font-bold text-slate-800 dark:text-slate-100">Peralatan Medis</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach ($peralatan as $alat)
                        <span class="inline-flex items-center gap-1.5 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/50 dark:text-emerald-300">
                            <i data-lucide="chevron-right" class="w-[11px] h-[11px]"></i>
                            {{ $alat }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection