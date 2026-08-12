@extends('layouts.app')

@section('title', $artikel->title . ' - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">

    {{-- HERO --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28">
            <div class="mx-auto max-w-3xl fade-in">
                <a href="{{ route('artikel.index') }}" class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-neutral-500 hover:text-emerald-600 dark:text-neutral-400 dark:hover:text-emerald-400">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Kembali ke Artikel
                </a>

                <div class="mb-4 flex flex-wrap items-center gap-2 text-xs text-neutral-400">
                    @if ($artikel->published_at)
                        <span class="flex items-center gap-1">
                            <i data-lucide="calendar" class="w-3 h-3"></i>
                            {{ $artikel->published_at->format('d F Y') }}
                        </span>
                    @endif
                    @if ($artikel->category)
                        <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-emerald-700 dark:bg-emerald-950/50 dark:text-emerald-300">
                            {{ $artikel->category->name }}
                        </span>
                    @endif
                </div>

                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    {{ $artikel->title }}
                </h1>

                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">
                        <i data-lucide="user" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-slate-800 dark:text-slate-100">{{ $artikel->displayAuthorName() }}</p>
                        <p class="text-xs text-neutral-400">Penulis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- DETAIL --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        <div class="mx-auto max-w-3xl">
            @if ($artikel->thumbnail)
                <div class="mb-8 overflow-hidden rounded-2xl border border-neutral-200 dark:border-neutral-700">
                    <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="{{ $artikel->title }}" class="w-full object-cover" />
                </div>
            @endif

            <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300">
                {!! nl2br(e($artikel->content)) !!}
            </div>

            @if ($artikel->tags->count() > 0)
                <div class="mt-8 flex flex-wrap gap-2">
                    @foreach ($artikel->tags as $tag)
                        <span class="rounded-full border border-neutral-200 bg-neutral-50 px-3 py-1 text-xs font-medium text-neutral-600 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-300">
                            #{{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- RELATED --}}
        @if ($related->count() > 0)
            <div class="mt-16">
                <x-section-header label="Terkait" title="Artikel Lainnya" />
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($related as $item)
                        <div x-data x-intersect.once="$el.classList.add('reveal-visible')" class="reveal" style="transition-delay: {{ $loop->index * 80 }}ms">
                            <x-content-card
                                :title="$item->title"
                                :excerpt="$item->excerpt"
                                :image="$item->thumbnail"
                                :url="route('artikel.show', $item->slug)"
                                :date="$item->published_at?->format('d M Y')"
                                :category="$item->category?->name"
                            />
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
