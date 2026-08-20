<?php

namespace App\Filament\Widgets;

use App\Models\KunjunganPasien;
use App\Models\Pengaduan;
use App\Models\PenyakitTerbanyak;
use App\Models\ProdukLayanan;
use App\Models\SurveyKepuasanMasyarakat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected ?string $pollingInterval = '60s';

    protected static ?int $sort = 1;

    protected function getCachedStats(): array
    {
        return [
            Stat::make('Total Pengaduan', Pengaduan::count())
                ->icon('heroicon-o-megaphone')
                ->color('primary')
                ->chart(Pengaduan::selectRaw('count(*) as count, DATE(created_at) as date')
                    ->groupBy('date')
                    ->orderBy('date', 'asc')
                    ->take(7)
                    ->pluck('count')
                    ->toArray()),
            
            Stat::make('Total Survey', SurveyKepuasanMasyarakat::count())
                ->icon('heroicon-o-clipboard-document-list')
                ->color('primary')
                ->chart(SurveyKepuasanMasyarakat::selectRaw('count(*) as count, DATE(created_at) as date')
                    ->groupBy('date')
                    ->orderBy('date', 'asc')
                    ->take(7)
                    ->pluck('count')
                    ->toArray()),
            
            Stat::make('Total Kunjungan Pasien', KunjunganPasien::sum('jumlah'))
                ->icon('heroicon-o-users')
                ->color('primary')
                ->chart(KunjunganPasien::selectRaw('sum(jumlah) as total, tahun')
                    ->groupBy('tahun')
                    ->orderBy('tahun', 'asc')
                    ->take(7)
                    ->pluck('total')
                    ->toArray()),
            
            Stat::make('Total Penyakit Terbanyak', PenyakitTerbanyak::count())
                ->icon('heroicon-o-chart-bar')
                ->color('primary')
                ->chart(PenyakitTerbanyak::selectRaw('count(*) as count, tahun')
                    ->groupBy('tahun')
                    ->orderBy('tahun', 'asc')
                    ->take(7)
                    ->pluck('count')
                    ->toArray()),
            
            Stat::make('Total Produk Layanan', ProdukLayanan::count())
                ->icon('heroicon-o-shopping-bag')
                ->color('primary'),
        ];
    }
}
