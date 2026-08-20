<?php

namespace App\Http\Controllers;

use App\Models\KunjunganPasien;
use App\Models\PenyakitTerbanyak;
use App\Models\ProdukLayanan;
use App\Models\SurveyKepuasanMasyarakat;
use Illuminate\Http\Request;

class LayananLainnyaController extends Controller
{
    public function surveyKepuasan()
    {
        $surveys = SurveyKepuasanMasyarakat::where('is_published', true)
            ->orderByDesc('tahun')
            ->get();

        return view('pages.survey-kepuasan-masyarakat', compact('surveys'));
    }

    public function ppid()
    {
        return view('pages.ppid');
    }

    public function sippn()
    {
        return view('pages.sippn');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function statistik()
    {
        return view('pages.statistik');
    }

    public function kunjunganPasien(Request $request)
    {
        $years = KunjunganPasien::select('tahun')
            ->distinct()
            ->orderByDesc('tahun')
            ->pluck('tahun');

        $selectedYear = $request->query('tahun', $years->first());

        $query = KunjunganPasien::query();

        if ($selectedYear) {
            $query->where('tahun', $selectedYear);
        }

        $data = $query->get();

        $chartData = [
            'labels' => $data->pluck('kategori')->unique()->values()->toArray(),
            'laki_laki' => $data->where('jenis_kelamin', 'laki_laki')->pluck('jumlah')->toArray(),
            'perempuan' => $data->where('jenis_kelamin', 'perempuan')->pluck('jumlah')->toArray(),
        ];

        return view('pages.statistik-kunjungan-pasien', compact('years', 'selectedYear', 'chartData'));
    }

    public function penyakitTerbanyak(Request $request)
    {
        $years = PenyakitTerbanyak::select('tahun')
            ->distinct()
            ->orderByDesc('tahun')
            ->pluck('tahun');

        $selectedYear = $request->query('tahun', $years->first());

        $query = PenyakitTerbanyak::query();

        if ($selectedYear) {
            $query->where('tahun', $selectedYear);
        }

        $data = $query->orderBy('peringkat')->get();

        $chartData = [
            'labels' => $data->pluck('nama_penyakit')->toArray(),
            'values' => $data->pluck('jumlah_kasus')->toArray(),
        ];

        return view('pages.statistik-penyakit-terbanyak', compact('years', 'selectedYear', 'chartData'));
    }

    public function produkLayanan(Request $request)
    {
        $search = $request->query('search');
        $layanan = $request->query('layanan');

        $produks = ProdukLayanan::query()
            ->where('is_published', true)
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama_produk', 'like', "%{$search}%")
                        ->orWhere('layanan', 'like', "%{$search}%")
                        ->orWhere('persyaratan', 'like', "%{$search}%")
                        ->orWhere('waktu_penyelesaian', 'like', "%{$search}%")
                        ->orWhere('biaya_tarif', 'like', "%{$search}%")
                        ->orWhere('detail', 'like', "%{$search}%");
                });
            })
            ->when($layanan, function ($query, $layanan) {
                $query->where('layanan', $layanan);
            })
            ->orderByDesc('created_at')
            ->get();

        $layanans = ProdukLayanan::where('is_published', true)
            ->distinct()
            ->pluck('layanan')
            ->filter()
            ->sort()
            ->values();

        return view('pages.produk', compact('produks', 'search', 'layanan', 'layanans'));
    }

    public function produkDetail($id)
    {
        $produk = ProdukLayanan::where('is_published', true)->findOrFail($id);

        return view('pages.produk-detail', compact('produk'));
    }
}
