<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if(auth()->user()->role !== 'Admin'){
            abort(403);
        }
        $keyword = $request->cari;
        $siswa = Siswa::where('nama_siswa', 'like', "%" . $keyword . "%")->paginate(10);
        $kelas = Kelas::all();
        return view('datasantri.santri', compact('siswa', 'kelas'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
       
        Siswa::create($input);
        Alert::success('Success', "Data Kelas {$request->nama_siswa} Berhasil Ditambahkan");
        return redirect('/datasantri');
    }

    public function update(Request $request, $id)
    {
        dd($request);
        $input = $request->all();
        $siswa = Siswa::find($id);

        $siswa->update($input);
        Alert::info('Success', 'Data Kelas Berhasil Di update');
        return redirect('/datasantri');
    }

    public function destroy(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        Alert::success('Success', "Data {$siswa->nama_siswa} berhasil di hapus");
        $siswa->delete();
        return back();
    }
}
