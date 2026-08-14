@extends('layouts.app')

@section('title', 'Post - UPTD Puskesmas Pantai Amal')

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
                Artikel & Berita
            </h1>
            <p class="max-w-xl text-base leading-relaxed text-neutral-500 dark:text-neutral-400 md:text-lg">
                Informasi terbaru seputar kegiatan dan perkembangan Puskesmas Pantai Amal.
            </p>
        </div>
    </div>



    {{-- CONTENT --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        {{-- Search --}}
        <div class="mb-8">
            <form method="GET" action="{{ route('post') }}" class="flex gap-2">
                <div class="relative flex-1">
                    <i data-lucide="search" class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-neutral-400"></i>
                    <input
                        type="text"
                        name="search"
                        value="{{ $search ?? '' }}"
                        placeholder="Cari artikel atau berita..."
                        class="w-full rounded-xl border border-neutral-200 bg-white py-2.5 pl-10 pr-4 text-sm text-slate-700 placeholder-neutral-400 transition-colors focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 dark:border-neutral-700 dark:bg-neutral-900 dark:text-slate-200 dark:placeholder-neutral-500"
                    />
                </div>
                <button type="submit" class="rounded-xl bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-emerald-700">
                    Cari
                </button>
                @if ($search)
                    <a href="{{ route('post', array_merge(request()->query(), ['search' => null])) }}" class="rounded-xl border border-neutral-200 px-4 py-2.5 text-sm font-medium text-neutral-600 transition-colors hover:border-emerald-300 hover:text-emerald-600 dark:border-neutral-700 dark:text-neutral-300">
                        Reset
                    </a>
                @endif
            </form>
        </div>

        {{-- Filter kategori --}}
        <div class="mb-8 flex flex-wrap gap-2">
            <a href="{{ route('post', array_merge(request()->query(), ['kategori' => null])) }}"
            class="rounded-full px-4 py-1.5 text-sm font-medium transition-colors {{ ! $activeCategory ? 'bg-emerald-600 text-white' : 'border border-neutral-200 text-neutral-600 hover:border-emerald-300 hover:text-emerald-600 dark:border-neutral-700 dark:text-neutral-300' }}">
                Semua
            </a>
            @foreach ($categories as $category)
                <a href="{{ route('post', array_merge(request()->query(), ['kategori' => $category->slug])) }}"
                class="rounded-full px-4 py-1.5 text-sm font-medium transition-colors {{ $activeCategory === $category->slug ? 'bg-emerald-600 text-white' : 'border border-neutral-200 text-neutral-600 hover:border-emerald-300 hover:text-emerald-600 dark:border-neutral-700 dark:text-neutral-300' }}">
                    {{ $category->name }}
                    <span class="ml-1 {{ $activeCategory === $category->slug ? 'text-emerald-100' : 'text-neutral-400' }}">({{ $category->posts_count }})</span>
                </a>
            @endforeach
        </div>

        {{-- Grid post --}}
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $item)
                <x-content-card
                    :title="$item->title"
                    :excerpt="strip_tags($item->content)"
                    :image="$item->image"
                    :url="route('post.show', $item->slug)"
                    :date="$item->publishing_date?->format('d M Y')"
                    :category="$item->postCategory?->name"
                    :author="$item->displayAuthorName()"
                />
            @empty
                <div class="col-span-full py-16 text-center text-sm text-neutral-500 dark:text-neutral-400">
                    Tidak ada artikel yang cocok dengan pencarian Anda.
                </div>
            @endforelse
        </div>

        @if ($posts->hasPages())
            <div class="mt-10">
                {{ $posts->links('vendor.pagination.custom') }}
            </div>
        @endif
    </div>
</div>
@endsection
