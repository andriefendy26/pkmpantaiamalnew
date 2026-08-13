@extends('layouts.app')

@section('title', 'Berita dan Pengumuman - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Informasi
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Berita dan Pengumuman
                </h1>
                <p class="mb-8 text-neutral-600 dark:text-neutral-400">Informasi terbaru seputar kegiatan dan pengumuman dari Puskesmas Pantai Amal.</p>
                <div class="rounded-2xl border border-dashed border-neutral-300 bg-neutral-50 p-12 text-center dark:border-neutral-700 dark:bg-neutral-900">
                    <p class="text-sm text-neutral-500 dark:text-neutral-400">Belum ada berita atau pengumuman.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
