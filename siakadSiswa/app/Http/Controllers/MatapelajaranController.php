<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matapelajaran;

class MatapelajaranController extends Controller
{
    public function index()
    {
        return view('dashboard-mapel');
    }

    public function read()
    {
        $data = Matapelajaran::all();
        return view('dashboard-mapel', compact('data'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'kode_mapel' => 'required',
            'nama_mapel' => 'required',
            'kelas' => 'required',
        ]);

        $data = new Matapelajaran;

        $data->kode_mapel = $request->kode_mapel;
        $data->nama_mapel = $request->nama_mapel;
        $data->kelas = $request->kelas;

        $data->save();
        return redirect()->back()->with('alert', 'Data Tersimpan!');
    }

    public function edit($id)
    {
        $data = Matapelajaran::find($id);
        return view('dashboard-mapel', compact('data'));
    }

    public function update(Request  $request, $id)
    {
        $data = Matapelajaran::find($id);

        $data->kode_mapel = $request->kode_mapel;
        $data->nama_mapel = $request->nama_mapel;
        $data->kelas = $request->kelas;

        $data->save();
        return redirect()->back()->with('alert', 'Data Terudapte');
    }

    public function destroy($id)
    {
        $data = Matapelajaran::find($id);
        $data->delete();

        return redirect('mapel');
    }
}
