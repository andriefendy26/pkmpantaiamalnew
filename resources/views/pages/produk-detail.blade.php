@extends('layouts.app')

@section('title', $produk->nama_produk . ' - Produk Layanan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Layanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    {{ $produk->nama_produk }}
                </h1>
                
                <div class="flex items-center gap-3 mb-6">
                    @if($produk->layanan)
                        <span class="inline-flex items-center rounded-full bg-emerald-50 px-3 py-1 text-sm font-medium text-emerald-700 dark:bg-emerald-950 dark:text-emerald-300">
                            {{ $produk->layanan }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl">
            <div class="rounded-2xl border border-neutral-200 bg-white p-8 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                <div class="space-y-8">
                    @if($produk->detail)
                        <div>
                            <h2 class="mb-3 text-xl font-bold text-slate-800 dark:text-slate-100">Sistem, Mekanisme dan Prosedur</h2>
                            <div class="text-base leading-relaxed text-neutral-700 dark:text-neutral-300 whitespace-pre-line">
                                {{ $produk->detail }}
                            </div>
                        </div>
                        <hr class="border-neutral-200 dark:border-neutral-700">
                    @endif

                    <div class="grid gap-8 md:grid-cols-2">
                        <div>
                            <h2 class="mb-3 text-xl font-bold text-slate-800 dark:text-slate-100">Persyaratan</h2>
                            <div class="text-base leading-relaxed text-neutral-700 dark:text-neutral-300 whitespace-pre-line">
                                {{ $produk->persyaratan ?: '-' }}
                            </div>
                        </div>
                        
                        <div>
                            <h2 class="mb-3 text-xl font-bold text-slate-800 dark:text-slate-100">Waktu Penyelesaian</h2>
                            <div class="text-base leading-relaxed text-neutral-700 dark:text-neutral-300 whitespace-pre-line">
                                {{ $produk->waktu_penyelesaian ?: '-' }}
                            </div>
                        </div>
                    </div>

                    <hr class="border-neutral-200 dark:border-neutral-700">

                    <div>
                        <h2 class="mb-3 text-xl font-bold text-slate-800 dark:text-slate-100">Biaya / Tarif</h2>
                        <div class="text-2xl font-bold text-emerald-700 dark:text-emerald-300">
                            {{ $produk->biaya_tarif ?: '-' }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <a href="{{ route('produk') }}" class="inline-flex items-center justify-center rounded-lg border border-neutral-300 bg-white px-6 py-3 text-sm font-medium text-neutral-700 hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700">
                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Daftar Produk
                </a>
                <a href="https://wa.me/6285179663858" target="_blank" rel="noopener" class="inline-flex items-center justify-center rounded-lg bg-emerald-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:bg-emerald-700 hover:shadow-md">
                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
