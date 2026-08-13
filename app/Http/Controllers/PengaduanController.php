<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('pages.pengaduan');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pelapor' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'no_hp' => ['nullable', 'string', 'max:20'],
            'kategori' => ['required', 'in:pelayanan,fasilitas,petugas,lainnya'],
            'isi_pengaduan' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Pengaduan::create($validator->validated());

        return back()->with('success', 'Pengaduan Anda telah berhasil dikirim. Terima kasih.');
    }
}
