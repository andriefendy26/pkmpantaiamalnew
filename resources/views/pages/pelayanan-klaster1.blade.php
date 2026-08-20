@extends('layouts.app')

@section('title', 'Klaster 1 - Manajemen - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Pelayanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Klaster 1 — Manajemen
                </h1>
                <div class="max-w-3xl space-y-4 text-neutral-600 dark:text-neutral-400">
                    <p>
                        Klaster 1 Manajemen Puskesmas merupakan fondasi utama dalam penyelenggaraan Integrasi Layanan Primer (ILP) di Puskesmas Pantai Amal. Klaster ini berperan dalam memastikan seluruh pelayanan kesehatan primer berjalan secara efektif, terintegrasi, berkualitas, dan berkesinambungan melalui tata kelola yang baik. Dalam implementasi ILP, Klaster 1 bertanggung jawab terhadap perencanaan, pengorganisasian, pelaksanaan, pemantauan, dan evaluasi pelayanan kesehatan, sehingga setiap program dan layanan dapat menjangkau masyarakat secara optimal di setiap siklus kehidupan.
                    </p>
                    <p>
                        Pada Integrasi Layanan Primer (ILP), Klaster 1 merupakan Klaster Manajemen Puskesmas yang berfungsi mendukung seluruh penyelenggaraan pelayanan kesehatan. Berbeda dengan klaster lain yang memberikan pelayanan langsung kepada pasien, Klaster 1 lebih berfokus pada tata kelola, mutu, dan manajemen pelayanan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- ── Daftar Layanan ───────────────────────────────── --}}
    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">
                Pelayanan yang termasuk dalam Klaster 1 Puskesmas meliputi:
            </h2>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="clipboard-list" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">1. Manajemen Inti Puskesmas</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 50ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="archive" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">2. Manajemen Arsip</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 100ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="users" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">3. Manajemen Sumber Daya Manusia</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="warehouse" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">4. Manajemen Sarana, Prasarana, dan Perbekalan Kesehatan</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 200ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="shield-check" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">5. Manajemen Mutu Pelayanan</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Meliputi PPI, Manajemen Risiko, MFK, Manajemen K3, Audit Internal, dan Keselamatan Pasien.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 250ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="wallet" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">6. Manajemen Keuangan dan Aset atau Barang Milik Daerah</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 300ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="database" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">7. Manajemen Sistem Informasi Digital</h3>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 350ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="network" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">8. Manajemen Jejaring</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">
                            Meliputi jejaring berbasis wilayah administratif, Kesehatan Tradisional, Kesehatan Olahraga, jejaring berbasis satuan pendidikan, jejaring berbasis tempat kerja, jejaring rujukan, dan jejaring lintas sektor.
                        </p>
                    </div>
                </div>

                <div class="reveal group flex items-start gap-4 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 transition-colors hover:bg-emerald-50 dark:border-emerald-900/60 dark:bg-emerald-950/20 dark:hover:bg-emerald-950/40 sm:col-span-2"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 400ms">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">
                        <i data-lucide="megaphone" class="w-5 h-5"></i>
                    </span>
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">9. Manajemen Pemberdayaan Masyarakat dan Implementasi Kawasan Tanpa Rokok (KTR)</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection