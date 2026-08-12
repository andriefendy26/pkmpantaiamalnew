@extends('layouts.app')

@section('title', $gallery->title . ' - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">

    {{-- HERO --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28">
            <div class="mx-auto max-w-3xl fade-in">
                <a href="{{ route('galeri') }}" class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-neutral-500 hover:text-emerald-600 dark:text-neutral-400 dark:hover:text-emerald-400">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Kembali ke Galeri
                </a>

                <h1 class="edu-vic-wa-nt-hand mb-4 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    {{ $gallery->title }}
                </h1>

                <div class="flex flex-wrap items-center gap-4 text-sm text-neutral-500 dark:text-neutral-400">
                    @if ($gallery->event_date)
                        <span class="flex items-center gap-1">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            {{ \Carbon\Carbon::parse($gallery->event_date)->format('d F Y') }}
                        </span>
                    @endif
                    @if ($gallery->items->count() > 0)
                        <span class="flex items-center gap-1">
                            <i data-lucide="image" class="w-4 h-4"></i>
                            {{ $gallery->items->count() }} foto/video
                        </span>
                    @endif
                </div>

                @if ($gallery->description)
                    <p class="mt-4 text-base leading-relaxed text-neutral-600 dark:text-neutral-300">
                        {{ $gallery->description }}
                    </p>
                @endif
            </div>
        </div>
    </div>

    {{-- GALLERY GRID --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        @if ($gallery->items->count() > 0)
            <div class="columns-1 gap-4 sm:columns-2 lg:columns-3">
                @foreach ($gallery->items as $item)
                    <div
                        class="group mb-4 break-inside-avoid overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-900 cursor-pointer reveal"
                        x-data x-intersect.once="$el.classList.add('reveal-visible')"
                        style="transition-delay: {{ $loop->index * 60 }}ms"
                        @click="selected = { file_path: @js(asset('storage/' . $item->file_path)), caption: @js($item->caption ?? $item->title), media_type: @js($item->media_type?->value ?? 'image') }"
                    >
                        <div class="relative overflow-hidden">
                            @if ($item->thumbnail)
                                <img
                                    src="{{ asset('storage/' . $item->thumbnail) }}"
                                    alt="{{ $item->title ?? 'Galeri' }}"
                                    class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    loading="lazy"
                                />
                            @else
                                <img
                                    src="{{ asset('storage/' . $item->file_path) }}"
                                    alt="{{ $item->title ?? 'Galeri' }}"
                                    class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    loading="lazy"
                                />
                            @endif
                            @if ($item->caption || $item->title)
                                <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/50 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <div class="p-4">
                                        <p class="text-sm font-medium text-white">{{ $item->caption ?? $item->title }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="py-20 text-center">
                <div class="mb-3 text-5xl opacity-20"><i data-lucide="image-off" class="w-16 h-16 mx-auto text-neutral-300 dark:text-neutral-600"></i></div>
                <p class="text-sm text-neutral-400">Galeri ini belum memiliki foto atau video.</p>
            </div>
        @endif
    </div>

    {{-- LIGHTBOX --}}
    <div
        x-data="{ selected: null }"
        x-show="selected"
        x-cloak
        x-transition.opacity
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4 backdrop-blur-sm"
        @click="selected = null"
    >
        <button
            class="absolute right-5 top-5 flex h-9 w-9 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white transition-colors hover:bg-white/20"
            @click="selected = null"
        >
            <i data-lucide="x" class="w-4 h-4"></i>
        </button>

        <template x-if="selected">
            <div @click.stop>
                <template x-if="selected.media_type === 'video'">
                    <video
                        :src="selected.file_path"
                        :alt="selected.caption"
                        x-transition.scale
                        class="max-h-[90vh] max-w-full rounded-2xl object-contain shadow-2xl"
                        controls
                        autoplay
                    ></video>
                </template>
                <template x-if="selected.media_type !== 'video'">
                    <img
                        :src="selected.file_path"
                        :alt="selected.caption"
                        x-transition.scale
                        class="max-h-[90vh] max-w-full rounded-2xl object-contain shadow-2xl"
                    />
                </template>
                <p x-text="selected.caption" class="mt-3 text-center text-sm text-white/80"></p>
            </div>
        </template>
    </div>
</div>
@endsection
