<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return view ('siswa.index',compact('siswa'));
    }
    public function create(Request $request){
        $siswa = Siswa::create($request->all());
        return redirect ('siswa')->with('sukses','Data Berhasil Ditambah');
    }
    public function edit($id){
        $siswa = Siswa::find($id);
        return view ('siswa.edit',compact('siswa'));
    }
    public function update(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect ('siswa')->with('sukses','Data Berhasil Diupdate');
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect ('siswa')->with('sukses','Data Berhasil Dihapus');
    }
}
