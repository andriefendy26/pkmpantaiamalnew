@extends('layouts.app')

@section('title', 'Kode Etik - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center">
        <div class="px-4 py-10 md:py-16 mt-20 w-full">
            <div class="mx-auto max-w-5xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Profil
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-2 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Kode Etik
                </h1>
                <p class="mb-8 text-lg text-neutral-600 dark:text-neutral-400">
                    & Kode Perilaku Pegawai
                </p>

                <div class="mb-8 rounded-2xl border border-emerald-200 bg-gradient-to-r from-emerald-50 to-teal-50 p-6 dark:border-emerald-800 dark:from-emerald-950/40 dark:to-teal-950/30">
                    <p class="text-base leading-relaxed text-slate-700 dark:text-slate-200">
                        Melayani dengan <strong>Integritas, Profesionalisme, dan Kepedulian</strong>
                    </p>
                    <p class="mt-3 text-sm leading-relaxed text-neutral-600 dark:text-neutral-300">
                        Komitmen bersama seluruh pegawai dan petugas untuk menghadirkan pelayanan kesehatan yang <strong>aman, adil, ramah, transparan,</strong> dan berorientasi pada keselamatan pasien.
                    </p>
                </div>

                <div class="mb-10">
                    <h2 class="edu-vic-wa-nt-hand mb-6 text-3xl font-bold text-slate-800 dark:text-white md:text-4xl">Nilai Utama Kami</h2>
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                        <div class="flex flex-col items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-800 dark:bg-emerald-950/40 transition-transform hover:-translate-y-1">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-emerald-600 text-white">
                                <i data-lucide="handshake" class="h-5 w-5"></i>
                            </span>
                            <h3 class="text-sm font-bold text-emerald-800 dark:text-emerald-300">INTEGRITAS</h3>
                            <p class="text-xs leading-relaxed text-neutral-600 dark:text-neutral-400">Jujur, bertanggung jawab, dan bebas dari penyalahgunaan wewenang.</p>
                        </div>
                        <div class="flex flex-col items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-800 dark:bg-emerald-950/40 transition-transform hover:-translate-y-1">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-emerald-600 text-white">
                                <i data-lucide="stethoscope" class="h-5 w-5"></i>
                            </span>
                            <h3 class="text-sm font-bold text-emerald-800 dark:text-emerald-300">PROFESIONAL</h3>
                            <p class="text-xs leading-relaxed text-neutral-600 dark:text-neutral-400">Bekerja sesuai kompetensi, kewenangan, standar profesi, dan prosedur.</p>
                        </div>
                        <div class="flex flex-col items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-800 dark:bg-emerald-950/40 transition-transform hover:-translate-y-1">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-emerald-600 text-white">
                                <i data-lucide="heart-handshake" class="h-5 w-5"></i>
                            </span>
                            <h3 class="text-sm font-bold text-emerald-800 dark:text-emerald-300">PELAYANAN</h3>
                            <p class="text-xs leading-relaxed text-neutral-600 dark:text-neutral-400">Mengutamakan kebutuhan, hak, keselamatan, dan martabat pengguna layanan.</p>
                        </div>
                        <div class="flex flex-col items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-800 dark:bg-emerald-950/40 transition-transform hover:-translate-y-1">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-emerald-600 text-white">
                                <i data-lucide="shield-check" class="h-5 w-5"></i>
                            </span>
                            <h3 class="text-sm font-bold text-emerald-800 dark:text-emerald-300">RAHASIA & AMAN</h3>
                            <p class="text-xs leading-relaxed text-neutral-600 dark:text-neutral-400">Melindungi pasien serta menjaga data dan rekam medis.</p>
                        </div>
                        <div class="flex flex-col items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-800 dark:bg-emerald-950/40 transition-transform hover:-translate-y-1">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-emerald-600 text-white">
                                <i data-lucide="scale" class="h-5 w-5"></i>
                            </span>
                            <h3 class="text-sm font-bold text-emerald-800 dark:text-emerald-300">ADIL</h3>
                            <p class="text-xs leading-relaxed text-neutral-600 dark:text-neutral-400">Melayani tanpa membedakan latar belakang siapa pun.</p>
                        </div>
                        <div class="flex flex-col items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-800 dark:bg-emerald-950/40 transition-transform hover:-translate-y-1">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-emerald-600 text-white">
                                <i data-lucide="trending-up" class="h-5 w-5"></i>
                            </span>
                            <h3 class="text-sm font-bold text-emerald-800 dark:text-emerald-300">BERBUDAYA MUTU</h3>
                            <p class="text-xs leading-relaxed text-neutral-600 dark:text-neutral-400">Saling menghormati, berkolaborasi, dan terus memperbaiki pelayanan.</p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 lg:grid-cols-2">
                    <div class="rounded-2xl border border-emerald-200 bg-white shadow-sm dark:border-emerald-800 dark:bg-neutral-900 overflow-hidden">
                        <div class="bg-emerald-700 px-6 py-4">
                            <h3 class="text-lg font-bold text-white flex items-center gap-2">
                                <i data-lucide="check-circle-2" class="h-5 w-5"></i>
                                WAJIB DILAKSANAKAN
                            </h3>
                        </div>
                        <ul class="divide-y divide-neutral-100 dark:divide-neutral-800">
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">1</span>
                                Mengucapkan salam, memperkenalkan diri, menggunakan tanda pengenal, dan berkomunikasi secara santun.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">2</span>
                                Memastikan identitas pasien dan memberikan pelayanan sesuai kompetensi, kewenangan, serta prosedur.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">3</span>
                                Mengutamakan keselamatan pasien, pengendalian infeksi, dan keamanan lingkungan.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">4</span>
                                Menjelaskan tindakan, manfaat, risiko, alternatif, hak, kewajiban, serta biaya/tarif secara benar.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">5</span>
                                Menjaga kerahasiaan rekam medis, identitas, foto, percakapan, dan informasi kesehatan.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">6</span>
                                Mencatat pelayanan secara lengkap, akurat, tepat waktu, dan dapat dipertanggungjawabkan.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700 dark:bg-emerald-900 dark:text-emerald-300">7</span>
                                Menangani pengaduan dengan terbuka, responsif, dan tanpa sikap defensif.
                            </li>
                        </ul>
                    </div>

                    <div class="rounded-2xl border border-orange-200 bg-white shadow-sm dark:border-orange-800 dark:bg-neutral-900 overflow-hidden">
                        <div class="bg-orange-600 px-6 py-4">
                            <h3 class="text-lg font-bold text-white flex items-center gap-2">
                                <i data-lucide="x-circle" class="h-5 w-5"></i>
                                DILARANG DILAKUKAN
                            </h3>
                        </div>
                        <ul class="divide-y divide-neutral-100 dark:divide-neutral-800">
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-700 dark:bg-orange-900 dark:text-orange-300">1</span>
                                Melakukan diskriminasi, kekerasan, pelecehan, perundungan, intimidasi, atau penghinaan.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-700 dark:bg-orange-900 dark:text-orange-300">2</span>
                                Meminta atau menerima gratifikasi, suap, tip, hadiah, komisi, atau pungutan di luar tarif resmi.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-700 dark:bg-orange-900 dark:text-orange-300">3</span>
                                Menyalahgunakan jabatan, fasilitas, obat, alat kesehatan, data, anggaran, atau kewenangan kedinasan.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-700 dark:bg-orange-900 dark:text-orange-300">4</span>
                                Memalsukan, mengubah, menghilangkan, menyembunyikan, atau membocorkan data pelayanan.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-700 dark:bg-orange-900 dark:text-orange-300">5</span>
                                Menolak, menunda, mengabaikan, atau meninggalkan pelayanan tanpa alasan yang sah.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-700 dark:bg-orange-900 dark:text-orange-300">6</span>
                                Merekam atau mengunggah informasi pengguna layanan tanpa dasar hukum atau persetujuan yang sah.
                            </li>
                            <li class="flex items-start gap-3 px-6 py-4 text-sm text-neutral-700 dark:text-neutral-300">
                                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-700 dark:bg-orange-900 dark:text-orange-300">7</span>
                                Melakukan ancaman atau tindakan balasan terhadap pelapor maupun saksi.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-10 rounded-2xl border-l-4 border-amber-400 bg-gradient-to-r from-amber-50 to-white p-6 dark:border-amber-600 dark:from-amber-950/40 dark:to-neutral-900">
                    <h3 class="mb-3 flex items-center gap-2 text-lg font-bold text-amber-800 dark:text-amber-300">
                        <i data-lucide="badge-check" class="h-5 w-5"></i>
                        KOMITMEN BERSAMA
                    </h3>
                    <p class="text-sm leading-relaxed text-neutral-700 dark:text-neutral-300">
                        Seluruh pegawai dan petugas wajib memahami, mematuhi, serta menandatangani Pernyataan Kepatuhan Kode Etik dan Kode Perilaku. Dugaan pelanggaran dapat dilaporkan melalui kanal pengaduan resmi Puskesmas Pantai Amal dan ditangani secara objektif, rahasia, adil, serta tanpa pembalasan terhadap pelapor beriktikad baik.
                    </p>
                </div>

                <div class="mt-8 rounded-2xl border border-neutral-200 bg-neutral-50 p-8 text-center dark:border-neutral-700 dark:bg-neutral-900">
                    <p class="edu-vic-wa-nt-hand text-xl italic text-slate-700 dark:text-slate-200 md:text-2xl">
                        "Integritas dalam bekerja, keselamatan dalam pelayanan, dan kepercayaan masyarakat adalah tanggung jawab kita bersama."
                    </p>
                </div>

                <div class="mt-10 rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h4 class="font-bold text-slate-800 dark:text-slate-100">UPTD Puskesmas Pantai Amal</h4>
                            <p class="mt-1 text-sm text-neutral-600 dark:text-neutral-400">
                                Jalan Sei Kayan RT 03, Kelurahan Pantai Amal, Kota Tarakan 77129
                            </p>
                            <p class="text-sm text-neutral-600 dark:text-neutral-400">
                                Laman: dinkes.tarakankota.go.id/pkm-pa &nbsp;|&nbsp; Pos-el: pkm.pantaiamal@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 border-t border-neutral-100 pt-4 dark:border-neutral-800">
                        <p class="text-xs text-neutral-400">
                            Disusun berdasarkan Keputusan Kepala Puskesmas Pantai Amal Nomor 800/023.SK.2026/UPTD-PKMPA tentang Penetapan Kode Etik dan Kode Perilaku Pegawai Puskesmas Pantai Amal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection