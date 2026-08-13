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
                    Lintas Klaster
                </h1>
                <p class="max-w-2xl text-neutral-600 dark:text-neutral-400">
                    Layanan penunjang yang melayani seluruh klaster, tanpa terikat pada satu kelompok usia tertentu.
                </p>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                 x-intersect:enter.once="$el.classList.add('reveal-visible')">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                    <i data-lucide="siren" class="w-5 h-5"></i>
                </span>
                <div>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Gawat Darurat (UGD)</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Pelayanan gawat darurat untuk penanganan cepat.
                    </p>
                </div>
            </div>

            <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                 x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 75ms">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                    <i data-lucide="smile" class="w-5 h-5"></i>
                </span>
                <div>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Kesehatan Gigi &amp; Mulut</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Pelayanan kesehatan gigi dan mulut.
                    </p>
                </div>
            </div>

            <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                 x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                    <i data-lucide="flask-conical" class="w-5 h-5"></i>
                </span>
                <div>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Kefarmasian &amp; Laboratorium</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Pelayanan kefarmasian (apotek) dan laboratorium.
                    </p>
                </div>
            </div>

            <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                 x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 225ms">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                    <i data-lucide="bed" class="w-5 h-5"></i>
                </span>
                <div>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Rawat Inap</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Rawat inap, jika tersedia sesuai kapasitas Puskesmas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection