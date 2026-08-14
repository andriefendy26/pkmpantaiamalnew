@extends('layouts.app')

@section('title', 'PPID - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Layanan Lainnya
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    PPID
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Pejabat Pengelola Informasi dan Dokumentasi (PPID) Puskesmas Pantai Amal berfungsi untuk mengelola dan mengembangkan sistem dokumentasi dan informasi puskesmas.</p>
                    <p>Melalui PPID, masyarakat berhak memperoleh informasi publik yang disediakan secara cepat, tepat waktu, dan mudah diakses.</p>
                    <div class="mt-6 grid gap-4 md:grid-cols-2">
                        <div class="rounded-lg border border-neutral-200 bg-white p-4 dark:border-neutral-800 dark:bg-neutral-900">
                            <h3 class="font-semibold text-slate-800 dark:text-white">Informasi yang Disediakan</h3>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-neutral-600 dark:text-neutral-400">
                                <li>Dokumen pelayanan publik</li>
                                <li>Laporan keuangan dan kinerja</li>
                                <li>Program dan kegiatan puskesmas</li>
                            </ul>
                        </div>
                        <div class="rounded-lg border border-neutral-200 bg-white p-4 dark:border-neutral-800 dark:bg-neutral-900">
                            <h3 class="font-semibold text-slate-800 dark:text-white">Cara Permohonan Informasi</h3>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-neutral-600 dark:text-neutral-400">
                                <li>Datang langsung ke PPID Puskesmas</li>
                                <li>Kirim permohonan melalui surat</li>
                                <li>Ajukan permohonan melalui media daring</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
