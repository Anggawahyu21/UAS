<?php

namespace App\Http\Controllers;

use App\models\MGuru;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title="Data Guru";
        if($request->has('cari')){
            $datguru = MGuru::where('nama','LIKE','%'.$request->cari.'%')->paginate(4);
        }else{
            $datguru = MGuru::paginate(4);
        }
        return view('admin.dataguru',compact('title','datguru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Tambah Data Guru";
        return view('admin.input',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=>'Kolom :attribute harus lengkap',
            'date'=>'Kolom :attribute harus tanggal',
            'numeric'=>'Kolom :attribute harus angka',
        ];
        $validasi=$request->validate([
            'nip'=>'required',
            'nama'=>'required',
            'profesi'=>'required',
            'tempatlhr'=>'required',
            'tgllhr'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'notelp'=>'required',
            'foto'=>'required'
        ],$message);
        $path = $request->file('foto')->store('medias');
        $validasi['id_guru']=Auth::id();
        $validasi['foto']=$path;
        MGuru::create($validasi);
        return redirect('dataguru')->with('toast_success','Data Berhasil Tersimpan');
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
        $datguru = MGuru::findOrfail($id);
        return view('admin.showguru',compact('title','datguru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datguru=MGuru::find($id);
        $title="Edit Data Guru";
        return view('admin.input',compact('title','datguru'));
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
        $message=[
            'required'=>'Kolom :attribute harus lengkap',
            'date'=>'Kolom :attribute harus tanggal',
            'numeric'=>'Kolom :attribute harus angka',
        ];
        $validasi=$request->validate([
            'nip'=>'required',
            'nama'=>'required',
            'profesi'=>'required',
            'tempatlhr'=>'required',
            'tgllhr'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'notelp'=>'required'
        ],$message);
        if($request->hasFile('foto')){
            $fileName=time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('medias',$fileName);
            $validasi['foto']=$path;
            $datguru=MGuru::find($id);
            Storage::delete($datguru->foto);
        }
        $validasi['id_guru']=Auth::id();
        MGuru::where('id',$id)->update($validasi);
        return redirect('dataguru')->with('toast_success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datguru=MGuru::find($id);
        if($datguru != null){
            MGuru::where('id',$id)->delete();
        }
        return redirect('dataguru')->with('info','Data Berhasil Dihapus');
    }

}
