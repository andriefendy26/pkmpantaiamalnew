@extends('layouts.app')

@section('title', 'Artikel - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">

    {{-- HERO --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 h-56 w-56 rounded-full bg-teal-100/50 dark:bg-teal-900/20 blur-2xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28 fade-in">
            <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/60 dark:text-emerald-300">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                UPTD Puskesmas Pantai Amal
            </span>
            <h1 class="edu-vic-wa-nt-hand mb-4 text-5xl font-bold tracking-tight text-slate-800 dark:text-white md:text-6xl lg:text-7xl">
                Artikel
            </h1>
            <p class="max-w-xl text-base leading-relaxed text-neutral-500 dark:text-neutral-400 md:text-lg">
                Baca artikel kesehatan terbaru dan informasi edukasi dari tenaga medis kami.
            </p>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        @if ($artikels->count() > 0)
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($artikels as $artikel)
                    <div x-data x-intersect.once="$el.classList.add('reveal-visible')" class="reveal" style="transition-delay: {{ $loop->index * 80 }}ms">
                        <x-content-card
                            :title="$artikel->title"
                            :excerpt="$artikel->excerpt"
                            :image="$artikel->thumbnail"
                            :url="route('artikel.show', $artikel->slug)"
                            :date="$artikel->published_at?->format('d M Y')"
                            :category="$artikel->category?->name"
                            :author="$artikel->displayAuthorName()"
                        />
                    </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $artikels->links() }}
            </div>
        @else
            <div class="py-20 text-center">
                <div class="mb-3 text-5xl opacity-20"><i data-lucide="book-open" class="w-16 h-16 mx-auto text-neutral-300 dark:text-neutral-600"></i></div>
                <p class="text-sm text-neutral-400">Belum ada artikel yang dipublikasikan.</p>
            </div>
        @endif
    </div>
</div>
@endsection
