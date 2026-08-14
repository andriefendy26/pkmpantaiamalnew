@extends('layouts.app')

@section('title', 'FAQ - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Informasi
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Frequently Asked Questions
                </h1>
                <p class="content-body mb-8 text-base leading-relaxed text-neutral-700 dark:text-neutral-300">
                    Berikut adalah beberapa pertanyaan yang sering diajukan oleh masyarakat seputar pelayanan di UPTD Puskesmas Pantai Amal.
                </p>
                <div class="space-y-4">
                    <div class="rounded-lg border border-neutral-200 bg-white p-4 dark:border-neutral-800 dark:bg-neutral-900">
                        <h3 class="font-semibold text-slate-800 dark:text-white">Jam buka pelayanan Puskesmas Pantai Amal?</h3>
                        <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">Puskesmas buka setiap hari Senin sampai Jumat pukul 08:00 - 14:00 WIB. Untuk pelayanan khusus, harap hubungi kami terlebih dahulu.</p>
                    </div>
                    <div class="rounded-lg border border-neutral-200 bg-white p-4 dark:border-neutral-800 dark:bg-neutral-900">
                        <h3 class="font-semibold text-slate-800 dark:text-white">Bagaimana cara mendaftar antrian online?</h3>
                        <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">Anda dapat mendaftar antrian melalui aplikasi Portal Sistem Informasi yang tersedia di website ini, atau datang langsung ke loket pendaftaran.</p>
                    </div>
                    <div class="rounded-lg border border-neutral-200 bg-white p-4 dark:border-neutral-800 dark:bg-neutral-900">
                        <h3 class="font-semibold text-slate-800 dark:text-white">Apakah layanan BPJS tersedia?</h3>
                        <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">Ya, Puskesmas Pantai Amal menerima peserta BPJS Kesehatan dan Jaminan Kesehatan Nasional lainnya.</p>
                    </div>
                    <div class="rounded-lg border border-neutral-200 bg-white p-4 dark:border-neutral-800 dark:bg-neutral-900">
                        <h3 class="font-semibold text-slate-800 dark:text-white">Bagaimana cara mengajukan pengaduan?</h3>
                        <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">Pengaduan dapat diajukan melalui menu Pengaduan di website ini, langsung ke kantor PPID, atau melalui kontak telepon yang tersedia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
