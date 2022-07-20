<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $a = Jurusan::all();
        return view('jurusan.index' , ['jurusan' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mata_pelajaran' => 'required',
            'nama_mata_pelajaran' => 'required',
            'semester' => 'required',
            'jurusan' => 'required',
        ]);

        $jurusan = new Jurusan();
        $jurusan->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $jurusan->nama_mata_pelajaran = $request->nama_mata_pelajaran;
        $jurusan->semester = $request->semester;
        $jurusan->jurusan = $request->jurusan;
        $jurusan->save();
        return redirect()->route('jurusan.index')->with('success',
        'Data berhasil dibuat!');
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
        $jurusan = Jurusan::findorFail($id);
        return view('jurusan.show' , compact('jurusan'));
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
        $jurusan = Jurusan::findorFail($id);
        return view('jurusan.edit' , compact('jurusan'));
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
        //
        $validated = $request->validate([
            'kode_mata_pelajaran' => 'required',
            'nama_mata_pelajaran' => 'required',
            'semester' => 'required',
            'jurusan' => 'required',
        ]);

        $jurusan = Jurusan::findorFail($id);
        $jurusan->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $jurusan->nama_mata_pelajaran = $request->nama_mata_pelajaran;
        $jurusan->semester = $request->semester;
        $jurusan->jurusan = $request->jurusan;
        $jurusan->save();
        return redirect()->route('jurusan.index')->with('success',
        'Data berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jurusan = Jurusan::findorFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('info',
        'Data berhasil Dihapus!');
    }
}
