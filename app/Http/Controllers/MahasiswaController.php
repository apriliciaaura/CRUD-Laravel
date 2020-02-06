<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_mahasiswa = \App\mahasiswa::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $data_mahasiswa = \App\mahasiswa::all();
        }
        return view('mahasiswa.index', ['data_mahasiswa' => $data_mahasiswa]);
    }


    public function create(Request $request){
    \App\mahasiswa::create($request->all());
    return redirect('/mahasiswa')->with('Sukses', 'Data Berhasil Diinput');
    }

    public function edit($id){
    	$mahasiswa = \App\mahasiswa::find($id);
    	return view('mahasiswa/edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id){
    	$mahasiswa = \App\mahasiswa::find($id);
    	$mahasiswa->update($request->all());
    	return redirect('/mahasiswa')->with('Sukses', 'Data Berhasil Diupdate');
    }

    public function delete($id){
    	$mahasiswa = \App\mahasiswa::find($id);
    	$mahasiswa->delete($mahasiswa);
    	return redirect('/mahasiswa')->with('Sukses', 'Data Berhasil Dihapus');
    }
}
