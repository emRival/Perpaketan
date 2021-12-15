<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()->role !== 'Admin'){
            abort(403);
        }
        $keyword = $request->cari;
        $jurusan = Jurusan::where('nama_jurusan', 'like', "%" . $keyword . "%")->orderBy('id', 'desc')->paginate(4);
        

        return view('jurusan.index', compact('jurusan'));
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
    public function store(Request $request)
    {
        $input = $request->all();
        Jurusan::create($input);
        Alert::success('Success', "Data Kelas {$request->nama_jurusan} Berhasil Ditambahkan");

        return redirect('/jurusan');
    }
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
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::find($id);
        $input = $request->all();

        $jurusan->update($input);
        Alert::info('Success', 'Data Jurusan Berhasil Di update');
        return redirect('/jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        Alert::success('Success', "Data {$jurusan->nama_jurusan} berhasil di hapus");
        $jurusan->delete();
        return back();
    }
}
