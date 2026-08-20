<?php

namespace App\Filament\Widgets;

use App\Models\KunjunganPasien;
use App\Models\PenyakitTerbanyak;
use Filament\Widgets\ChartWidget;

class StatisticsChartWidget extends ChartWidget
{
    protected ?string $pollingInterval = '60s';

    protected static ?int $sort = 2;

    protected string $color = 'primary';

    protected ?string $heading = 'Statistik Kunjungan Pasien';

    protected ?string $description = 'Grafik jumlah kunjungan pasien per kategori';

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getData(): array
    {
        $latestYear = KunjunganPasien::select('tahun')
            ->distinct()
            ->orderByDesc('tahun')
            ->value('tahun');

        if (! $latestYear) {
            return [
                'datasets' => [
                    [
                        'label' => 'Tidak ada data',
                        'data' => [],
                    ],
                ],
                'labels' => [],
            ];
        }

        $data = KunjunganPasien::where('tahun', $latestYear)
            ->get()
            ->groupBy('kategori');

        $labels = $data->keys()->toArray();
        $lakiLaki = $data->map(fn ($items) => $items->where('jenis_kelamin', 'laki_laki')->sum('jumlah'))->values()->toArray();
        $perempuan = $data->map(fn ($items) => $items->where('jenis_kelamin', 'perempuan')->sum('jumlah'))->values()->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Laki-laki',
                    'data' => $lakiLaki,
                    'backgroundColor' => 'rgba(230, 117, 41, 0.8)',
                    'borderColor' => 'rgba(230, 117, 41, 1)',
                    'borderWidth' => 1,
                ],
                [
                    'label' => 'Perempuan',
                    'data' => $perempuan,
                    'backgroundColor' => 'rgba(251, 146, 60, 0.8)',
                    'borderColor' => 'rgba(251, 146, 60, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'labels' => [
                        'color' => 'rgb(107, 114, 128)',
                    ],
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'color' => 'rgb(107, 114, 128)',
                    ],
                ],
                'x' => [
                    'ticks' => [
                        'color' => 'rgb(107, 114, 128)',
                    ],
                ],
            ],
        ];
    }
}
