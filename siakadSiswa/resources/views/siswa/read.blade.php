@extends('admin')

@section('main-content')



  <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <table class="table table-dark">
            <thead>
              <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">kelas</th>
                  <th scope="col">tanggal_lahir</th>
                  <th scope="col">tempat_lahir</th>
                  <th scope="col">alamat</th>
                  <th scope="col">no telfon</th>
                  <th scope="col">kota</th>
                  <th scope="col">foto siswa</th>
                  <th scope="col"><a style="margin-left: 80px;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $item)
              <tr>
                  <td scope="row">{{$item->id_nis_siswa}}</td>
                  <td>{{$item->nama_siswa}}</td>
                  <td>{{$item->kelas}}</td>
                  <td>{{$item->tanggal_lahir}}</td>
                  <td>{{$item->tempat_lahir}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->no_telp}}</td>
                  <td>{{$item->kota}}</td>
                  <td>{{$item->foto_siswa}}</td>
                  <td>
                    <img src="file/{{$item->foto_siswa}}" alt="" height="50" width="50">
                  </td>
                  <td>
                    <form action="/tampilkan/{{$item->id_nis_siswa}}" method="post">
                      <a href="/tampilkan/edit/{{$item->id_nis_siswa}}">Edit</a>
                    </form>
                  </td>
                  <td>
                    <form action="/tampilkan/{{$item->id_nis_siswa}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <a style="margin-left: 50px;"> <button type="submit" class="btn btn-danger " value="delete">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
          </tbody>
        </table>
        <a href="/tampil">tambah data</a>

      </div>
    </div>
  </div>
</div>
@endsection
