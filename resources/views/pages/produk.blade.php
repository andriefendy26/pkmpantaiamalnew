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
        <div class="mx-auto max-w-6xl">

            {{-- ── Toolbar: title + search ───────────────────────────────── --}}
            <div class="mb-6 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-slate-800 dark:text-white">Daftar Produk Layanan</h2>
                    <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">
                        {{ $produks->total() ?? $produks->count() }} layanan tersedia
                    </p>
                </div>
                <form method="GET" action="{{ route('produk') }}" class="flex items-center gap-2">
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari produk layanan..." class="w-56 rounded-full border border-neutral-300 bg-white py-2.5 pl-10 pr-4 text-sm text-neutral-700 transition-colors focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200 dark:placeholder-neutral-500 sm:w-72">
                    </div>
                    @if($search || $layanan)
                        <a href="{{ route('produk') }}" class="inline-flex items-center gap-1.5 rounded-full border border-neutral-300 bg-white px-4 py-2.5 text-sm font-medium text-neutral-600 transition-colors hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700">
                            <i data-lucide="x" class="h-3.5 w-3.5"></i>
                            Reset
                        </a>
                    @endif
                </form>
            </div>

            {{-- ── Category filter pills ───────────────────────────────── --}}
            @if($layanans->count() > 0)
                <div class="mb-8 flex flex-wrap gap-2">
                    <a href="{{ route('produk') }}" class="inline-flex items-center rounded-full px-4 py-2 text-sm font-medium transition-colors {{ !$layanan ? 'bg-emerald-600 text-white shadow-sm ring-2 ring-emerald-600 ring-offset-2 dark:ring-offset-neutral-950' : 'border border-neutral-300 bg-white text-neutral-600 hover:border-emerald-300 hover:text-emerald-700 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:border-emerald-700' }}">
                        Semua
                    </a>
                    @foreach($layanans as $lay)
                        <a href="{{ route('produk', array_merge(request()->except('layanan'), ['layanan' => $lay])) }}" class="inline-flex items-center rounded-full px-4 py-2 text-sm font-medium transition-colors {{ $layanan == $lay ? 'bg-emerald-600 text-white shadow-sm ring-2 ring-emerald-600 ring-offset-2 dark:ring-offset-neutral-950' : 'border border-neutral-300 bg-white text-neutral-600 hover:border-emerald-300 hover:text-emerald-700 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:border-emerald-700' }}">
                            {{ $lay }}
                        </a>
                    @endforeach
                </div>
            @endif

            {{-- ── Cards ───────────────────────────────── --}}
            @if($produks->count() > 0)
                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach($produks as $produk)
                        <a href="{{ route('produk.detail', $produk['id_produk_layanan']) }}" class="group flex flex-col overflow-hidden rounded-xl border border-neutral-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-lg dark:border-neutral-800 dark:bg-neutral-900 dark:hover:border-emerald-700">

                            {{-- Square thumbnail, logo never cropped --}}
                            <div class="relative aspect-square w-full overflow-hidden bg-neutral-50 dark:bg-neutral-800">
                                @if(!empty($produk['logo']))
                                    <div class="flex h-full w-full items-center justify-center p-4">
                                        <img src="{{ $produk['logo'] }}" alt="{{ $produk['nama_layanan'] }}" class="h-full w-full object-contain transition-transform duration-500 group-hover:scale-105">
                                    </div>
                                @else
                                    <div class="flex h-full w-full items-center justify-center">
                                        <i data-lucide="clipboard-heart" class="h-7 w-7 text-neutral-300 dark:text-neutral-700"></i>
                                    </div>
                                @endif

                                @if($produk['judul_layanan'])
                                    <span class="absolute left-2 top-2 inline-flex items-center rounded-full bg-white/90 px-2 py-0.5 text-[11px] font-medium text-emerald-700 shadow-sm backdrop-blur-sm dark:bg-neutral-900/90 dark:text-emerald-300">
                                        {{ $produk['judul_layanan'] }}
                                    </span>
                                @endif
                            </div>

                            {{-- Body --}}
                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="mb-2 flex-1 text-sm font-bold leading-snug text-slate-800 transition-colors group-hover:text-emerald-600 dark:text-slate-100 dark:group-hover:text-emerald-400">
                                    {{ $produk['nama_layanan'] }}
                                </h3>

                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600 dark:text-emerald-400">
                                    Lihat Detail
                                    <i data-lucide="arrow-right" class="h-3.5 w-3.5 transition-transform group-hover:translate-x-1"></i>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="mt-10">
                    {{ $produks->links() }}
                </div>
            @else
                <div class="rounded-2xl border border-dashed border-neutral-300 bg-neutral-50 p-12 text-center dark:border-neutral-700 dark:bg-neutral-900">
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-neutral-100 dark:bg-neutral-800">
                        <i data-lucide="search-x" class="h-5 w-5 text-neutral-400"></i>
                    </div>
                    <p class="font-medium text-neutral-600 dark:text-neutral-300">
                        @if($search || $layanan)
                            Tidak ada produk layanan yang cocok dengan pencarian Anda.
                        @else
                            Belum ada produk layanan yang tersedia.
                        @endif
                    </p>
                    @if($search || $layanan)
                        <a href="{{ route('produk') }}" class="mt-3 inline-flex items-center text-sm font-semibold text-emerald-600 hover:text-emerald-700 dark:text-emerald-400">
                            Reset pencarian
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
@endsection