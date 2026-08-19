@extends('layouts.app')

@section('title', 'Visi dan Misi - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Arah & Tujuan
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Visi dan Misi
                </h1>
                <div class="space-y-6">
                    <div class="rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-teal-50 p-8 dark:border-emerald-800 dark:from-emerald-950/40 dark:to-teal-950/30">
                        <h2 class="mb-3 text-xl font-bold text-slate-800 dark:text-slate-100">Visi</h2>
                        <p class="text-lg italic leading-relaxed text-slate-700 dark:text-slate-200">"Terwujudnya masyarakat sehat dan mandiri di wilayah kerja Puskesmas Pantai Amal."</p>
                    </div>
                    <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-8 dark:border-neutral-700 dark:bg-neutral-900">
                        <h2 class="mb-3 text-xl font-bold text-slate-800 dark:text-slate-100">Misi</h2>
                        <ul class="list-disc space-y-2 pl-5 text-neutral-700 dark:text-neutral-300">
                            <li>Meningkatkan pelayanan kesehatan yang bermutu dan terjangkau</li>
                            <li>Meningkatkan kesadaran masyarakat untuk berperilaku hidup bersih dan sehat</li>
                            <li>Meningkatkan sinergi dan kolaborasi lintas sektor dalam upaya meningkatkan derajat kesehatan masyarakat</li>
                        </ul>
                    </div>
                    <div class="rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-teal-50 p-8 dark:border-emerald-800 dark:from-emerald-950/40 dark:to-teal-950/30">
                        <h2 class="mb-3 text-xl font-bold text-slate-800 dark:text-slate-100">Motto</h2>
                        <p class="text-lg italic leading-relaxed text-slate-700 dark:text-slate-200">"Kesehatan anda adalah tujuan kami"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
