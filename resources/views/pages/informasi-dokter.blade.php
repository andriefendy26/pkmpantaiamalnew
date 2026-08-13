@extends('layouts.app')

@section('title', 'Dokter dan Tenaga Kesehatan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Tenaga Medis
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Dokter dan Tenaga Kesehatan
                </h1>
                <p class="mb-8 text-neutral-600 dark:text-neutral-400">Daftar tenaga kesehatan yang bertugas di UPTD Puskesmas Pantai Amal.</p>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @php $dokter = [
                        ['nama' => 'drg. Desianti', 'jabatan' => 'Kepala Puskesmas'],
                        ['nama' => 'dr. Spesialis', 'jabatan' => 'Dokter Spesialis'],
                        ['nama' => 'drg.', 'jabatan' => 'Dokter Gigi'],
                        ['nama' => 'Ners.', 'jabatan' => 'Perawat'],
                        ['nama' => 'Apt.', 'jabatan' => 'Apoteker'],
                    ]; @endphp
                    @foreach ($dokter as $d)
                        <div class="flex items-center gap-4 rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300 font-bold">{{ substr($d['nama'], 0, 1) }}</div>
                            <div>
                                <p class="font-bold text-slate-800 dark:text-slate-100">{{ $d['nama'] }}</p>
                                <p class="text-xs text-neutral-500 dark:text-neutral-400">{{ $d['jabatan'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
