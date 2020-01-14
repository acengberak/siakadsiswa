@extends('admin')
@section('update')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card ">
                  <div class="card-header text-center">
                    Daftarkan Kelas Anda!
                  </div>
                  <div class="card-body">
                    <form action="/daftar-kelas/update/{{$kelas->id}}" method="POST">
                      {{csrf_field()}}
                      {{method_field('PUT')}}
                      <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Kode Kelas</label>
                        <input type="text" name="kode_kelas" class="form-control" value="{{$kelas->kode_kelas}}">
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="exampleInputPassword1">Ruang Kelas</label>
                        <input type="text" name="ruang_kelas" class="form-control" value="{{$kelas->ruang_kelas}}">
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="exampleInputPassword1">Sub Kelas</label>
                        <input type="text" name="sub_kelas" class="form-control" value="{{$kelas->sub_kelas}}">
                      </div>
                      <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">Daftar!</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
