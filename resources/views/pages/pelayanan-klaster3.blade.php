@extends('layouts.app')

@section('title', 'Klaster 3 - Usia Dewasa dan Lanjut Usia - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Pelayanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Klaster 3 — Usia Dewasa dan Lanjut Usia
                </h1>
                <p class="max-w-2xl text-neutral-600 dark:text-neutral-400">
                    Layanan kesehatan menyeluruh bagi usia produktif dan lanjut usia, dari upaya promotif hingga rehabilitatif.
                </p>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                 x-intersect:enter.once="$el.classList.add('reveal-visible')">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                    <i data-lucide="activity" class="w-5 h-5"></i>
                </span>
                <div>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Usia Produktif</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Pelayanan kesehatan bagi usia produktif (dewasa).
                    </p>
                </div>
            </div>

            <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                 x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 75ms">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                    <i data-lucide="users" class="w-5 h-5"></i>
                </span>
                <div>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Lanjut Usia (Lansia)</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Pemeriksaan kesehatan berkala bagi lanjut usia.
                    </p>
                </div>
            </div>

            <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40 sm:col-span-2"
                 x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                    <i data-lucide="shield-check" class="w-5 h-5"></i>
                </span>
                <div>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Promotif, Preventif, Kuratif &amp; Rehabilitatif</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Upaya kesehatan yang disesuaikan dengan kebutuhan tiap kelompok umur.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection