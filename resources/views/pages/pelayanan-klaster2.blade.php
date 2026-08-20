@extends('layouts.app')

@section('title', 'Klaster 2 - Ibu, Anak, dan Remaja - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Pelayanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Klaster 2 — Ibu, Anak, dan Remaja
                </h1>
                <div class="max-w-3xl space-y-4 text-neutral-600 dark:text-neutral-400">
                    <p>
                        Klaster 2 (Ibu, Anak, dan Remaja) adalah klaster pelayanan Puskesmas yang menyelenggarakan pelayanan kesehatan berbasis siklus hidup awal, mulai dari ibu hamil, bayi, balita, anak usia sekolah, hingga remaja. Klaster ini berfokus pada pencegahan risiko kesehatan sejak dini, peningkatan kualitas tumbuh kembang, serta pembentukan perilaku hidup sehat sejak usia muda.
                    </p>
                    <p>
                        Klaster 2 merupakan klaster pelayanan Puskesmas yang menyelenggarakan pelayanan kesehatan bagi ibu, bayi, balita, anak usia sekolah, dan remaja melalui pendekatan berbasis siklus hidup, keluarga, dan komunitas. Klaster ini berfokus pada upaya promotif dan preventif yang diperkuat dengan pelayanan kuratif dan rehabilitatif dasar, guna menjamin kualitas kesehatan sejak awal kehidupan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24 space-y-16">

        {{-- ── Ruang Lingkup ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Ruang Lingkup Klaster 2</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="heart-pulse" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">1. Ibu Hamil</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Antenatal care (ANC), pemeriksaan rutin kehamilan, imunisasi, penanganan komplikasi kehamilan, konseling gizi dan kesehatan.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 50ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="baby" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">2. Persalinan</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Persalinan normal, persalinan dengan bantuan, penanganan komplikasi persalinan, tindakan kebidanan.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 100ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="stethoscope" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">3. Nifas</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Pemeriksaan nifas, konseling, penanganan komplikasi.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="users" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">4. Bayi, Balita, Anak Prasekolah, Usia Sekolah, dan Remaja</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Sampai dengan usia 17 tahun.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── Kegiatan ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Kegiatan yang Dilakukan di Klaster 2</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="syringe" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">1. Imunisasi</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 50ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="ruler" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">2. Pemantauan Pertumbuhan dan Perkembangan</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 100ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">3. Skrining Penyakit Menular dan Tidak Menular</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="pill" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">4. Penanganan Penyakit Ringan</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 200ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="message-circle-heart" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">5. Konseling Kesehatan dan Gizi</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 250ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="shield-plus" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">6. Vaksinasi</h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── Pelayanan Luar Puskesmas & Tujuan ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl grid grid-cols-1 gap-8 sm:grid-cols-2">
            <div>
                <h2 class="mb-4 text-2xl font-bold text-slate-800 dark:text-white">Pelayanan Luar Puskesmas</h2>
                <p class="text-sm text-neutral-600 dark:text-neutral-400">
                    Kunjungan rumah ke ibu hamil, bayi, dan balita oleh petugas puskesmas dan kader posyandu.
                </p>
            </div>

            <div>
                <h2 class="mb-4 text-2xl font-bold text-slate-800 dark:text-white">Tujuan Pelayanan</h2>
                <ul class="list-disc list-inside space-y-1 text-sm text-neutral-600 dark:text-neutral-400">
                    <li>Meningkatkan derajat kesehatan ibu dan anak di wilayah kerja puskesmas.</li>
                    <li>Mencegah komplikasi kehamilan dan persalinan.</li>
                    <li>Mencegah penyakit pada bayi, balita, dan anak-anak.</li>
                    <li>Meningkatkan kualitas hidup ibu dan anak.</li>
                </ul>
            </div>
        </div>

        {{-- ── Prosedur Pelayanan ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Prosedur Pelayanan</h2>
            <ol class="space-y-4">
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">1</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Pasien datang ke puskesmas dan melakukan pendaftaran.</p>
                </li>
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">2</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Petugas pendaftaran mengarahkan pasien ke ruang pelayanan klaster 2.</p>
                </li>
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">3</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Petugas klaster 2 melakukan skrining dan pemeriksaan kepada pasien.</p>
                </li>
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">4</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Bila diperlukan pemeriksaan penunjang, pasien dirujuk ke laboratorium.</p>
                </li>
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">5</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Bila pasien memerlukan tindakan khusus, dirujuk ke ruang tindakan.</p>
                </li>
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">6</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Pasien dirujuk ke FKRTL (Fasilitas Kesehatan Rujukan Tingkat Lanjutan) jika memerlukan pengobatan lanjutan atau spesialistik.</p>
                </li>
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">7</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Petugas klaster 2 menentukan diagnosis pasien dan memberikan resep jika diperlukan.</p>
                </li>
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">8</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Pasien diarahkan ke farmasi untuk mengambil obat.</p>
                </li>
                <li class="flex gap-4">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-semibold text-white">9</span>
                    <p class="pt-1 text-sm text-neutral-600 dark:text-neutral-400">Pasien dirujuk ke klaster 4 (penanggulangan penyakit menular) jika dicurigai memiliki penyakit menular.</p>
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection