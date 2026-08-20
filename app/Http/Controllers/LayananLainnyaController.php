<?php

namespace App\Http\Controllers;

use App\Models\KunjunganPasien;
use App\Models\PenyakitTerbanyak;
use App\Models\SurveyKepuasanMasyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        $data = $query->orderBy('jumlah_kasus', 'desc')->get();

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
        $page = $request->query('page', 1);

        $cacheKey = 'sippn.produk-layanan.all';
        $cacheTTL = 3600; // 1 jam

        $allData = cache()->remember($cacheKey, $cacheTTL, function () {
            $baseUrl = 'https://sippn.menpan.go.id/api/api/v1/instansi/173699/produk-layanan';
            $limit = 15;
            $page = 1;
            $allItems = [];

            do {
                $url = $baseUrl . '?limit=' . $limit . '&page=' . $page;
                $response = Http::timeout(15)
                    ->withHeaders([
                        'Accept' => 'application/json',
                    ])
                    ->get($url);

                if (! $response->successful()) {
                    break;
                }

                $json = $response->json();
                $data = $json['data'] ?? [];
                $meta = $json['meta'] ?? [];

                $allItems = array_merge($allItems, $data);

                $totalPages = (int) ($meta['pages'] ?? 1);
                $page++;
            } while ($page <= $totalPages);

            return $allItems;
        });

        $items = collect($allData);

        if ($search) {
            $lower = strtolower($search);
            $items = $items->filter(function ($item) use ($lower) {
                return str_contains(strtolower($item['judul_layanan'] ?? ''), $lower)
                    || str_contains(strtolower($item['nama_layanan'] ?? ''), $lower);
            })->values();
        }

        if ($layanan) {
            $items = $items->filter(function ($item) use ($layanan) {
                return ($item['judul_layanan'] ?? '') === $layanan;
            })->values();
        }

        $layanans = collect($allData)
            ->pluck('judul_layanan')
            ->filter()
            ->unique()
            ->sort()
            ->values();

        $perPage = 12;
        $paginated = $items->forPage($page, $perPage);
        $produks = new \Illuminate\Pagination\LengthAwarePaginator(
            $paginated,
            $items->count(),
            $perPage,
            $page,
            ['path' => route('produk'), 'query' => $request->query()]
        );

        return view('pages.produk', compact('produks', 'search', 'layanan', 'layanans'));
    }

    public function produkDetail($id)
    {
        $cacheKey = 'sippn.produk-layanan.all';
        $allData = cache()->remember($cacheKey, 3600, function () {
            $baseUrl = 'https://sippn.menpan.go.id/api/api/v1/instansi/173699/produk-layanan';
            $limit = 15;
            $page = 1;
            $allItems = [];

            do {
                $url = $baseUrl . '?limit=' . $limit . '&page=' . $page;
                $response = Http::timeout(15)
                    ->withHeaders(['Accept' => 'application/json'])
                    ->get($url);

                if (! $response->successful()) {
                    break;
                }

                $json = $response->json();
                $data = $json['data'] ?? [];
                $meta = $json['meta'] ?? [];

                $allItems = array_merge($allItems, $data);

                $totalPages = (int) ($meta['pages'] ?? 1);
                $page++;
            } while ($page <= $totalPages);

            return $allItems;
        });

        $produk = collect($allData)->firstWhere('id_produk_layanan', (int) $id);

        if (! $produk) {
            abort(404);
        }

        return view('pages.produk-detail', compact('produk'));
    }
}
