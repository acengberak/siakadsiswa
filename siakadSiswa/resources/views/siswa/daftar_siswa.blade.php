@extends('admin')

@section('siswa.daftar_siswa')



<form action="/tampil" method="post" enctype="multipart/form-data">
  {{csrf_field()}}


    <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card ">
          <div class="card-header text-center">
            <h3>Input Siswa</h3>
          </div>
          <div class="card-body">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama Siswa</label>
              <input type="text"  name="nama_siswa" class="form-control" id="inputEmail4">
            </div>
          <div class="form-group col-md-6">
              <label for="inputEmail4">kelas</label>
                <select class="form-control" name="kelas">
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
              </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Tanggal Lahir</label>
              <input type="text"  name="tanggal_lahir" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">tempat Lahir</label>
              <input type="text"  name="tempat_lahir" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">alamat</label>
              <input type="text"  name="alamat" class="form-control" id="inputEmail4">
            </div>

            <div class="form-group col-md-6">
              <label for="inputPassword4">No Hp</label>
              <input type="text" name="no_telp" class="form-control" id="inputPassword4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">kota</label>
              <input type="text"  name="kota" class="form-control" id="inputEmail4">
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
        <script>
            var msg = '{{Session::get('
            alert ')}}';
            var exist = '{{Session::has('
            alert ')}}';
            if (exist) {
                alert(msg);
            }

        </script>
        {{-- end alert  --}}
          </div>


        </div>

      </div>



@endsection
