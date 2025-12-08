<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $totalStok = Barang::sum('jumlah');
        $totalNilai = Barang::get()->sum('total_nilai');

        $stokRendah = Barang::where('jumlah', '<', 5)->count();

        $dataKategori = Barang::select('kategori', DB::raw('count(*) as total'))
            ->groupBy('kategori')
            ->orderBy('total', 'desc')
            ->limit(5)
            ->get();

        $barangTerbaru = Barang::latest()
            ->limit(5)
            ->get();

        return view('dashboard', compact(
            'totalBarang',
            'totalStok',
            'totalNilai',
            'stokRendah',
            'dataKategori',
            'barangTerbaru'
        ));
    }
}
