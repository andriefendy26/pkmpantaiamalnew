@extends('layouts.app')

@section('title', 'Klaster 3 - Usia Dewasa dan Lanjut Usia - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Pelayanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Klaster 3 — Usia Dewasa dan Lanjut Usia
                </h1>
                <p class="max-w-3xl text-neutral-600 dark:text-neutral-400">
                    Klaster 3 adalah klaster yang fokus pada pelayanan kesehatan usia dewasa dan lanjut usia. Pelayanan ini mencakup skrining penyakit, konsultasi, dan perawatan untuk masalah kesehatan seperti penyakit tidak menular (PTM) — seperti hipertensi, diabetes, dan obesitas — serta masalah kesehatan jiwa.
                </p>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24 space-y-16">

        {{-- ── Sasaran ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Sasaran</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="activity" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Usia Dewasa</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">18 - 59 tahun.</p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 75ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="users" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Lanjut Usia (Lansia)</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">Usia 60 tahun ke atas.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── Pelayanan ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Pelayanan</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">1. Skrining</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Petugas melakukan skrining awal untuk mendeteksi risiko penyakit tertentu, seperti obesitas, hipertensi, diabetes, dan lain-lain.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 50ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="message-circle-heart" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">2. Konsultasi</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Pasien dapat berkonsultasi dengan petugas klaster 3 mengenai masalah kesehatan mereka, termasuk masalah kesehatan jiwa.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 100ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="stethoscope" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">3. Pemeriksaan</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Petugas melakukan pemeriksaan fisik, anamnesis, pengukuran tekanan darah, dan lain-lain sesuai kebutuhan.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="shield-check" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">4. Tata Laksana</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Petugas melakukan tata laksana terhadap hasil skrining dan masalah kesehatan lainnya secara komprehensif, termasuk promotif, preventif, kuratif, dan rehabilitatif.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40 sm:col-span-2"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 200ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="arrow-right-circle" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">5. Rujukan</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Jika pasien membutuhkan pelayanan lebih lanjut, seperti rawat inap atau konsultasi dengan spesialis, petugas akan merujuk pasien ke fasilitas kesehatan yang sesuai.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── Tujuan ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-4 text-2xl font-bold text-slate-800 dark:text-white">Tujuan</h2>
            <p class="text-sm text-neutral-600 dark:text-neutral-400">
                Klaster 3 bertujuan untuk memberikan pelayanan kesehatan yang komprehensif dan sesuai dengan kebutuhan individu, serta mencegah dan mengatasi masalah kesehatan yang mungkin timbul.
            </p>
        </div>

        {{-- ── Pembagian Klaster ───────────────────────────────── --}}
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-4 text-2xl font-bold text-slate-800 dark:text-white">Pembagian Klaster</h2>
            <p class="text-sm text-neutral-600 dark:text-neutral-400">
                Pembagian klaster di puskesmas umumnya meliputi klaster manajemen, klaster ibu dan anak, klaster kesehatan usia dewasa dan lanjut usia (klaster 3), klaster penanggulangan penyakit menular, dan lintas klaster.
            </p>
        </div>
    </div>
</div>
@endsection