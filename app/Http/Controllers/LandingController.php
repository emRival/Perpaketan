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
        $kelas = Kelas::all();
        $siswa = Siswa::where('nama_siswa', 'like', "%" . $keyword . "%")->get();
        $barang = Barang::where('id_siswa', 'like', "%" . $siswa[0]->id . "%")->paginate(5);
       
        return view('welcome', compact('barang', 'kelas', 'siswa', 'i', 'search'));
    }
}
