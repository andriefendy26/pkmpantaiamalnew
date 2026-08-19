@extends('layouts.app')

@section('title', 'Kunjungan Pasien - UPTD Puskesmas Pantai Amal')

@section('content')
<div class="min-h-screen bg-white dark:bg-neutral-950 overflow-x-hidden">
    <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-center">
        <div class="px-4 py-10 md:py-20 mt-20">
            <div class="mx-auto max-w-4xl">
                <span class="mb-3 inline-block rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    Statistik
                </span>
                <h1 class="edu-vic-wa-nt-hand mb-6 text-4xl font-bold tracking-tight text-slate-800 dark:text-white md:text-5xl">
                    Kunjungan Pasien
                </h1>
                <div class="content-body text-base leading-relaxed text-neutral-700 dark:text-neutral-300 space-y-4">
                    <p>Data kunjungan pasien di UPTD Puskesmas Pantai Amal direkap untuk mendukung peningkatan kualitas layanan kesehatan masyarakat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 pb-16 md:pb-24">
        <div class="mx-auto max-w-5xl space-y-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <h2 class="text-2xl font-bold text-slate-800 dark:text-white">Statistik Kunjungan Pasien</h2>
                <form method="GET" action="{{ route('statistik.kunjungan') }}" class="flex items-center gap-2">
                    <label for="tahun" class="text-sm font-medium text-neutral-600 dark:text-neutral-300">Tahun:</label>
                    <select name="tahun" id="tahun" onchange="this.form.submit()" class="rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm text-neutral-700 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-200">
                        @foreach($years as $year)
                            <option value="{{ $year }}" {{ $selectedYear == $year ? 'selected' : '' }}>{{ $year }}</option>
                        @endforeach
                    </select>
                </form>
            </div>

            @if($chartData['labels'])
                <div class="grid gap-8 lg:grid-cols-3">
                    <div class="lg:col-span-2 rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                        <h3 class="mb-4 text-lg font-semibold text-slate-800 dark:text-slate-100">Grafik Kunjungan per Kategori</h3>
                        <div class="relative h-80 w-full">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                        <h3 class="mb-4 text-lg font-semibold text-slate-800 dark:text-slate-100">Distribusi Jenis Kelamin</h3>
                        <div class="relative h-80 w-full">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-900">
                    <h3 class="mb-4 text-lg font-semibold text-slate-800 dark:text-slate-100">Tabel Data Kunjungan Pasien Tahun {{ $selectedYear }}</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-800">
                            <thead class="bg-neutral-50 dark:bg-neutral-900">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-neutral-500 dark:text-neutral-400">Kategori</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-neutral-500 dark:text-neutral-400">Laki-laki</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-neutral-500 dark:text-neutral-400">Perempuan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-neutral-500 dark:text-neutral-400">Total</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-200 bg-white dark:divide-neutral-800 dark:bg-neutral-950">
                                @php
                                    $totalLaki = 0;
                                    $totalPerempuan = 0;
                                @endphp
                                @foreach($chartData['labels'] as $index => $label)
                                    @php
                                        $laki = $chartData['laki_laki'][$index] ?? 0;
                                        $perempuan = $chartData['perempuan'][$index] ?? 0;
                                        $totalLaki += $laki;
                                        $totalPerempuan += $perempuan;
                                    @endphp
                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-slate-800 dark:text-slate-100">{{ $label }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-neutral-600 dark:text-neutral-300">{{ $laki }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-neutral-600 dark:text-neutral-300">{{ $perempuan }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-semibold text-slate-800 dark:text-slate-100">{{ $laki + $perempuan }}</td>
                                    </tr>
                                @endforeach
                                <tr class="bg-neutral-50 dark:bg-neutral-900">
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-bold text-slate-800 dark:text-slate-100">Total</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-bold text-slate-800 dark:text-slate-100">{{ $totalLaki }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-bold text-slate-800 dark:text-slate-100">{{ $totalPerempuan }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm font-bold text-emerald-700 dark:text-emerald-300">{{ $totalLaki + $totalPerempuan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="rounded-xl border border-neutral-200 bg-neutral-50 p-8 text-center dark:border-neutral-700 dark:bg-neutral-900">
                    <p class="text-neutral-500 dark:text-neutral-400">Belum ada data kunjungan pasien untuk tahun {{ $selectedYear }}.</p>
                </div>
            @endif
        </div>
    </div>
</div>

@if($chartData['labels'])
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const labels = @json($chartData['labels']);
    const lakiLaki = @json($chartData['laki_laki']);
    const perempuan = @json($chartData['perempuan']);
    const isDark = document.documentElement.classList.contains('dark');
    const textColor = isDark ? '#e5e7eb' : '#374151';
    const gridColor = isDark ? 'rgba(255,255,255,0.1)' : 'rgba(0,0,0,0.1)';

    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Laki-laki',
                    data: lakiLaki,
                    backgroundColor: 'rgba(16, 185, 129, 0.8)',
                    borderColor: 'rgba(16, 185, 129, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Perempuan',
                    data: perempuan,
                    backgroundColor: 'rgba(245, 158, 11, 0.8)',
                    borderColor: 'rgba(245, 158, 11, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: { color: textColor }
                }
            },
            scales: {
                x: {
                    ticks: { color: textColor },
                    grid: { color: gridColor }
                },
                y: {
                    ticks: { color: textColor },
                    grid: { color: gridColor },
                    beginAtZero: true
                }
            }
        }
    });

    const pieCtx = document.getElementById('pieChart').getContext('2d');
    const totalLaki = lakiLaki.reduce((a, b) => a + b, 0);
    const totalPerempuan = perempuan.reduce((a, b) => a + b, 0);

    new Chart(pieCtx, {
        type: 'doughnut',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                data: [totalLaki, totalPerempuan],
                backgroundColor: [
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(245, 158, 11, 0.8)'
                ],
                borderColor: [
                    'rgba(16, 185, 129, 1)',
                    'rgba(245, 158, 11, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: { color: textColor }
                }
            }
        }
    });
});
</script>
@endpush
@endif
@endsection
