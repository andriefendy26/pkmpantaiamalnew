@extends('layouts.app')

@section('title', $layanan->title . ' - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">

    {{-- HERO --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28">
            <div class="mx-auto max-w-3xl fade-in">
                <a href="{{ route('layanan.index') }}" class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-neutral-500 hover:text-emerald-600 dark:text-neutral-400 dark:hover:text-emerald-400">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Kembali ke Layanan
                </a>

                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    {{ $layanan->title }}
                </h1>

                @if ($layanan->short_description)
                    <p class="text-lg leading-relaxed text-neutral-600 dark:text-neutral-300">
                        {{ $layanan->short_description }}
                    </p>
                @endif
            </div>
        </div>
    </div>

    {{-- DETAIL --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        <div class="mx-auto max-w-3xl">
            @if ($layanan->image)
                <div class="mb-8 overflow-hidden rounded-2xl border border-neutral-200 dark:border-neutral-700">
                    <img src="{{ asset('storage/' . $layanan->image) }}" alt="{{ $layanan->title }}" class="w-full object-cover" />
                </div>
            @endif

            <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300">
                {!! nl2br(e($layanan->description)) !!}
            </div>

            @if ($layanan->requirements && count($layanan->requirements) > 0)
                <div class="mt-8 rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h3 class="mb-4 font-bold text-slate-800 dark:text-slate-100">Persyaratan</h3>
                    <ul class="space-y-2">
                        @foreach ($layanan->requirements as $req)
                            <li class="flex items-start gap-2 text-sm text-neutral-600 dark:text-neutral-300">
                                <i data-lucide="check-circle" class="mt-0.5 w-4 h-4 text-emerald-600 dark:text-emerald-400"></i>
                                {{ $req }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($layanan->procedure && count($layanan->procedure) > 0)
                <div class="mt-6 rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h3 class="mb-4 font-bold text-slate-800 dark:text-slate-100">Tata Cara</h3>
                    <ol class="space-y-3">
                        @foreach ($layanan->procedure as $index => $step)
                            <li class="flex items-start gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                                <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">
                                    {{ $index + 1 }}
                                </span>
                                {{ $step }}
                            </li>
                        @endforeach
                    </ol>
                </div>
            @endif

            <div class="mt-8 grid gap-4 sm:grid-cols-3">
                @if ($layanan->duration)
                    <div class="rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-neutral-900">
                        <p class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Durasi</p>
                        <p class="mt-1 text-sm font-medium text-slate-800 dark:text-slate-100">{{ $layanan->duration }}</p>
                    </div>
                @endif
                @if ($layanan->cost)
                    <div class="rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-neutral-900">
                        <p class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Biaya</p>
                        <p class="mt-1 text-sm font-medium text-slate-800 dark:text-slate-100">{{ $layanan->cost }}</p>
                    </div>
                @endif
                @if ($layanan->contact)
                    <div class="rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-neutral-900">
                        <p class="text-xs font-semibold uppercase tracking-wider text-neutral-400">Kontak</p>
                        <p class="mt-1 text-sm font-medium text-slate-800 dark:text-slate-100">{{ $layanan->contact }}</p>
                    </div>
                @endif
            </div>

            @if ($layanan->url)
                <div class="mt-8">
                    <a href="{{ $layanan->url }}" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:-translate-y-0.5 hover:bg-emerald-700 hover:shadow-md dark:bg-emerald-500 dark:hover:bg-emerald-600">
                        Kunjungi Halaman Layanan
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>
            @endif
        </div>

        {{-- RELATED --}}
        @if ($related->count() > 0)
            <div class="mt-16">
                <x-section-header label="Terkait" title="Layanan Lainnya" />
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($related as $item)
                        @php
                            $icon = $item->icon ?: 'briefcase';
                            $colorMap = ['emerald','rose','sky','violet','amber','teal'];
                            $color = $colorMap[$loop->index % count($colorMap)];
                        @endphp
                        <div x-data x-intersect.once="$el.classList.add('reveal-visible')" class="reveal" style="transition-delay: {{ $loop->index * 80 }}ms">
                            <x-service-card
                                :title="$item->title"
                                :excerpt="$item->short_description"
                                :image="$item->image"
                                :icon="$icon"
                                :url="route('layanan.show', $item->slug)"
                                :color="$color"
                            />
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
