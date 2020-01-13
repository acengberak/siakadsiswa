@extends('admin')
@section('list-kelas')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card ">
                  <div class="card-header text-center">
                    Daftar Kelas
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Kode Kelas</th>
                        <th scope="col">Ruang Kelas</th>
                        <th scope="col">Sub Kelas</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($kelas as $room)
                      <tr>
                        <td>{{$room->kode_kelas}}</td>
                        <td>{{$room->ruang_kelas}}</td>
                        <td>{{$room->sub_kelas}}</td>
                        <td>
                            <a href="/show/edit/{{$room->id}}">Edit</a>
                        </td>
                        <td>
                          <form action="/show/{{$room->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="/show/delete/{{$room->id}}">Hapus</a>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-footer text-muted">
                  <a href="/daftar" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
