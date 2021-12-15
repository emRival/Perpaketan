<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request) {
$i = 1;
        // $barang1 = Barang::whereIn('status', ['satpam','musyrif'])->paginate(3);
      
        $search = false;
        $barang = Barang::whereIn('status',  ['satpam','musyrif'])->paginate(10);
        $barangselesai = Barang::where('status', 'selesai')->where('tanggal_input', date('Y-m-d'))->paginate(10);
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('welcome', compact('barang','barangselesai', 'siswa', 'kelas', 'i', 'search'));
    }


    public function search(Request $request)
    {
        $i = 1;
        $search = true;
        $keyword = $request->cari;
        
        $barang = Barang::where('nama_barang', 'like', "%" . $keyword . "%")->paginate(7);
       
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view('welcome', compact('barang', 'kelas', 'siswa', 'i', 'search'));
    }
}
