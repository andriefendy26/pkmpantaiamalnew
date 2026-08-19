@extends('layouts.app')

@section('title', 'Tentang Puskesmas - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Tentang Kami
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Tentang Puskesmas Pantai Amal
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Puskesmas Pantai Amal terletak di Sei Kayan RT.03 Pantai Amal Lama, kecamatan Tarakan Timur, kota Tarakan Kalimantan Utara. Wilayah puskesmas meliputi 15 rukun tetangga, dimana merupakan daerah pantai dan wilayah budidaya rumput laut. Jarak tempuh dari puskesmas ke desa terjauh sekitar 10 km.</p>
                    <p>Puskesmas Pantai Amal adalah fasilitas kesehatan tingkat pertama (FKTP) yang menyelenggarakan upaya kesehatan masyarakat (UKM) dan upaya kesehatan perorangan (UKP) dengan lebih mengutamakan upaya promotif dan preventif di wilayah kerjanya, untuk mewujudkan masyarakat sehat mandiri di wilayah Puskesmas Pantai Amal. Puskesmas Pantai Amal merupakan puskesmas rawat jalan, memiliki 7 posyandu, 1 posyandu lansia dan 2 unit ambulans.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl grid grid-cols-1 gap-8 md:grid-cols-2">
            <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-4 dark:border-neutral-700 dark:bg-neutral-900">
                <img src="{{ asset('storage/profil/tentang/sertifakred.png') }}" alt="Sertifikat Akreditasi" class="w-full h-auto rounded-xl object-cover">
                <p class="mt-3 text-center text-sm font-medium text-neutral-600 dark:text-neutral-300">Sertifikat Akreditasi</p>
            </div>
            <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-4 dark:border-neutral-700 dark:bg-neutral-900">
                <img src="{{ asset('storage/profil/tentang/amalpeta.png') }}" alt="Wilayah Kerja Puskesmas Pantai Amal" class="w-full h-auto rounded-xl object-cover">
                <p class="mt-3 text-center text-sm font-medium text-neutral-600 dark:text-neutral-300">Wilayah Kerja Puskesmas Pantai Amal</p>
            </div>
        </div>
    </div>
</div>
@endsection
