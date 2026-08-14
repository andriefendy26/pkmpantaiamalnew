@extends('layouts.app')

@section('title', 'Statistik - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Data
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Statistik Puskesmas
                </h1>
                <p class="content-body mb-8 text-base leading-relaxed text-neutral-700 dark:text-neutral-300">
                    Pilih jenis statistik yang ingin Anda lihat untuk mengetahui data terkini pelayanan kesehatan di UPTD Puskesmas Pantai Amal.
                </p>
                <div class="grid gap-6 md:grid-cols-2">
                    <a href="/statistik/kunjungan-pasien" class="group rounded-lg border border-neutral-200 bg-white p-6 transition-all hover:border-emerald-300 hover:shadow-md dark:border-neutral-800 dark:bg-neutral-900 dark:hover:border-emerald-700">
                        <h3 class="font-semibold text-slate-800 dark:text-white group-hover:text-emerald-700 dark:group-hover:text-emerald-400">Kunjungan Pasien</h3>
                        <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">Data kunjungan pasien berdasarkan waktu dan jenis pelayanan.</p>
                    </a>
                    <a href="/statistik/penyakit-terbanyak" class="group rounded-lg border border-neutral-200 bg-white p-6 transition-all hover:border-emerald-300 hover:shadow-md dark:border-neutral-800 dark:bg-neutral-900 dark:hover:border-emerald-700">
                        <h3 class="font-semibold text-slate-800 dark:text-white group-hover:text-emerald-700 dark:group-hover:text-emerald-400">Penyakit Terbanyak</h3>
                        <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">Daftar penyakit yang paling sering dialami oleh pasien.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
