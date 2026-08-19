@extends('layouts.app')

@section('title', 'Hak dan Kewajiban Pasien - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Profil
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Hak dan Kewajiban Pasien
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Berdasarkan Undang-Undang Nomor 17 Tahun 2023 tentang Kesehatan, hak pasien diatur dalam Pasal 276 dan kewajiban pasien diatur dalam Pasal 277. Ketentuan ini mencakup hak atas informasi kesehatan, pelayanan medis yang bermutu, serta kewajiban memberikan informasi jujur dan menaati aturan fasilitas kesehatan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl grid gap-8 md:grid-cols-2">
            <div class="rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-teal-50 p-8 dark:border-emerald-800 dark:from-emerald-950/40 dark:to-teal-950/30">
                <h2 class="mb-4 text-xl font-bold text-slate-800 dark:text-slate-100">Hak Pasien <span class="text-sm font-normal text-neutral-500">(Pasal 276)</span></h2>
                <ul class="space-y-3 text-neutral-700 dark:text-neutral-300">
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-emerald-600"></span>
                        <span>Mendapat informasi tentang kesehatan diri sendiri.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-emerald-600"></span>
                        <span>Mendapat penjelasan yang cukup tentang pelayanan kesehatan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-emerald-600"></span>
                        <span>Mendapat pelayanan kesehatan sesuai kebutuhan medis dan standar mutu.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-emerald-600"></span>
                        <span>Menyetujui atau menolak tindakan medis (kecuali untuk pencegahan penyakit menular atau wabah/KLB).</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-emerald-600"></span>
                        <span>Mengakses isi rekam medis.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-emerald-600"></span>
                        <span>Meminta pendapat tenaga medis atau kesehatan lain.</span>
                    </li>
                </ul>
            </div>

            <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-8 dark:border-neutral-700 dark:bg-neutral-900">
                <h2 class="mb-4 text-xl font-bold text-slate-800 dark:text-slate-100">Kewajiban Pasien <span class="text-sm font-normal text-neutral-500">(Pasal 277)</span></h2>
                <ul class="space-y-3 text-neutral-700 dark:text-neutral-300">
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-neutral-400"></span>
                        <span>Memberikan informasi yang lengkap dan jujur tentang kondisi kesehatan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-neutral-400"></span>
                        <span>Mematuhi nasihat dan petunjuk tenaga medis atau kesehatan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-neutral-400"></span>
                        <span>Mentaati aturan di fasilitas pelayanan kesehatan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 inline-flex h-2 w-2 shrink-0 rounded-full bg-neutral-400"></span>
                        <span>Memberikan imbalan jasa atas pelayanan yang diterima.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
