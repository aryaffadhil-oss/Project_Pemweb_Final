<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PPDBController extends Controller
{
    public function index()
{
    $kuota_maksimal = 40;
    
    // Karena kita belum pakai database (sesuai permintaanmu), 
    // kita beri nilai sementara agar tidak error
    $pendaftar_ipa = 0; 
    $pendaftar_ips = 0;
    $pendaftar_bahasa = 0;
    $pendaftar_tkj = 0;
    $pendaftar_rpl = 0;
    $pendaftar_akuntansi = 0;
    $pendaftar_multimedia = 0;
    $pendaftar_tkr = 0;

    // Kirim semua variabel ke view menggunakan compact
    return view('arya.halaman_ppdb', compact(
        'kuota_maksimal', 
        'pendaftar_ipa', 
        'pendaftar_ips', 
        'pendaftar_bahasa', 
        'pendaftar_tkj', 
        'pendaftar_rpl', 
        'pendaftar_akuntansi', 
        'pendaftar_multimedia', 
        'pendaftar_tkr'
    ));
}
}