@extends('layouts.app')

@section('title', 'Maklumat Pelayanan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Profil
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Maklumat Pelayanan
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Maklumat pelayanan adalah pernyataan komitmen UPTD Puskesmas Pantai Amal dalam memberikan pelayanan kesehatan kepada masyarakat. Kami berjanji untuk melayani setiap pasien dengan profesional, transparan, dan adil sesuai dengan standar pelayanan yang berlaku.</p>
                    <p>Seluruh pemohon layanan berhak mendapatkan pelayanan yang bermutu, tidak diskriminasi, dan menjaga kerahasiaan data pribadi. Puskesmas Pantai Amal berupaya memberikan kemudahan akses, informasi yang jelas, serta tindak lanjut yang cepat untuk setiap kebutuhan kesehatan masyarakat.</p>
                    <div class="mt-6 rounded-lg border border-emerald-200 bg-emerald-50 p-4 dark:border-emerald-800 dark:bg-emerald-950">
                        <p class="text-sm font-medium text-emerald-800 dark:text-emerald-200">
                            Informasi lebih lanjut dapat diminta langsung di loket pelayanan atau melalui kontak yang tersedia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-4xl">
            <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-4 dark:border-neutral-700 dark:bg-neutral-900">
                <img src="{{ asset('storage/profil/maklumat/maklumat.jpg') }}" alt="Maklumat Pelayanan UPTD Puskesmas Pantai Amal" class="w-full h-auto rounded-xl object-cover">
                <p class="mt-3 text-center text-sm font-medium text-neutral-600 dark:text-neutral-300">Maklumat Pelayanan UPTD Puskesmas Pantai Amal</p>
            </div>
        </div>
    </div>
</div>
@endsection
