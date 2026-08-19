@extends('layouts.app')

@section('title', 'Survey Kepuasan Masyarakat - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden" x-data="{ lightbox: { open: false, src: '', alt: '' } }">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Layanan Lainnya
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Survey Kepuasan Masyarakat
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Survey kepuasan masyarakat adalah alat untuk mengukur tingkat kepuasan masyarakat terhadap pelayanan yang diberikan oleh UPTD Puskesmas Pantai Amal.</p>
                    <p>Dengan mengisi survei ini, Anda membantu kami meningkatkan kualitas pelayanan kesehatan di wilayah Pantai Amal.</p>
                    <div class="mt-6 rounded-lg border border-emerald-200 bg-emerald-50 p-4 dark:border-emerald-800 dark:bg-emerald-950">
                        <p class="text-sm font-medium text-emerald-800 dark:text-emerald-200">
                            Silakan klik flyer survey untuk melihat detail lebih jelas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-5xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Daftar Flyer Survey</h2>
            @if($surveys->count() > 0)
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($surveys as $survey)
                        <div @click="lightbox = { open: true, src: {{ json_encode(asset('storage/' . $survey->file_path)) }}, alt: {{ json_encode($survey->judul) }} }" class="group cursor-zoom-in rounded-2xl border border-neutral-200 bg-white shadow-sm transition-all hover:border-emerald-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-900 dark:hover:border-emerald-700">
                            <div class="relative aspect-[3/4] overflow-hidden rounded-t-2xl bg-neutral-100 dark:bg-neutral-800">
                                <img src="{{ asset('storage/' . $survey->file_path) }}" alt="{{ $survey->judul }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                                <div class="absolute top-3 right-3 rounded-full bg-emerald-600 px-3 py-1 text-xs font-semibold text-white shadow-lg">
                                    {{ $survey->tahun }}
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-slate-800 dark:text-slate-100 line-clamp-2">{{ $survey->judul }}</h3>
                                <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">Tahun {{ $survey->tahun }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="rounded-xl border border-neutral-200 bg-neutral-50 p-8 text-center dark:border-neutral-700 dark:bg-neutral-900">
                    <p class="text-neutral-500 dark:text-neutral-400">Belum ada flyer survey kepuasan masyarakat yang tersedia.</p>
                </div>
            @endif
        </div>
    </div>

    <div x-cloak>
        <div x-show="lightbox.open" x-cloak x-transition.opacity class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/80 p-4" @click.self="lightbox = { open: false, src: '', alt: '' }">
            <div class="relative max-h-[90vh] max-w-[90vw] overflow-auto rounded-xl bg-white p-2 dark:bg-neutral-900">
                <button @click="lightbox = { open: false, src: '', alt: '' }" class="absolute right-4 top-4 z-10 rounded-full bg-white/90 p-2 text-neutral-700 shadow-lg transition-colors hover:bg-white dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700" aria-label="Tutup">
                    <i data-lucide="x" class="h-5 w-5"></i>
                </button>
                <img :src="lightbox.src" :alt="lightbox.alt" class="max-h-[85vh] w-auto rounded-lg object-contain">
            </div>
        </div>
    </div>
</div>
@endsection
