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

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl">
            <div x-data="{ zoomed: false }" class="rounded-2xl border border-neutral-200 bg-neutral-50 p-4 dark:border-neutral-700 dark:bg-neutral-900">
                <img src="{{ asset('storage/profil/struktur/struktur.png') }}" alt="Struktur Organisasi Puskesmas Pantai Amal" class="w-full h-auto rounded-xl cursor-zoom-in object-cover" @click="zoomed = true">
                <p class="mt-3 text-center text-sm font-medium text-neutral-600 dark:text-neutral-300">Struktur Organisasi Puskesmas Pantai Amal</p>
            </div>
        </div>
    </div>
</div>

<div x-show="zoomed" x-cloak x-transition.opacity class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/80 p-4" @click.self="zoomed = false">
    <div class="relative max-h-[90vh] max-w-[90vw] overflow-auto rounded-xl bg-white p-2 dark:bg-neutral-900">
        <button @click="zoomed = false" class="absolute right-4 top-4 rounded-full bg-white/90 p-2 text-neutral-700 shadow-lg transition-colors hover:bg-white dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700" aria-label="Tutup">
            <i data-lucide="x" class="h-5 w-5"></i>
        </button>
        <img src="{{ asset('storage/profil/struktur/struktur.png') }}" alt="Struktur Organisasi Puskesmas Pantai Amal" class="max-h-[85vh] w-auto rounded-lg object-contain">
    </div>
</div>
@endsection
