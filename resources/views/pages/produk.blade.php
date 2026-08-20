@extends('layouts.app')

@section('title', 'Produk Layanan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Layanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Produk Layanan
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Berikut adalah produk layanan yang disediakan oleh UPTD Puskesmas Pantai Amal untuk memenuhi kebutuhan kesehatan masyarakat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-5xl">
            <div class="mb-6 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <h2 class="text-2xl font-bold text-slate-800 dark:text-white">Daftar Produk Layanan</h2>
            <form method="GET" action="{{ route('produk') }}" class="flex items-center gap-2">
                <div class="relative">
                    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari produk layanan..." class="rounded-lg border border-neutral-300 bg-white pl-10 pr-4 py-2 text-sm text-neutral-700 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200 dark:placeholder-neutral-400">
                    <svg class="absolute left-3 top-2.5 h-4 w-4 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                @if($search || $layanan)
                    <a href="{{ route('produk') }}" class="inline-flex items-center rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm font-medium text-neutral-700 hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700">
                        Reset
                    </a>
                @endif
            </form>
            </div>

            @if($layanans->count() > 0)
                <div class="mb-8 flex flex-wrap gap-2">
                    <a href="{{ route('produk') }}" class="inline-flex items-center rounded-full px-4 py-2 text-sm font-medium transition-colors {{ !$layanan ? 'bg-emerald-600 text-white' : 'border border-neutral-300 bg-white text-neutral-700 hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700' }}">
                        Semua
                    </a>
                    @foreach($layanans as $lay)
                        <a href="{{ route('produk', array_merge(request()->except('layanan'), ['layanan' => $lay])) }}" class="inline-flex items-center rounded-full px-4 py-2 text-sm font-medium transition-colors {{ $layanan == $lay ? 'bg-emerald-600 text-white' : 'border border-neutral-300 bg-white text-neutral-700 hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700' }}">
                            {{ $lay }}
                        </a>
                    @endforeach
                </div>
            @endif

            @if($produks->count() > 0)
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($produks as $produk)
                        <div class="flex flex-col rounded-2xl border border-neutral-200 bg-white shadow-sm transition-all hover:border-emerald-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-900 dark:hover:border-emerald-700">
                            <div class="p-6">
                                <div class="mb-3 flex items-start justify-between gap-2">
                                    <h3 class="text-lg font-bold text-slate-800 dark:text-slate-100">{{ $produk->nama_produk }}</h3>
                                    @if($produk->layanan)
                                        <span class="inline-flex shrink-0 items-center rounded-full bg-emerald-50 px-2.5 py-0.5 text-xs font-medium text-emerald-700 dark:bg-emerald-950 dark:text-emerald-300">
                                            {{ $produk->layanan }}
                                        </span>
                                    @endif
                                </div>
                                
                                @if($produk->detail)
                                    <div class="mb-3 text-sm text-neutral-600 dark:text-neutral-300">
                                        <span class="font-semibold text-slate-700 dark:text-slate-200">Sistem, Mekanisme dan Prosedur:</span>
                                        <p class="mt-1 whitespace-pre-line">{{ $produk->detail }}</p>
                                    </div>
                                @endif
                                
                                <div class="space-y-3 text-sm text-neutral-600 dark:text-neutral-300">
                                    <div>
                                        <span class="font-semibold text-slate-700 dark:text-slate-200">Persyaratan:</span>
                                        <p class="mt-1 whitespace-pre-line">{{ $produk->persyaratan ?: '-' }}</p>
                                    </div>
                                    
                                    <div>
                                        <span class="font-semibold text-slate-700 dark:text-slate-200">Waktu Penyelesaian:</span>
                                        <p class="mt-1 whitespace-pre-line">{{ $produk->waktu_penyelesaian ?: '-' }}</p>
                                    </div>
                                    
                                    <div>
                                        <span class="font-semibold text-slate-700 dark:text-slate-200">Biaya / Tarif:</span>
                                        <p class="mt-1 font-semibold text-emerald-700 dark:text-emerald-300">{{ $produk->biaya_tarif ?: '-' }}</p>
                                    </div>
                                </div>
                                
                                <div class="mt-4 pt-4 border-t border-neutral-200 dark:border-neutral-700">
                                    <a href="{{ route('produk.detail', $produk->id) }}" class="inline-flex items-center justify-center w-full rounded-lg bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-emerald-700 hover:shadow-md">
                                        Lihat Detail
                                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="rounded-xl border border-neutral-200 bg-neutral-50 p-8 text-center dark:border-neutral-700 dark:bg-neutral-900">
                    <p class="text-neutral-500 dark:text-neutral-400">Belum ada produk layanan yang tersedia.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
