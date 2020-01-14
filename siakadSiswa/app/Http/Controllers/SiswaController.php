<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    public function hubung(){
      // untuk menampilkan form
      $data = Siswa::all();
      return view('siswa.daftar_siswa', compact('data'));
    }
    public function hubungDatabase(Request $request){
      // untuk simpan ke database
      $this->validate($request,[

      'nama_siswa' => 'required|min:2|alpha',
      'kelas' => 'required',
      'tanggal_lahir' => 'required',
      'tempat_lahir' => 'required',
      'alamat'=>'required',
      'no_telp' =>'required',
      'kota' =>'required',
      'file'=>'file|mimes:jpeg,png,jpg|max:2048'
    ]);

       $siswa = new Siswa;

       $siswa->nama_siswa = $request->nama_siswa;
       $siswa->kelas = $request->kelas;
       $siswa->tanggal_lahir = $request->tanggal_lahir;
       $siswa->tempat_lahir = $request->tempat_lahir;
       $siswa->alamat= $request->alamat;
       $siswa->no_telp= $request->no_telp;
       $siswa->kota= $request->kota;

       if ($request->hasFile('foto_siswa')) {
       $file = $request->file('foto_siswa');
       $filename =time()." ".$file->getClientOriginalName();
       $request->file('foto_siswa')->move('file/',$filename);

       $siswa->foto_siswa= $filename;
       $siswa->save();
     }
       return redirect('tampilkan');

   }
   public function read_web()
   // untuk menampilkan tabel
    {
        $data = Siswa::all();
        return view('siswa.read', compact('data'));
    }
    public function edit($id_siswa){
      // untuk edit
    $data = Siswa::find($id_siswa);
    return view('siswa.update_siswa', compact('data'));
  }
  public function update(Request $request, $id_siswa) {
    // untuk update
  $siswa = Siswa::find($id_siswa);
  $siswa->nama_siswa = $request->nama_siswa;
  $siswa->kelas = $request->kelas;
  $siswa->tanggal_lahir = $request->tanggal_lahir;
  $siswa->tempat_lahir = $request->tempat_lahir;
  $siswa->alamat= $request->alamat;
  $siswa->no_telp= $request->no_telp;
  $siswa->kota= $request->kota;
  if ($request->file('foto_siswa') == "") {
  $siswa->foto_siswa = $siswa->foto_siswa;
  } else {
  if($request->hasFile('foto_siswa')){
  $foto_siswa = 'file/'.$siswa->foto_siswa;
  if(is_file($foto_siswa)){
  unlink($foto_siswa);
  }
  //
  $file = $request->file('foto_siswa');
  $filenama = $file->getClientOriginalName();
  $request->file('foto_siswa')->move('file/',$filenama);
  $siswa->foto_siswa = $filenama;
  }
  }
  $siswa->save();
  return redirect('tampilkan');
  }
  public function destroy($id_nis_siswa){
    // untuk hapus
 $data = Siswa::find($id_nis_siswa);
 $data->delete();
 return redirect('tampilkan');
 }

}
