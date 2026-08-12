@extends('layouts.app')

@section('title', $fitur->title . ' - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">

    {{-- HERO --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28">
            <div class="mx-auto max-w-3xl fade-in">
                <a href="{{ route('fitur') }}" class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-neutral-500 hover:text-emerald-600 dark:text-neutral-400 dark:hover:text-emerald-400">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Kembali ke Fitur
                </a>

                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    {{ $fitur->title }}
                </h1>

                @if ($fitur->short_description)
                    <p class="text-lg leading-relaxed text-neutral-600 dark:text-neutral-300">
                        {{ $fitur->short_description }}
                    </p>
                @endif
            </div>
        </div>
    </div>

    {{-- DETAIL --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        <div class="mx-auto max-w-3xl">
            @if ($fitur->image)
                <div class="mb-8 overflow-hidden rounded-2xl border border-neutral-200 dark:border-neutral-700">
                    <img src="{{ asset('storage/' . $fitur->image) }}" alt="{{ $fitur->title }}" class="w-full object-cover" />
                </div>
            @endif

            <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300">
                {!! nl2br(e($fitur->description)) !!}
            </div>

            @if ($fitur->url)
                <div class="mt-8">
                    <a href="{{ $fitur->url }}" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:-translate-y-0.5 hover:bg-emerald-700 hover:shadow-md dark:bg-emerald-500 dark:hover:bg-emerald-600">
                        Kunjungi Halaman
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
