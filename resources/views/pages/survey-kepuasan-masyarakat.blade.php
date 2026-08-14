@extends('layouts.app')

@section('title', 'Survey Kepuasan Masyarakat - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Layanan Lainnya
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Survey Kepuasan Masyarakat
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Survey kepuasan masyarakat adalah alat untuk mengukur tingkat kepuasan masyarakat terhadap pelayanan yang diberikan oleh UPTD Puskesmas Pantai Amal.</p>
                    <p>Dengan mengisi survei ini, Anda membantu kami meningkatkan kualitas pelayanan kesehatan di wilayah Pantai Amal.</p>
                    <div class="mt-6 rounded-lg border border-emerald-200 bg-emerald-50 p-4 dark:border-emerald-800 dark:bg-emerald-950">
                        <p class="text-sm font-medium text-emerald-800 dark:text-emerald-200">
                            Silakan sampaikan kritik, saran, atau masukan Anda melalui formulir survei yang disediakan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
