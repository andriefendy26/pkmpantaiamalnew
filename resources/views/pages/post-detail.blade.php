@extends('layouts.app')

@section('title', $post->title . ' - UPTD Puskesmas Pantai Amal')

@push('head')
<style>
    /* Styling untuk konten HTML dari rich text editor (Artikel/Berita) */
    .content-body { color: inherit; }

    .content-body > *:first-child { margin-top: 0; }
    .content-body > *:last-child { margin-bottom: 0; }

    .content-body p { margin-bottom: 1.25em; }

    .content-body h1, .content-body h2, .content-body h3,
    .content-body h4, .content-body h5, .content-body h6 {
        font-weight: 700;
        margin-top: 1.75em;
        margin-bottom: 0.75em;
        line-height: 1.3;
        color: #1e293b; /* slate-800 */
    }
    .dark .content-body h1, .dark .content-body h2, .dark .content-body h3,
    .dark .content-body h4, .dark .content-body h5, .dark .content-body h6 {
        color: #f1f5f9; /* slate-100 */
    }
    .content-body h1 { font-size: 1.875rem; }
    .content-body h2 { font-size: 1.5rem; }
    .content-body h3 { font-size: 1.25rem; }

    .content-body img {
        max-width: 100%;
        height: auto;
        border-radius: 0.75rem;
        margin: 1.75em auto;
        display: block;
        border: 1px solid #e5e5e5;
    }
    .dark .content-body img { border-color: #404040; }

    .content-body figure { margin: 1.75em 0; }
    .content-body figcaption {
        text-align: center;
        font-size: 0.8125rem;
        color: #737373;
        margin-top: 0.5em;
    }

    .content-body blockquote {
        border-left: 4px solid #10b981; /* emerald-500 */
        padding: 0.25em 1.25em;
        margin: 1.75em 0;
        font-style: italic;
        color: #525252; /* neutral-600 */
        background: #f8fafc;
        border-radius: 0 0.5rem 0.5rem 0;
    }
    .dark .content-body blockquote {
        color: #d4d4d4;
        background: rgba(255,255,255,0.03);
    }
    .content-body blockquote p:last-child { margin-bottom: 0; }

    .content-body ul, .content-body ol {
        margin-bottom: 1.25em;
        padding-left: 1.5em;
    }
    .content-body ul { list-style: disc; }
    .content-body ol { list-style: decimal; }
    .content-body li { margin-bottom: 0.4em; }
    .content-body li > ul, .content-body li > ol { margin-top: 0.4em; margin-bottom: 0; }

    .content-body a {
        color: #059669; /* emerald-600 */
        text-decoration: underline;
        text-underline-offset: 2px;
    }
    .content-body a:hover { color: #047857; }

    .content-body strong { font-weight: 700; color: #1e293b; }
    .dark .content-body strong { color: #f1f5f9; }

    .content-body hr {
        border: none;
        border-top: 1px solid #e5e5e5;
        margin: 2em 0;
    }
    .dark .content-body hr { border-color: #404040; }

    .content-body table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1.75em;
        font-size: 0.9em;
    }
    .content-body th, .content-body td {
        border: 1px solid #e5e5e5;
        padding: 0.5em 0.75em;
        text-align: left;
    }
    .dark .content-body th, .dark .content-body td { border-color: #404040; }
    .content-body th { background: #f8fafc; font-weight: 600; }
    .dark .content-body th { background: rgba(255,255,255,0.03); }

    .content-body code {
        background: #f1f5f9;
        padding: 0.15em 0.45em;
        border-radius: 0.3em;
        font-size: 0.875em;
        font-family: ui-monospace, monospace;
    }
    .dark .content-body code { background: #262626; }

    .content-body pre {
        background: #171717;
        color: #f5f5f5;
        padding: 1em 1.25em;
        border-radius: 0.6rem;
        overflow-x: auto;
        margin-bottom: 1.5em;
    }
    .content-body pre code { background: transparent; padding: 0; }

    .content-body iframe {
        max-width: 100%;
        border-radius: 0.75rem;
        margin: 1.75em 0;
    }
</style>
@endpush

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">

    {{-- BREADCRUMB --}}
    <div class="border-b border-neutral-200 bg-white dark:border-neutral-800 dark:bg-neutral-900">
        <div class="mx-auto max-w-7xl px-6 py-3">
            <div class="flex items-center gap-2 text-xs text-neutral-500 dark:text-neutral-400">
                <a href="{{ url('/') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400">Beranda</a>
                <i data-lucide="chevron-right" class="w-3 h-3"></i>
                <a href="{{ route('post') }}" class="hover:text-emerald-600 dark:hover:text-emerald-400">Post</a>
                <i data-lucide="chevron-right" class="w-3 h-3"></i>
                <span class="truncate text-neutral-800 dark:text-neutral-200">{{ $post->title }}</span>
            </div>
        </div>
    </div>

    {{-- HERO --}}
    <div class="bg-white dark:bg-neutral-900">
        <div class="mx-auto max-w-7xl px-6 py-10 md:py-16">
            <div class="mx-auto max-w-3xl">
                <div class="mb-4 flex flex-wrap items-center gap-2">
                    @if ($post->postCategory)
                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 dark:bg-emerald-950/60 dark:text-emerald-300">
                            {{ $post->postCategory->name }}
                        </span>
                    @endif
                </div>

                <h1 class="edu-vic-wa-nt-hand mb-4 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    {{ $post->title }}
                </h1>

                <div class="flex flex-wrap items-center gap-4 text-xs text-neutral-500 dark:text-neutral-400">
                    @if ($post->publishing_date)
                        <span class="flex items-center gap-1">
                            <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                            {{ $post->publishing_date->format('d F Y') }}
                        </span>
                    @endif
                    <span class="flex items-center gap-1">
                        <i data-lucide="clock" class="w-3.5 h-3.5"></i>
                        {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} menit baca
                    </span>
                </div>

                <div class="mt-5 flex items-center gap-3 border-t border-neutral-200 pt-5 dark:border-neutral-800">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-sm font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">
                        {{ strtoupper(substr($post->displayAuthorName(), 0, 1)) }}
                    </div>
                    <div>
                        <p class="text-sm font-medium text-slate-800 dark:text-slate-100">{{ $post->displayAuthorName() }}</p>
                        <p class="text-xs text-neutral-400">Penulis · {{ $post->updated_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FEATURE IMAGE --}}
    {{-- FEATURE IMAGE --}}
        @if ($post->image)
            <div class="mx-auto max-w-7xl px-6">
                <div class="mx-auto max-w-3xl overflow-hidden rounded-2xl border border-neutral-200 dark:border-neutral-700">
                    <img
                        src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->title }}"
                        class="aspect-[16/9] w-full object-cover"
                    />
                </div>
            </div>
        @endif

    {{-- ARTICLE BODY --}}
    <div class="mx-auto max-w-7xl px-6 py-10">
        <div class="mx-auto max-w-3xl">
            <article class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300">
                {!! $post->content !!}
            </article>

            <div class="mt-8 flex flex-wrap items-center gap-2">
                @if ($post->postCategory)
                    <span class="text-xs text-neutral-500">Kategori:</span>
                    <a href="{{ route('post') }}" class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 dark:bg-emerald-950/60 dark:text-emerald-300">
                        {{ $post->postCategory->name }}
                    </a>
                @endif
            </div>

            <div class="mt-6">
                <a href="{{ route('post') }}" class="inline-flex items-center gap-1 text-sm font-medium text-emerald-600 hover:text-emerald-700 dark:text-emerald-400">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Kembali ke Post
                </a>
            </div>
        </div>
    </div>

    {{-- RELATED --}}
    @if ($related->count() > 0)
        <div class="border-t border-neutral-200 bg-neutral-50 dark:border-neutral-800 dark:bg-neutral-900">
            <div class="mx-auto max-w-7xl px-6 py-12">
                <x-section-header label="Terkait" title="Postingan Lainnya" align="left" />
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($related as $item)
                        <div x-data x-intersect.once="$el.classList.add('reveal-visible')" class="reveal" style="transition-delay: {{ $loop->index * 80 }}ms">
                            <x-content-card
                                :title="$item->title"
                                :excerpt="strip_tags($item->content)"
                                :image="$item->image"
                                :url="route('post.show', $item->slug)"
                                :date="$item->publishing_date?->format('d M Y')"
                                :category="$item->postCategory?->name"
                                :author="$item->displayAuthorName()"
                            />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
@endsection