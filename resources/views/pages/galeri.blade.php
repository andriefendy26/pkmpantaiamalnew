@extends('layouts.app')

@section('title', 'Galeri - UPTD Puskesmas Pantai Amal')

@section('content')
@php
    $items = [
        ['id' => '1', 'img' => 'assets/galeri/01.JPG', 'height' => 400],
        ['id' => '2', 'img' => 'assets/galeri/02.jpg', 'height' => 350],
        ['id' => '3', 'img' => 'assets/galeri/03.jpg', 'height' => 600],
        ['id' => '4', 'img' => 'assets/galeri/04.JPG', 'height' => 400],
        ['id' => '5', 'img' => 'assets/galeri/05.JPG', 'height' => 600],
        ['id' => '6', 'img' => 'assets/galeri/06.jpg', 'height' => 400],
    ];
@endphp

<div class="min-h-screen bg-white dark:bg-neutral-950" x-data="{ selected: null }">

    {{-- ── HERO ──────────────────────────────────────────── --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 h-56 w-56 rounded-full bg-teal-100/50 dark:bg-teal-900/20 blur-2xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28 fade-in">
            <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/60 dark:text-emerald-300">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                UPTD Puskesmas Pantai Amal
            </span>

            <h1 class="edu-vic-wa-nt-hand mb-4 text-5xl font-bold tracking-tight text-slate-800 dark:text-white md:text-6xl lg:text-7xl">
                Galeri<br />
                <span class="text-emerald-600 dark:text-emerald-400">Foto</span>
            </h1>

            <p class="max-w-xl text-base leading-relaxed text-neutral-500 dark:text-neutral-400 md:text-lg">
                Puskesmas Pantai Amal berkomitmen untuk menyediakan layanan kesehatan terbaik bagi masyarakat di sekitar kawasan puskesmas.
            </p>
        </div>
    </div>

    {{-- ── GALLERY GRID ──────────────────────────────────── --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        <span class="mb-6 inline-block text-xs font-semibold uppercase tracking-widest text-emerald-600 dark:text-emerald-400">
            Dokumentasi
        </span>

        <div class="columns-1 gap-4 sm:columns-2 lg:columns-3">
            @foreach ($items as $i => $item)
                <div
                    class="group mb-4 break-inside-avoid overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-900 cursor-pointer reveal"
                    x-data x-intersect.once="$el.classList.add('reveal-visible')"
                    style="transition-delay: {{ $i * 80 }}ms"
                    @click="selected = { id: '{{ $item['id'] }}', img: '{{ asset($item['img']) }}' }"
                >
                    <div class="relative overflow-hidden">
                        <img
                            src="{{ asset($item['img']) }}"
                            alt="Galeri {{ $item['id'] }}"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            style="height: {{ $item['height'] }}px"
                        />
                        {{-- Overlay --}}
                        <div class="absolute inset-0 flex items-center justify-center bg-emerald-900/0 transition-all duration-300 group-hover:bg-emerald-900/30">
                            <div class="flex h-10 w-10 scale-75 items-center justify-center rounded-full bg-white/90 opacity-0 shadow-md transition-all duration-300 group-hover:scale-100 group-hover:opacity-100">
                                <i data-lucide="zoom-in" class="w-[18px] h-[18px] text-emerald-700"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ── LIGHTBOX ──────────────────────────────────────── --}}
    <div
        x-show="selected"
        x-cloak
        x-transition.opacity
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4 backdrop-blur-sm"
        @click="selected = null"
    >
        {{-- Close button --}}
        <button
            class="absolute right-5 top-5 flex h-9 w-9 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white transition-colors hover:bg-white/20"
            @click="selected = null"
        >
            <i data-lucide="x" class="w-4 h-4"></i>
        </button>

        {{-- Image --}}
        <template x-if="selected">
            <img
                :src="selected.img"
                :alt="'Galeri ' + selected.id"
                x-transition.scale
                class="max-h-[90vh] max-w-full rounded-2xl object-contain shadow-2xl"
                @click.stop
            />
        </template>
    </div>
</div>
@endsection