@extends('layouts.app')

@section('title', 'Struktur Organisasi - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Organisasi
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Struktur Organisasi
                </h1>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="flex items-center gap-4 rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-lg font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">D</div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Kepala Puskesmas</p>
                            <p class="font-bold text-slate-800 dark:text-slate-100">drg. Desianti</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-lg font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">YN</div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Kepala Tata Usaha</p>
                            <p class="font-bold text-slate-800 dark:text-slate-100">Yeni Nurlaili, S.KM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
