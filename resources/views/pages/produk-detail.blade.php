@extends('layouts.app')

@section('title', ($produk['detail']['produk_layanan']['nama'] ?? 'Produk') . ' - Produk Layanan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <a href="{{ route('produk') }}" class="mb-4 inline-flex items-center gap-1.5 text-sm font-medium text-neutral-500 transition-colors hover:text-emerald-600 dark:text-neutral-400 dark:hover:text-emerald-400">
                    <i data-lucide="arrow-left" class="h-4 w-4"></i>
                    Daftar Produk Layanan
                </a>

                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Layanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-4 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    {{ $produk['detail']['produk_layanan']['nama'] ?? ($produk['detail']['judul'] ?? 'Produk Layanan') }}
                </h1>

                @if($produk['detail']['judul'])
                    <span class="inline-flex items-center rounded-full bg-emerald-50 px-3 py-1 text-sm font-medium text-emerald-700 dark:bg-emerald-950 dark:text-emerald-300">
                        {{ $produk['detail']['judul'] }}
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl">

            {{-- ── Biaya & Waktu — quick-glance summary ───────────────────────────────── --}}
            <div class="mb-6 grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
                    <div class="mb-2 flex items-center gap-2 text-neutral-400 dark:text-neutral-500">
                        <i data-lucide="wallet" class="h-4 w-4"></i>
                        <span class="text-xs font-semibold uppercase tracking-wider">Biaya / Tarif</span>
                    </div>
                    <div class="text-2xl font-bold text-emerald-700 dark:text-emerald-400">
                        @if(!empty($produk['detail']['biaya']['total']))
                            Rp {{ number_format((int) $produk['detail']['biaya']['total'], 0, ',', '.') }}
                        @else
                            -
                        @endif
                    </div>
                    @if(!empty($produk['detail']['biaya']['deskripsi']))
                        <p class="mt-1.5 text-sm text-neutral-500 dark:text-neutral-400">{{ $produk['detail']['biaya']['deskripsi'] }}</p>
                    @endif
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
                    <div class="mb-2 flex items-center gap-2 text-neutral-400 dark:text-neutral-500">
                        <i data-lucide="clock" class="h-4 w-4"></i>
                        <span class="text-xs font-semibold uppercase tracking-wider">Waktu Penyelesaian</span>
                    </div>
                    <div class="text-2xl font-bold text-slate-800 dark:text-slate-100">
                        @if(!empty($produk['detail']['waktu']['waktu']))
                            {{ $produk['detail']['waktu']['waktu'] }} <span class="text-base font-medium text-neutral-500 dark:text-neutral-400">{{ $produk['detail']['waktu']['satuan'] }}</span>
                        @else
                            -
                        @endif
                    </div>
                    @if(!empty($produk['detail']['waktu']['deskripsi']))
                        <p class="mt-1.5 text-sm text-neutral-500 dark:text-neutral-400">{{ $produk['detail']['waktu']['deskripsi'] }}</p>
                    @endif
                </div>
            </div>

            {{-- ── Bagan Prosedur ───────────────────────────────── --}}
            @if(!empty($produk['detail']['bagan_prosedur']))
                <div class="mb-6 rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
                    <h2 class="mb-4 flex items-center gap-2 text-lg font-bold text-slate-800 dark:text-slate-100">
                        <i data-lucide="git-branch" class="h-5 w-5 text-emerald-600 dark:text-emerald-400"></i>
                        Bagan Prosedur
                    </h2>
                    <img src="{{ $produk['detail']['bagan_prosedur'] }}" alt="Bagan Prosedur" class="w-full max-w-md rounded-xl border border-neutral-100 object-cover dark:border-neutral-800">
                </div>
            @endif

            {{-- ── Persyaratan ───────────────────────────────── --}}
            @if(!empty($produk['persyaratan']) && count($produk['persyaratan']) > 0)
                <div class="mb-6 rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
                    <h2 class="mb-4 flex items-center gap-2 text-lg font-bold text-slate-800 dark:text-slate-100">
                        <i data-lucide="clipboard-check" class="h-5 w-5 text-emerald-600 dark:text-emerald-400"></i>
                        Persyaratan
                    </h2>
                    <ul class="space-y-3">
                        @foreach($produk['persyaratan'] as $persyaratan)
                            <li class="flex gap-3 text-sm text-neutral-700 dark:text-neutral-300">
                                <i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-500"></i>
                                <span>{{ $persyaratan }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- ── Prosedur ───────────────────────────────── --}}
            @if(!empty($produk['prosedur']) && count($produk['prosedur']) > 0)
                <div class="mb-6 rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-800 dark:bg-neutral-900">
                    <h2 class="mb-4 flex items-center gap-2 text-lg font-bold text-slate-800 dark:text-slate-100">
                        <i data-lucide="list-ordered" class="h-5 w-5 text-emerald-600 dark:text-emerald-400"></i>
                        Prosedur
                    </h2>
                    <ol class="space-y-4">
                        @foreach($produk['prosedur'] as $i => $prosedur)
                            <li class="flex gap-3">
                                <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-xs font-semibold text-white">{{ $i + 1 }}</span>
                                <p class="pt-0.5 text-sm text-neutral-700 dark:text-neutral-300">{{ $prosedur }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>
            @endif

            {{-- ── Actions ───────────────────────────────── --}}
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('produk') }}" class="inline-flex items-center justify-center gap-2 rounded-xl border border-neutral-300 bg-white px-6 py-3 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700">
                    <i data-lucide="arrow-left" class="h-4 w-4"></i>
                    Kembali ke Daftar Produk
                </a>
                <a href="https://wa.me/6285179663858" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 rounded-xl bg-emerald-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:-translate-y-0.5 hover:bg-emerald-700 hover:shadow-md">
                    <i data-lucide="message-circle" class="h-4 w-4"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>
@endsection