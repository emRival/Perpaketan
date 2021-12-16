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
        $query = [];
        foreach ($siswa as $key => $item) {
            array_push($query, $item->id);
        }
        $barang = Barang::whereIn('id_siswa', $query)->where('status', 'satpam')->paginate(5);
        // dd($query);
        $kelas = Kelas::all();

        return view('tracking.satpam', compact('barang', 'kelas', 'siswa'));
    }

    public function searchmusyrif(Request $request)
    {
        $keyword = $request->cari;
        $siswa = Siswa::where('nama_siswa', 'like', "%" . $keyword . "%")->get();
        $query = [];
        foreach ($siswa as $key => $item) {
            array_push($query, $item->id);
        }
        $barang = Barang::whereIn('id_siswa', $query)->where('status', 'satpam')->paginate(5);
        // dd($query);
        
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view('tracking.musyrif', compact('barang', 'kelas', 'siswa'));
    }

    public function searchdiambil(Request $request)
    {
        $keyword = $request->cari;
        $siswa = Siswa::where('nama_siswa', 'like', "%" . $keyword . "%")->get();
        $query = [];
        foreach ($siswa as $key => $item) {
            array_push($query, $item->id);
        }
        $barang = Barang::whereIn('id_siswa', $query)->where('status', 'satpam')->paginate(5);
        // dd($query);
        
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view('tracking.diambil', compact('barang', 'kelas', 'siswa'));
    }
}
