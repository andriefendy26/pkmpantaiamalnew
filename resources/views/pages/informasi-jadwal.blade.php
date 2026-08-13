@extends('layouts.app')

@section('title', 'Jadwal Pelayanan - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Jadwal
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Jadwal Pelayanan
                </h1>
                <div class="overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <div class="divide-y divide-neutral-100 dark:divide-neutral-800">
                        @php $jadwal = [
                            ['hari' => 'Senin – Kamis', 'jam' => '07.30 – 12.00 WITA'],
                            ['hari' => 'Jumat', 'jam' => '07.30 – 11.00 WITA'],
                            ['hari' => 'Sabtu', 'jam' => '07.30 – 12.00 WITA'],
                            ['hari' => 'Minggu', 'jam' => 'Tutup'],
                        ]; @endphp
                        @foreach ($jadwal as $j)
                            <div class="flex items-center justify-between px-6 py-4">
                                <span class="font-medium text-slate-700 dark:text-slate-200">{{ $j['hari'] }}</span>
                                <span class="font-semibold {{ $j['jam'] === 'Tutup' ? 'text-red-400' : 'text-slate-800 dark:text-slate-100' }}">{{ $j['jam'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
