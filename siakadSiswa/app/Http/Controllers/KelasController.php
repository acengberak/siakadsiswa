<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $kelas= Kelas::all();
      return view('kelas.create', compact('kelas'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $kelas= Kelas::all();
      // dd($kelas);
      return view('kelas.create', compact('kelas'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $kelas= new Kelas;

      $kelas->kode_kelas= $request->get('kode_kelas');
      $kelas->ruang_kelas= $request->get('ruang_kelas');
      $kelas->sub_kelas= $request->get('sub_kelas');

      $kelas->save();
      return redirect('show');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show()
  {
      $kelas= Kelas::all();
      return view('kelas.show', compact('kelas'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $kelas= Kelas::find($id);
    return view('kelas.update', compact('kelas'));
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
    $kelas= Kelas::find($id);

    $kelas->kode_kelas= $request->kode_kelas;
    $kelas->ruang_kelas= $request->ruang_kelas;
    $kelas->sub_kelas= $request->sub_kelas;

    $kelas->save();
    return redirect('show');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $kelas= Kelas::find($id);
      $kelas->delete();
      return redirect('show');
  }
}
