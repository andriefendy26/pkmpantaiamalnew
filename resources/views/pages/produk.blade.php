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
            @if($produks->count() > 0)
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($produks as $produk)
                        <div class="flex flex-col rounded-2xl border border-neutral-200 bg-white shadow-sm transition-all hover:border-emerald-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-900 dark:hover:border-emerald-700">
                            <div class="p-6">
                                <h3 class="mb-3 text-lg font-bold text-slate-800 dark:text-slate-100">{{ $produk->nama_produk }}</h3>
                                
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
