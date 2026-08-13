@extends('layouts.app')

@section('title', 'Tenaga Kesehatan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Tenaga Medis
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Tenaga Kesehatan
                </h1>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                    @php $tim = [
                        ['label' => 'Dokter Umum', 'icon' => 'stethoscope'],
                        ['label' => 'Dokter Gigi', 'icon' => 'user-round'],
                        ['label' => 'Perawat', 'icon' => 'briefcase-medical'],
                        ['label' => 'Bidan', 'icon' => 'heart'],
                        ['label' => 'Apoteker', 'icon' => 'pill'],
                        ['label' => 'Analis Lab', 'icon' => 'flask-conical'],
                        ['label' => 'Nutrisionis', 'icon' => 'users'],
                        ['label' => 'Tenaga Administrasi', 'icon' => 'briefcase-medical'],
                    ]; @endphp
                    @foreach ($tim as $item)
                        <div class="flex flex-col items-center gap-3 rounded-2xl border border-neutral-200 bg-white p-5 text-center shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                            <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5 text-emerald-500"></i>
                            <span class="text-xs font-medium text-neutral-600 dark:text-neutral-300">{{ $item['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
