<?php

namespace App\Http\Controllers;

use App\models\MSiswa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\db_webadmin;

class SiswaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title="Data Siswa";
        if($request->has('cari')){
            $siswa = MSiswa::where('nama','LIKE','%'.$request->cari.'%')->paginate(4);
        }else{
            $siswa = MSiswa::paginate(3);
        }
        return view('admin.datasiswa',compact('title','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Tambah Data Siswa";
        return view('admin.inputsiswa',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'nis'=>'required',
            'nisn'=>'required',
            'nama'=>'required',
            'tmptlhr'=>'required',
            'tgllhr'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'notelp'=>'required',
            'foto'=>'required'
        ]);
        $path = $request->file('foto')->store('medias');
        $validasi['id_siswa']=Auth::id();
        $validasi['foto']=$path;
        MSiswa::create($validasi);
        return redirect('datasiswa')->with('toast_success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Detail Data";
        $siswa = MSiswa::findOrfail($id);
        return view('admin.showsiswa',compact('title','siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa=MSiswa::find($id);
        $title="Edit Data Siswa";
        return view('admin.inputsiswa',compact('title','siswa'));
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
        $validasi=$request->validate([
            'nis'=>'required',
            'nisn'=>'required',
            'nama'=>'required',
            'tmptlhr'=>'required',
            'tgllhr'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'notelp'=>'required'
        ]);
        if($request->hasFile('foto')){
            $fileName=time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('medias',$fileName);
            $validasi['foto']=$path;
            $siswa=MSiswa::find($id);
            Storage::delete($siswa->foto);
        }
        $validasi['id_siswa']=Auth::id();
        MSiswa::where('id',$id)->update($validasi);
        return redirect('datasiswa')->with('toast_success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa=MSiswa::find($id);
        if($siswa != null){
            MSiswa::where('id',$id)->delete();
        }
        return redirect('datasiswa')->with('info','Data Berhasil Dihapus');
    }
}
