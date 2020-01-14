@extends('admin')

@section('siswa.update_siswa')




<h3>update data</h3>
<form action="/tampilkan/update/{{$data->id_nis_siswa}}" method="post">
  {{csrf_field()}}
  {{method_field('PUT')}}


    <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header text-center">
            <h3>Input Siswa</h3>
          </div>
          <div class="card-body">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama Siswa</label>
              <input type="text"  name="nama_siswa" value="{{$data->nama_siswa}}" class="form-control" id="inputEmail4">
            </div>
          <div class="form-group col-md-6">
              <label for="inputEmail4">kelas</label>
                <select class="form-control" name="kelas">
                  <option value="{{$data->kelas}}">X</option>
                  <option value="{{$data->kelas}}">XI</option>
                  <option value="{{$data->kelas}}">XII</option>
                </select>
              </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Tanggal Lahir</label>
              <input type="text"  name="tanggal_lahir" value="{{$data->tanggal_lahir}}" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">tempat Lahir</label>
              <input type="text"  name="tempat_lahir"  value="{{$data->tempat_lahir}}"  class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">alamat</label>
              <input type="text"  name="alamat" value="{{$data->alamat}}" class="form-control" id="inputEmail4">
            </div>

            <div class="form-group col-md-6">
              <label for="inputPassword4">No Hp</label>
              <input type="text" name="no_telp" value="{{$data->no_telp}}"class="form-control" id="inputPassword4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">kota</label>
              <input type="text"  name="kota"value="{{$data->kota}}" class="form-control" id="inputEmail4">
            </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">foto siswa</label>
            <input type="file" name="foto_siswa" class="form-control" id="inputAddress">
          </div>

        </div>
        <div class="card-footer text-muted">
          Selamat Datang
      </div>
      </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
          </div>


        </div>

      </div>



@endsection
