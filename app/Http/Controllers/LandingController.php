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
      
      
        $search = false;
        $barang = Barang::whereIn('status',  ['satpam','musyrif']);
        $barangselesai = Barang::where('status', 'selesai')->where('tanggal_input', date('Y-m-d'));
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('welcome', compact('barang','barangselesai', 'siswa', 'kelas', 'i', 'search'));
    }


    public function search(Request $request)
    {
        $i = 1;
        $search = true;
        $kelas = Kelas::all();
        $keyword = $request->cari;
        $siswa = Siswa::where('nama_siswa', 'like', "%" . $keyword . "%")->get();
        $query = [];
        foreach ($siswa as $key => $item) {
            array_push($query, $item->id);
        }
        $barang = Barang::whereIn('id_siswa', $query)->where('status', 'satpam')->paginate(5);
        // dd($query);
        
       
        return view('welcome', compact('barang', 'kelas', 'siswa', 'i', 'search'));
    }
}
