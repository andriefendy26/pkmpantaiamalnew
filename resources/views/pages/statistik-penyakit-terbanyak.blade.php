@extends('layouts.app')

@section('title', 'Penyakit Terbanyak - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Statistik
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Penyakit Terbanyak
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Berikut adalah ringkasan jenis penyakit yang paling banyak dilaporkan dan ditangani di UPTD Puskesmas Pantai Amal.</p>
                    <div class="mt-6 rounded-lg border border-neutral-200 bg-white p-4 dark:border-neutral-800 dark:bg-neutral-900">
                        <p class="text-sm font-medium text-slate-800 dark:text-white">Data penyakit terbanyak akan ditampilkan sesuai periode pelaporan yang berlaku.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
