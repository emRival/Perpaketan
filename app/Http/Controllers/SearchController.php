<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->cari;
        $siswa = Siswa::where('nama_siswa', 'like', "%" . $keyword . "%")->get();
        $barang = Barang::where('id_siswa', 'like', "%" . $siswa[0]->id . "%")->where('status', 'satpam')->paginate(5);
        $kelas = Kelas::all();

        return view('tracking.satpam', compact('barang', 'kelas', 'siswa'));
    }

    public function searchmusyrif(Request $request)
    {
        $keyword = $request->cari;
        $siswa = Siswa::where('nama_siswa', 'like', "%" . $keyword . "%")->get();
        $barang = Barang::where('id_siswa', 'like', "%" . $siswa[0]->id . "%")->where('status', 'musyrif')->paginate(5);
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view('tracking.musyrif', compact('barang', 'kelas', 'siswa'));
    }

    public function searchdiambil(Request $request)
    {
        $keyword = $request->cari;
        $siswa = Siswa::where('nama_siswa', 'like', "%" . $keyword . "%")->get();
        $barang = Barang::where('id_siswa', 'like', "%" . $siswa[0]->id . "%")->where('status', 'selesai')->paginate(5);
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view('tracking.diambil', compact('barang', 'kelas', 'siswa'));
    }
}
