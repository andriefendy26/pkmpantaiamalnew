@extends('layouts.app')

@section('title', 'Lintas Klaster - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Pelayanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Klaster 5 — Lintas Klaster
                </h1>
                <div class="max-w-3xl space-y-4 text-neutral-600 dark:text-neutral-400">
                    <p>
                        Klaster 5 (disebut juga lintas klaster) mengacu pada konsep yang digunakan dalam pengelolaan pelayanan kesehatan di Indonesia, khususnya dalam konteks Puskesmas (Pusat Kesehatan Masyarakat). Secara umum, klaster ini merujuk pada pembagian atau pengelompokan wilayah kerja puskesmas untuk memudahkan pengelolaan dan koordinasi layanan kesehatan di tingkat komunitas.
                    </p>
                    <p>
                        Dalam beberapa sistem manajemen pelayanan kesehatan, Puskesmas dibagi menjadi beberapa klaster atau kelompok yang melibatkan beberapa puskesmas yang saling berkoordinasi. Klaster 5 biasanya merujuk pada kelompok puskesmas yang memiliki tanggung jawab tertentu dalam memberikan layanan kesehatan dasar.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24 space-y-16">

        {{-- ── Cakupan Klaster 5 ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Cakupan Klaster 5</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="heart-pulse" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Layanan Kesehatan</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Puskesmas dalam klaster ini menyediakan layanan kesehatan dasar bagi masyarakat, termasuk imunisasi, perawatan ibu dan anak, layanan gizi, serta pengobatan penyakit umum.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 50ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="network" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Koordinasi Antarpuskesmas</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Lintas klaster memungkinkan kolaborasi dan koordinasi antara beberapa puskesmas dalam satu wilayah atau lebih untuk menangani permasalahan kesehatan yang lebih luas.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 100ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="trending-up" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Penguatan Program Kesehatan</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Ada program-program kesehatan tertentu yang dapat dijalankan bersama oleh beberapa puskesmas, seperti program pencegahan penyakit menular, penyuluhan kesehatan, dan lain-lain.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="map" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Tanggung Jawab Terhadap Wilayah yang Lebih Luas</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Pembagian menjadi klaster bertujuan untuk meningkatkan efektivitas dan efisiensi pelayanan dengan fokus pada wilayah yang lebih besar dari satu puskesmas.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── Unit Layanan ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">
                Unit Layanan dalam Ruang Lingkup Lintas Klaster
            </h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="flask-conical" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">1. Farmasi</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 50ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="smile" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">2. Pelayanan Gigi dan Mulut</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 100ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="test-tube" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">3. Laboratorium</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="siren" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">4. Unit Gawat Darurat</h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── Kesimpulan ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <p class="text-sm text-neutral-600 dark:text-neutral-400">
                Jadi, "klaster 5 lintas klaster puskesmas" merujuk pada organisasi puskesmas yang bekerja secara sinergis untuk meningkatkan kualitas layanan kesehatan di wilayah tertentu.
            </p>
        </div>
    </div>
</div>
@endsection