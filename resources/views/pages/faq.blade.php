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

                @php
                    $faqs = [
                        [
                            'q' => 'Jam buka pelayanan Puskesmas Pantai Amal?',
                            'a' => 'Puskesmas buka setiap hari Senin sampai Jumat pukul 08:00 - 14:00 WIB. Untuk pelayanan khusus, harap hubungi kami terlebih dahulu.',
                        ],
                        [
                            'q' => 'Bagaimana cara mendaftar antrian online?',
                            'a' => 'Anda dapat mendaftar antrian melalui aplikasi Portal Sistem Informasi yang tersedia di website ini, atau datang langsung ke loket pendaftaran.',
                        ],
                        [
                            'q' => 'Apakah layanan BPJS tersedia?',
                            'a' => 'Ya, Puskesmas Pantai Amal menerima peserta BPJS Kesehatan dan Jaminan Kesehatan Nasional lainnya.',
                        ],
                        [
                            'q' => 'Bagaimana cara mengajukan pengaduan?',
                            'a' => 'Pengaduan dapat diajukan melalui menu Pengaduan di website ini, langsung ke kantor PPID, atau melalui kontak telepon yang tersedia.',
                        ],
                        [
                            'q' => 'Apa saja syarat berobat di Puskesmas?',
                            'a' => 'Bawa kartu identitas (KTP/KK) dan kartu BPJS Kesehatan bagi peserta JKN. Bagi pasien umum, cukup membawa identitas diri.',
                        ],
                        [
                            'q' => 'Apakah Puskesmas melayani rawat inap?',
                            'a' => 'Rawat inap tersedia sesuai kapasitas dan kondisi pasien. Untuk kasus yang memerlukan penanganan lebih lanjut, pasien akan dirujuk ke fasilitas kesehatan yang sesuai.',
                        ],
                        [
                            'q' => 'Bagaimana jadwal dokter dan tenaga kesehatan?',
                            'a' => 'Jadwal praktik dokter dan tenaga kesehatan dapat dilihat pada menu Informasi > Dokter dan Tenaga Kesehatan di website ini.',
                        ],
                        [
                            'q' => 'Apakah ada layanan gawat darurat di luar jam operasional?',
                            'a' => 'Untuk kondisi gawat darurat, silakan hubungi nomor kontak Puskesmas yang tersedia di bagian bawah website, atau kunjungi fasilitas kesehatan terdekat yang memiliki layanan 24 jam.',
                        ],
                    ];
                @endphp

                <div class="space-y-3" x-data="{ activeFaq: null }">
                    @foreach ($faqs as $index => $faq)
                        <div class="reveal rounded-lg border border-neutral-200 bg-white dark:border-neutral-800 dark:bg-neutral-900"
                             x-intersect:enter.once="$el.classList.add('reveal-visible')"
                             style="transition-delay: {{ min($index * 40, 200) }}ms">
                            <button
                                @click="activeFaq = activeFaq === {{ $index }} ? null : {{ $index }}"
                                class="flex w-full items-center justify-between gap-4 p-4 text-left"
                            >
                                <h3 class="font-semibold text-slate-800 dark:text-white">{{ $faq['q'] }}</h3>
                                <i data-lucide="chevron-down"
                                   class="w-4 h-4 shrink-0 text-emerald-600 transition-transform duration-200 dark:text-emerald-400"
                                   :class="activeFaq === {{ $index }} ? 'rotate-180' : ''"></i>
                            </button>
                            <div x-show="activeFaq === {{ $index }}" x-cloak x-collapse>
                                <p class="px-4 pb-4 text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">
                                    {{ $faq['a'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- CTA kalau pertanyaan belum terjawab --}}
                <div class="reveal mt-8 flex flex-col items-start gap-3 rounded-xl border border-emerald-100 bg-emerald-50/40 p-5 dark:border-emerald-900/60 dark:bg-emerald-950/20 sm:flex-row sm:items-center sm:justify-between"
                     x-intersect:enter.once="$el.classList.add('reveal-visible')">
                    <div>
                        <h3 class="mb-1 font-semibold text-slate-800 dark:text-slate-100">Masih ada pertanyaan lain?</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">Sampaikan langsung melalui menu Pengaduan atau hubungi kami.</p>
                    </div>
                    <a href="{{ url('/pengaduan') }}"
                       class="inline-flex shrink-0 items-center gap-2 rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white transition-colors hover:bg-emerald-700">
                        <i data-lucide="message-circle" class="w-4 h-4"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection