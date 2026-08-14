@extends('layouts.app')

@section('title', 'Beranda - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">

    {{-- ═══════════════════════════════════════════
         1. HERO TEXT + CAROUSEL
    ═══════════════════════════════════════════ --}}
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">

            {{-- Typography --}}
            <div class="mb-10 text-center fade-in">
                <div class="mx-auto mb-6 flex w-fit items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 dark:border-emerald-800 dark:bg-emerald-950">
                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-xs font-semibold tracking-wider text-emerald-700 dark:text-emerald-300 uppercase">
                        Melayani dengan Sepenuh Hati
                    </span>
                </div>

                @php
                    $judulHero = explode(' ', 'Selamat datang di Website Puskesmas Pantai Amal');
                @endphp
                <h1 class="relative z-10 edu-vic-wa-nt-hand mx-auto max-w-4xl text-center text-2xl font-bold text-slate-700 md:text-4xl lg:text-7xl dark:text-slate-300">
                    @foreach ($judulHero as $index => $word)
                        <span class="mr-2 inline-block word-anim" style="animation-delay: {{ $index * 80 + 200 }}ms">{{ $word }}</span>
                    @endforeach
                </h1>

                <p class="fade-in relative z-10 mx-auto max-w-xl py-4 roboto-mono text-center text-lg font-normal text-neutral-600 dark:text-neutral-300" style="animation-delay: 1100ms; opacity:0; animation-fill-mode:forwards;">
                    Kesehatan Anda adalah tujuan kami, melayani dengan sepenuh hati untuk
                    masyarakat Pantai Amal dan sekitarnya.
                </p>

                <div class="fade-in relative z-10 mt-4 flex flex-wrap items-center justify-center gap-3" style="animation-delay: 1300ms; opacity:0; animation-fill-mode:forwards;">
                    <a href="#layanan"
                       class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-6 py-2.5 text-sm font-semibold text-white shadow-lg shadow-emerald-200 transition-all hover:-translate-y-0.5 hover:bg-emerald-700 hover:shadow-emerald-300 dark:shadow-none">
                        Lihat Layanan
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                    <a href="#kontak"
                       class="inline-flex items-center gap-2 rounded-xl border border-neutral-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition-all hover:-translate-y-0.5 hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            {{-- Carousel --}}
            <div x-data="{
                current: 0,
                slides: [
                    { image: '{{ asset('storage/home/01.jpg') }}' },
                    { image: '{{ asset('storage/home/01.jpg') }}' },
                ],
                timer: null,
                startTimer() {
                    this.timer = setInterval(() => {
                        this.current = (this.current + 1) % this.slides.length;
                    }, 5000);
                },
                stopTimer() {
                    clearInterval(this.timer);
                },
                goTo(index) {
                    this.current = index;
                    this.stopTimer();
                    this.startTimer();
                },
                prev() {
                    this.current = (this.current - 1 + this.slides.length) % this.slides.length;
                    this.stopTimer();
                    this.startTimer();
                },
                next() {
                    this.current = (this.current + 1) % this.slides.length;
                    this.stopTimer();
                    this.startTimer();
                },
                init() {
                    this.startTimer();
                }
            }" @mouseenter="stopTimer()" @mouseleave="startTimer()">
                <div class="relative">
                    <div class="overflow-hidden rounded-3xl border border-neutral-200 bg-neutral-100 dark:border-neutral-800 dark:bg-neutral-900 shadow-2xl">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div x-show="current === index"
                                 x-transition:enter="transition ease-out duration-500"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition ease-in duration-500"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0">

                                <div class="relative w-full overflow-hidden rounded-xl border border-gray-300 dark:border-gray-700">
                                    <img :src="slide.image" alt="Puskesmas Pantai Amal" class="aspect-[16/9] h-auto w-full object-cover" height="1000" width="1000" />
                                </div>
                            </div>
                        </template>
                    </div>

                    {{-- Navigation arrows --}}
                    <button @click="prev()" class="absolute left-4 top-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/80 p-2 shadow-md backdrop-blur-sm transition-all hover:bg-white dark:bg-neutral-900/80 dark:hover:bg-neutral-900">
                        <i data-lucide="chevron-left" class="w-6 h-6 text-slate-800 dark:text-slate-200"></i>
                    </button>
                    <button @click="next()" class="absolute right-4 top-1/2 translate-x-1/2 -translate-y-1/2 rounded-full bg-white/80 p-2 shadow-md backdrop-blur-sm transition-all hover:bg-white dark:bg-neutral-900/80 dark:hover:bg-neutral-900">
                        <i data-lucide="chevron-right" class="w-6 h-6 text-slate-800 dark:text-slate-200"></i>
                    </button>

                    {{-- Dots --}}
                    <div class="absolute bottom-4 left-1/2 flex -translate-x-1/2 gap-2">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="goTo(index)"
                                    :class="current === index ? 'bg-emerald-600 w-6' : 'bg-white/60 w-2 hover:bg-emerald-400'"
                                    class="h-2 rounded-full transition-all duration-300 dark:bg-neutral-700/60"></button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Instagram --}}
    
    <section id="instagram" class="mx-auto max-w-7xl px-4 py-20">
        <div class="mb-12 text-center reveal" x-data x-intersect.once="$el.classList.add('reveal-visible')">
            <span class="mb-3 inline-block rounded-full border border-pink-200 bg-pink-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-pink-700 dark:border-pink-800 dark:bg-pink-950 dark:text-pink-300">
                Instagram
            </span>
            <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-slate-100 md:text-4xl">
                Kabar Terbaru dari Kami
            </h2>
            <p class="mx-auto mt-3 max-w-xl text-sm text-neutral-500 dark:text-neutral-400">
                Ikuti kegiatan dan informasi terbaru Puskesmas Pantai Amal melalui Instagram resmi kami.
            </p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @if ($instagramUrls->count() > 0)
                @foreach ($instagramUrls as $i => $item)
                    <div x-data x-intersect.once="$el.classList.add('reveal-visible')" class="reveal flex justify-center" style="transition-delay: {{ $i * 80 }}ms">
                        <x-instagram-embed :url="$item->url" />
                    </div>
                @endforeach
            @else
                <div class="col-span-full py-16 text-center">
                    <p class="text-sm text-neutral-400">Belum ada postingan Instagram.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
          2. POST TERBARU
    ═══════════════════════════════════════════ --}}
    <section id="post" class="mx-auto max-w-7xl px-4 py-20">
        <div class="mb-12 text-center reveal" x-data x-intersect.once="$el.classList.add('reveal-visible')">
            <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                Artikel & Berita
            </span>
            <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-slate-100 md:text-4xl">
                Post Terbaru
            </h2>
            <p class="mx-auto mt-3 max-w-xl text-sm text-neutral-500 dark:text-neutral-400">
                Informasi dan artikel kesehatan terbaru dari Puskesmas Pantai Amal.
            </p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($latestPosts as $i => $post)
                <div x-data x-intersect.once="$el.classList.add('reveal-visible')" class="reveal" style="transition-delay: {{ $i * 80 }}ms">
                    <x-content-card
                        :title="$post->title"
                        :excerpt="strip_tags($post->content)"
                        :image="$post->image"
                        :url="route('post.show', $post->slug)"
                        :date="$post->publishing_date?->format('d M Y')"
                        :category="$post->postCategory?->name"
                        :author="$post->displayAuthorName()"
                    />
                </div>
            @endforeach
        </div>

        <div class="mt-10 text-center reveal" x-data x-intersect.once="$el.classList.add('reveal-visible')">
            <a href="{{ route('post') }}"
               class="inline-flex items-center gap-2 rounded-xl border border-neutral-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition-all hover:-translate-y-0.5 hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800">
                Lihat Semua Post
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         3. LAYANAN
    ═══════════════════════════════════════════ --}}
    @php
        $layanan = [
            ['icon' => 'stethoscope', 'judul' => 'Pemeriksaan Umum', 'deskripsi' => 'Konsultasi medis, diagnosa, dan pengobatan berbagai keluhan kesehatan umum oleh dokter berpengalaman.', 'warna' => 'emerald'],
            ['icon' => 'heart', 'judul' => 'Kesehatan Ibu & Anak', 'deskripsi' => 'Pemeriksaan kehamilan, persalinan, tumbuh kembang balita, dan layanan KB yang komprehensif.', 'warna' => 'rose'],
            ['icon' => 'baby', 'judul' => 'Imunisasi', 'deskripsi' => 'Vaksinasi lengkap untuk bayi, anak, dan dewasa sesuai jadwal yang direkomendasikan pemerintah.', 'warna' => 'sky'],
            ['icon' => 'flask-conical', 'judul' => 'Laboratorium', 'deskripsi' => 'Pemeriksaan darah, urine, dan sampel klinis lainnya dengan peralatan modern dan akurat.', 'warna' => 'violet'],
            ['icon' => 'pill', 'judul' => 'Apotek', 'deskripsi' => 'Pelayanan obat resep dan obat bebas dengan tenaga apoteker terlatih dan stok obat lengkap.', 'warna' => 'amber'],
            ['icon' => 'syringe', 'judul' => 'Tindakan Medis', 'deskripsi' => 'Penanganan luka, pemasangan infus, injeksi, dan tindakan medis minor lainnya secara profesional.', 'warna' => 'teal'],
        ];

        $warnaMap = [
            'emerald' => ['bg' => 'bg-emerald-50 dark:bg-emerald-950/40', 'icon' => 'bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-400', 'border' => 'border-emerald-100 dark:border-emerald-900', 'hover' => 'hover:border-emerald-300 dark:hover:border-emerald-700'],
            'rose'    => ['bg' => 'bg-rose-50 dark:bg-rose-950/40', 'icon' => 'bg-rose-100 text-rose-600 dark:bg-rose-900 dark:text-rose-400', 'border' => 'border-rose-100 dark:border-rose-900', 'hover' => 'hover:border-rose-300 dark:hover:border-rose-700'],
            'sky'     => ['bg' => 'bg-sky-50 dark:bg-sky-950/40', 'icon' => 'bg-sky-100 text-sky-600 dark:bg-sky-900 dark:text-sky-400', 'border' => 'border-sky-100 dark:border-sky-900', 'hover' => 'hover:border-sky-300 dark:hover:border-sky-700'],
            'violet'  => ['bg' => 'bg-violet-50 dark:bg-violet-950/40', 'icon' => 'bg-violet-100 text-violet-600 dark:bg-violet-900 dark:text-violet-400', 'border' => 'border-violet-100 dark:border-violet-900', 'hover' => 'hover:border-violet-300 dark:hover:border-violet-700'],
            'amber'   => ['bg' => 'bg-amber-50 dark:bg-amber-950/40', 'icon' => 'bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-400', 'border' => 'border-amber-100 dark:border-amber-900', 'hover' => 'hover:border-amber-300 dark:hover:border-amber-700'],
            'teal'    => ['bg' => 'bg-teal-50 dark:bg-teal-950/40', 'icon' => 'bg-teal-100 text-teal-600 dark:bg-teal-900 dark:text-teal-400', 'border' => 'border-teal-100 dark:border-teal-900', 'hover' => 'hover:border-teal-300 dark:hover:border-teal-700'],
        ];
    @endphp

    <section id="layanan" class="mx-auto max-w-7xl px-4 py-20">
        <div class="mb-12 text-center reveal" x-data x-intersect.once="$el.classList.add('reveal-visible')">
            <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                Layanan Kami
            </span>
            <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-slate-100 md:text-4xl">
                Pelayanan Kesehatan Lengkap
            </h2>
            <p class="mx-auto mt-3 max-w-xl text-sm text-neutral-500 dark:text-neutral-400">
                Kami menyediakan berbagai layanan kesehatan berkualitas untuk seluruh masyarakat Pantai Amal dan sekitarnya.
            </p>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($layanan as $i => $item)
                @php $w = $warnaMap[$item['warna']]; @endphp
                <div
                    x-data x-intersect.once="$el.classList.add('reveal-visible')"
                    class="reveal group rounded-2xl border {{ $w['border'] }} {{ $w['bg'] }} {{ $w['hover'] }} p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    style="transition-delay: {{ $i * 80 }}ms"
                >
                    <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl {{ $w['icon'] }}">
                        <i data-lucide="{{ $item['icon'] }}" class="w-[22px] h-[22px]"></i>
                    </div>
                    <h3 class="mb-2 font-bold text-slate-800 dark:text-slate-100">{{ $item['judul'] }}</h3>
                    <p class="text-sm leading-relaxed text-neutral-500 dark:text-neutral-400">{{ $item['deskripsi'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         3. JAM OPERASIONAL
    ═══════════════════════════════════════════ --}}
    @php
        $jadwal = [
            ['hari' => 'Senin – Kamis', 'jam' => '07.30 – 12.00', 'status' => 'buka'],
            ['hari' => 'Jumat', 'jam' => '07.30 – 11.00', 'status' => 'buka'],
            ['hari' => 'Sabtu', 'jam' => '07.30 – 12.00', 'status' => 'buka'],
            ['hari' => 'Minggu', 'jam' => 'Tutup', 'status' => 'tutup'],
        ];
        // Nama hari dalam bahasa Indonesia (pengganti toLocaleDateString('id-ID'))
        $namaHariId = ['Sunday' => 'Minggu', 'Monday' => 'Senin', 'Tuesday' => 'Selasa', 'Wednesday' => 'Rabu', 'Thursday' => 'Kamis', 'Friday' => 'Jumat', 'Saturday' => 'Sabtu'];
        $hariIni = $namaHariId[now()->format('l')];
        $hariKerja = ['Senin', 'Selasa', 'Rabu', 'Kamis'];
    @endphp

    <section class="bg-slate-50 dark:bg-neutral-900">
        <div class="mx-auto max-w-7xl px-4 py-20">
            <div class="grid gap-10 md:grid-cols-2 md:items-center">

                {{-- Left text --}}
                <div class="reveal" x-data x-intersect.once="$el.classList.add('reveal-visible')">
                    <span class="mb-3 inline-block rounded-full border border-sky-200 bg-sky-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-sky-700 dark:border-sky-800 dark:bg-sky-950 dark:text-sky-300">
                        Jam Operasional
                    </span>
                    <h2 class="edu-vic-wa-nt-hand mb-4 text-3xl font-bold text-slate-800 dark:text-slate-100 md:text-4xl">
                        Kapan Kami Buka?
                    </h2>
                    <p class="mb-6 max-w-md text-sm leading-relaxed text-neutral-500 dark:text-neutral-400">
                        Puskesmas Pantai Amal beroperasi setiap hari kerja. Untuk layanan gawat darurat, silakan hubungi nomor darurat kami.
                    </p>
                </div>

                {{-- Right schedule card --}}
                <div class="reveal overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-800"
                     x-data x-intersect.once="$el.classList.add('reveal-visible')" style="transition-delay: 150ms">
                    <div class="flex items-center gap-2 border-b border-neutral-100 bg-slate-50 px-5 py-3.5 dark:border-neutral-700 dark:bg-neutral-750">
                        <i data-lucide="clock" class="w-4 h-4 text-slate-500"></i>
                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Jadwal Pelayanan</span>
                    </div>
                    <div class="divide-y divide-neutral-100 dark:divide-neutral-700">
                        @foreach ($jadwal as $j)
                            @php
                                $isToday = ($j['hari'] === $hariIni) || ($j['hari'] === 'Senin – Kamis' && in_array($hariIni, $hariKerja));
                            @endphp
                            <div class="flex items-center justify-between px-5 py-3.5 {{ $isToday ? 'bg-emerald-50 dark:bg-emerald-950/30' : '' }}">
                                <div class="flex items-center gap-2">
                                    @if ($isToday)
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                    @endif
                                    <span class="text-sm font-medium {{ $isToday ? 'text-emerald-700 dark:text-emerald-300' : 'text-slate-700 dark:text-slate-300' }}">
                                        {{ $j['hari'] }}
                                        @if ($isToday)
                                            <span class="ml-2 text-xs text-emerald-500">(Hari ini)</span>
                                        @endif
                                    </span>
                                </div>
                                <span class="text-sm font-semibold {{ $j['status'] === 'tutup' ? 'text-red-400' : 'text-slate-800 dark:text-slate-100' }}">
                                    {{ $j['jam'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         4. KONTAK & LOKASI
    ═══════════════════════════════════════════ --}}
    <section id="kontak" class="bg-slate-50 dark:bg-neutral-900">
        <div class="mx-auto max-w-7xl px-4 py-20">
            <div class="mb-12 text-center reveal" x-data x-intersect.once="$el.classList.add('reveal-visible')">
                <span class="mb-3 inline-block rounded-full border border-teal-200 bg-teal-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-teal-700 dark:border-teal-800 dark:bg-teal-950 dark:text-teal-300">
                    Kontak & Lokasi
                </span>
                <h2 class="edu-vic-wa-nt-hand text-3xl font-bold text-slate-800 dark:text-slate-100 md:text-4xl">
                    Temukan & Hubungi Kami
                </h2>
                <p class="mx-auto mt-3 max-w-xl text-sm text-neutral-500 dark:text-neutral-400">
                    Kami siap melayani pertanyaan Anda. Kunjungi kami langsung atau hubungi melalui kontak di bawah ini.
                </p>
            </div>

            <div class="grid gap-8 lg:grid-cols-5">
                {{-- Contact cards --}}
                @php
                    $kontak = [
                        ['icon' => 'map-pin', 'label' => 'Alamat', 'value' => 'Jl. Sei Kayan, Tarakan, Kalimantan Utara', 'color' => 'emerald'],
                        ['icon' => 'phone', 'label' => 'Telepon', 'value' => '62 851-7966-3858', 'color' => 'sky'],
                        ['icon' => 'mail', 'label' => 'Email', 'value' => 'pkm.pantaiamal@gmail.com', 'color' => 'violet'],
                    ];
                    $iconColorMap = [
                        'emerald' => 'bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-400',
                        'sky'     => 'bg-sky-100 text-sky-600 dark:bg-sky-900 dark:text-sky-400',
                        'violet'  => 'bg-violet-100 text-violet-600 dark:bg-violet-900 dark:text-violet-400',
                    ];
                @endphp
                <div class="flex flex-col gap-4 lg:col-span-2 reveal" x-data x-intersect.once="$el.classList.add('reveal-visible')">
                    @foreach ($kontak as $item)
                        <div class="flex items-start gap-4 rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm dark:border-neutral-700 dark:bg-neutral-800">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl {{ $iconColorMap[$item['color']] }}">
                                <i data-lucide="{{ $item['icon'] }}" class="w-[18px] h-[18px]"></i>
                            </div>
                            <div>
                                <p class="mb-0.5 text-xs font-semibold uppercase tracking-wider text-neutral-400">{{ $item['label'] }}</p>
                                <p class="text-sm font-medium text-slate-800 dark:text-slate-100">{{ $item['value'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Map embed --}}
                <div class="overflow-hidden rounded-2xl border border-neutral-200 shadow-sm dark:border-neutral-700 lg:col-span-3 reveal"
                     x-data x-intersect.once="$el.classList.add('reveal-visible')" style="transition-delay: 200ms">
                    <iframe
                        title="Lokasi Puskesmas Pantai Amal"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11842.385209222279!2d117.64850445472536!3d3.2842121809794267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3213898492d01411%3A0x9513374468c8c4cc!2sPuskesmas%20Pantai%20Amal!5e0!3m2!1sid!2sid!4v1778128760092!5m2!1sid!2sid"
                        width="100%"
                        height="340"
                        style="border:0; display:block"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection