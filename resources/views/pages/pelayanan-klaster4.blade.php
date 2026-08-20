@extends('layouts.app')

@section('title', 'Klaster 4 - Penanggulangan Penyakit Menular - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Pelayanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Klaster 4 — Penanggulangan Penyakit Menular
                </h1>
                <p class="max-w-3xl text-neutral-600 dark:text-neutral-400">
                    Klaster 4 adalah klaster dalam konteks Integrasi Layanan Primer (ILP) yang fokus pada penanggulangan penyakit menular, termasuk surveilans, pencegahan, kewaspadaan dini, dan respon terhadap kejadian penyakit menular. Klaster ini juga mencakup pengawasan kualitas lingkungan.
                </p>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Elaborasi</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="shield" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Penanggulangan Penyakit Menular</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Klaster 4 memiliki peran penting dalam melindungi masyarakat dari penularan penyakit, menurunkan angka kesakitan, kecacatan, dan kematian akibat penyakit menular, serta mengurangi dampak sosial, ekonomi, dan budaya yang terkait.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 50ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Surveilans</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Pemantauan dan analisis data penyakit menular, termasuk pemantauan morbiditas dan mortalitas, serta cakupan pelayanan di wilayah kerja Puskesmas, merupakan bagian integral dari klaster ini.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 100ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="alert-triangle" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Pencegahan dan Kewaspadaan Dini</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Klaster 4 berperan dalam melakukan tindakan pencegahan dini terhadap penyakit menular, termasuk skrining dan imunisasi.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="siren" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Respon Terhadap Kejadian Penyakit Menular</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Klaster 4 bertanggung jawab untuk merespons kejadian penyakit menular, termasuk investigasi kasus, pelacakan kontak, pengendalian vektor, dan Outbreak Response Immunization (ORI).
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 200ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="leaf" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Pengawasan Kualitas Lingkungan</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Klaster 4 juga melibatkan pengawasan kualitas lingkungan untuk mencegah penularan penyakit menular, termasuk inspeksi kesehatan lingkungan dan intervensi lingkungan.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 250ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="network" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Lintas Klaster</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Klaster 4 juga berkoordinasi dengan klaster lain, seperti klaster Ibu dan Anak (klaster 2) dan klaster Usia Dewasa dan Lansia (klaster 3), untuk memastikan pelayanan yang terintegrasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection