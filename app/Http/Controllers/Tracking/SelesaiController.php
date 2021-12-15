<?php

namespace App\Http\Controllers\Tracking;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SelesaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $barang = Barang::where('status', 'selesai')->orderBy('id', 'desc')->paginate(10);
        // $keyword = $request->cari;
        // $barang = Barang::where('nama_barang', 'like', "%" . $keyword . "%")->paginate(5);
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view('tracking.diambil', compact('kelas', 'siswa', 'barang'));
    }

    public function search(Request $request)
    {
        // https://www.indeveloper.id/2021/03/tutorial-laravel-cara-membuat-pencarian.html
      
        $keyword = $request->cari;
        $barang = Barang::where('nama_barang', 'like', "%" . $keyword . "%")->paginate(5);
        return view('tracking.diambil', compact( 'barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        Alert::success('Success', "Data {$barang->nama_kelas} berhasil di hapus");
        $barang->delete();
        return back();   
    }

}
