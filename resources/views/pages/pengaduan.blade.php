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

    {{-- FORM SECTION --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        <div class="mx-auto max-w-2xl">
            @if (session('success'))
                <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-medium text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/60 dark:text-emerald-300">
                    {{ session('success') }}
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
@endsection
