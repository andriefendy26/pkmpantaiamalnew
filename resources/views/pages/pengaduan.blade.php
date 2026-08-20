@extends('layouts.app')

@section('title', 'Pengaduan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">

    {{-- HERO --}}
    <div class="relative overflow-hidden border-b border-neutral-100 dark:border-neutral-800 bg-gradient-to-br from-emerald-50 via-white to-teal-50 dark:from-neutral-900 dark:via-neutral-950 dark:to-emerald-950/20">
        <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-emerald-100/60 dark:bg-emerald-900/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-16 -left-16 h-56 w-56 rounded-full bg-teal-100/50 dark:bg-teal-900/20 blur-2xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 md:py-28 fade-in">
            <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/60 dark:text-emerald-300">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                UPTD Puskesmas Pantai Amal
            </span>
            <h1 class="edu-vic-wa-nt-hand mb-4 text-5xl font-bold tracking-tight text-slate-800 dark:text-white md:text-6xl lg:text-7xl">
                Pengaduan
            </h1>
            <p class="max-w-xl text-base leading-relaxed text-neutral-500 dark:text-neutral-400 md:text-lg">
                Sampaikan pengaduan, saran, atau keluhan Anda secara anonim atau terbuka. Kami akan menindaklanjuti dengan profesional.
            </p>
        </div>
    </div>

    {{-- ALUR PENGADUAN --}}
    <div class="mx-auto max-w-7xl px-6 py-14">
        <div class="mx-auto max-w-4xl">
            <h2 class="mb-2 text-2xl font-bold text-slate-800 dark:text-white">Alur Pengaduan</h2>
            <p class="mb-8 text-sm text-neutral-500 dark:text-neutral-400">
                Berikut tahapan yang akan dilalui setelah Anda mengirimkan pengaduan.
            </p>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="reveal relative rounded-2xl border border-emerald-100 bg-emerald-50/40 p-5 dark:border-emerald-900/60 dark:bg-emerald-950/20"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <span class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-sm font-bold text-white">1</span>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Isi Formulir</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Lengkapi formulir di bawah dengan kategori dan isi pengaduan Anda.
                    </p>
                </div>

                <div class="reveal relative rounded-2xl border border-emerald-100 bg-emerald-50/40 p-5 dark:border-emerald-900/60 dark:bg-emerald-950/20"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 75ms">
                    <span class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-sm font-bold text-white">2</span>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Verifikasi</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Tim kami memeriksa dan mengelompokkan pengaduan sesuai kategori.
                    </p>
                </div>

                <div class="reveal relative rounded-2xl border border-emerald-100 bg-emerald-50/40 p-5 dark:border-emerald-900/60 dark:bg-emerald-950/20"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <span class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-sm font-bold text-white">3</span>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Tindak Lanjut</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Petugas terkait menindaklanjuti sesuai kategori pengaduan.
                    </p>
                </div>

                <div class="reveal relative rounded-2xl border border-emerald-100 bg-emerald-50/40 p-5 dark:border-emerald-900/60 dark:bg-emerald-950/20"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')" style="transition-delay: 225ms">
                    <span class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-sm font-bold text-white">4</span>
                    <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Tanggapan</h3>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Jika Anda mencantumkan email atau No. HP, kami akan menghubungi Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- FORM SECTION --}}
    <div class="mx-auto max-w-7xl px-6 pb-20">
        <div class="mx-auto grid max-w-5xl grid-cols-1 gap-8 lg:grid-cols-3">

            {{-- Sidebar info --}}
            <div class="lg:col-span-1 space-y-4">
                <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-5 dark:border-neutral-800 dark:bg-neutral-900">
                    <div class="mb-2 flex items-center gap-2 text-emerald-700 dark:text-emerald-300">
                        <i data-lucide="shield-check" class="h-4 w-4"></i>
                        <span class="text-sm font-semibold">Kerahasiaan Terjaga</span>
                    </div>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Anda dapat mengirimkan pengaduan secara anonim dengan mengosongkan kolom Nama Pelapor.
                    </p>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-5 dark:border-neutral-800 dark:bg-neutral-900">
                    <div class="mb-2 flex items-center gap-2 text-emerald-700 dark:text-emerald-300">
                        <i data-lucide="clock" class="h-4 w-4"></i>
                        <span class="text-sm font-semibold">Waktu Respon</span>
                    </div>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Pengaduan akan diproses pada hari dan jam kerja Puskesmas.
                    </p>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-5 dark:border-neutral-800 dark:bg-neutral-900">
                    <div class="mb-2 flex items-center gap-2 text-emerald-700 dark:text-emerald-300">
                        <i data-lucide="info" class="h-4 w-4"></i>
                        <span class="text-sm font-semibold">Tips</span>
                    </div>
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        Sertakan email atau No. HP jika Anda ingin menerima tanggapan langsung dari kami.
                    </p>
                </div>
            </div>

            {{-- Form --}}
            <div class="lg:col-span-2">
                @if (session('success'))
                    <div class="mb-6 flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-medium text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/60 dark:text-emerald-300">
                        <i data-lucide="check-circle-2" class="mt-0.5 h-4 w-4 shrink-0"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('pengaduan.store') }}" class="rounded-3xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900 md:p-8">
                    @csrf

                    <div class="grid gap-5">
                        <div>
                            <label for="nama_pelapor" class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-200">Nama Pelapor</label>
                            <input
                                type="text"
                                id="nama_pelapor"
                                name="nama_pelapor"
                                value="{{ old('nama_pelapor') }}"
                                placeholder="Opsional — bisa dikosongkan untuk anonim"
                                class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder:text-neutral-400 transition-colors focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 dark:border-neutral-700 dark:bg-neutral-800 dark:text-slate-100 dark:placeholder:text-neutral-500"
                            />
                            @error('nama_pelapor')
                                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="email" class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-200">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="opsional@pengaduan.com"
                                    class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder:text-neutral-400 transition-colors focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 dark:border-neutral-700 dark:bg-neutral-800 dark:text-slate-100 dark:placeholder:text-neutral-500"
                                />
                                @error('email')
                                    <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="no_hp" class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-200">No. HP</label>
                                <input
                                    type="text"
                                    id="no_hp"
                                    name="no_hp"
                                    value="{{ old('no_hp') }}"
                                    placeholder="08xxxxxxxxxx"
                                    class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder:text-neutral-400 transition-colors focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 dark:border-neutral-700 dark:bg-neutral-800 dark:text-slate-100 dark:placeholder:text-neutral-500"
                                />
                                @error('no_hp')
                                    <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="kategori" class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-200">Kategori</label>
                            <select
                                id="kategori"
                                name="kategori"
                                class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm text-slate-800 transition-colors focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 dark:border-neutral-700 dark:bg-neutral-800 dark:text-slate-100"
                            >
                                <option value="pelayanan" {{ old('kategori') === 'pelayanan' ? 'selected' : '' }}>Pelayanan</option>
                                <option value="fasilitas" {{ old('kategori') === 'fasilitas' ? 'selected' : '' }}>Fasilitas</option>
                                <option value="petugas" {{ old('kategori') === 'petugas' ? 'selected' : '' }}>Petugas</option>
                                <option value="lainnya" {{ old('kategori') === 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('kategori')
                                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="isi_pengaduan" class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-200">Isi Pengaduan</label>
                            <textarea
                                id="isi_pengaduan"
                                name="isi_pengaduan"
                                rows="5"
                                placeholder="Tuliskan pengaduan, saran, atau keluhan Anda di sini..."
                                class="w-full rounded-xl border border-neutral-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder:text-neutral-400 transition-colors focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 dark:border-neutral-700 dark:bg-neutral-800 dark:text-slate-100 dark:placeholder:text-neutral-500"
                            >{{ old('isi_pengaduan') }}</textarea>
                            @error('isi_pengaduan')
                                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center rounded-full bg-emerald-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:-translate-y-0.5 hover:bg-emerald-700 sm:w-auto"
                        >
                            Kirim Pengaduan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection