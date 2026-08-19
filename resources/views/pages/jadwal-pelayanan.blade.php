@extends('layouts.app')

@section('title', 'Jadwal Pelayanan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Pelayanan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Jadwal Pelayanan
                </h1>
                <p class="max-w-2xl text-neutral-600 dark:text-neutral-400">
                    Berikut adalah jadwal pelayanan di UPTD Puskesmas Pantai Amal untuk Loket Pendaftaran dan Pelayanan Pasien.
                </p>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24 space-y-12">
        <div id="loket-pendaftaran" class="scroll-mt-28">
            <div class="mx-auto max-w-4xl">
                <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Loket Pendaftaran</h2>
                <div class="overflow-x-auto rounded-xl border border-neutral-200 dark:border-neutral-800">
                    <table class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-800">
                        <thead class="bg-neutral-50 dark:bg-neutral-900">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-neutral-500 dark:text-neutral-400">Hari</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-neutral-500 dark:text-neutral-400">Jam Operasional</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200 bg-white dark:divide-neutral-800 dark:bg-neutral-950">
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-slate-800 dark:text-slate-100">Senin s/d Kamis</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-neutral-600 dark:text-neutral-300">07:30 - 12:30 WIB</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-slate-800 dark:text-slate-100">Jum'at</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-neutral-600 dark:text-neutral-300">07:30 - 10:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-slate-800 dark:text-slate-100">Sabtu</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-neutral-600 dark:text-neutral-300">07:30 - 11:30 WIB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="pelayanan-pasien" class="scroll-mt-28">
            <div class="mx-auto max-w-4xl">
                <h2 class="mb-6 text-2xl font-bold text-slate-800 dark:text-white">Pelayanan Pasien</h2>
                <div class="overflow-x-auto rounded-xl border border-neutral-200 dark:border-neutral-800">
                    <table class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-800">
                        <thead class="bg-neutral-50 dark:bg-neutral-900">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-neutral-500 dark:text-neutral-400">Hari</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-neutral-500 dark:text-neutral-400">Jam Pelayanan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200 bg-white dark:divide-neutral-800 dark:bg-neutral-950">
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-slate-800 dark:text-slate-100">Senin s/d Kamis</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-neutral-600 dark:text-neutral-300">07:30 - Selesai</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="layanan-darurat" class="scroll-mt-28">
            <div class="mx-auto max-w-4xl">
                <p class="mb-6 text-sm text-neutral-600 dark:text-neutral-400">
                    Jika Anda memiliki keluhan gawat darurat saat jam tutup pelayanan atau bersalin, silahkan untuk berkunjung ke faskes 24 jam berikut:
                </p>

                <div class="grid gap-8 sm:grid-cols-2">
                    <div>
                        <h3 class="mb-3 text-lg font-semibold text-slate-800 dark:text-white">Pelayanan UGD &amp; Bersalin 24 Jam</h3>
                        <ul class="list-disc list-inside space-y-1 text-sm text-neutral-600 dark:text-neutral-300">
                            <li>Puskesmas Karang Rejo</li>
                            <li>Puskesmas Juata Permai</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="mb-3 text-lg font-semibold text-slate-800 dark:text-white">Pelayanan Bersalin 24 Jam</h3>
                        <ul class="list-disc list-inside space-y-1 text-sm text-neutral-600 dark:text-neutral-300">
                            <li>Puskesmas Gunung Lingkas</li>
                            <li>Puskesmas Sebengkok</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection