@extends('admin')

@section('main-content')
{{-- Input Button --}}
<div class="container-fluid">
    {{-- tittle --}}
    <div class="tittle pt-4 ml-2">
        <h5>Data Mata Pelajaran Kelas I</h5>
    </div>
    <div class="input pt-2 ml-2">
        {{-- modal Input Trigger --}}
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">Input Mata
            Pelajaran</button>
    </div>

    {{-- MODAL --}}
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title ml-auto" id="exampleModalLabel">Masukkan Mata Pelajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/mapel" method="post">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    {{ csrf_field() }}
                                    {{-- <input type="hidden" name="id" id=""> --}}
                                    {{-- nama --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="kode_mapel">Kode Mata Pelajaran</label>
                                        <input type="text" name="kode_mapel" id="kode_mapel" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Contoh: M0119BIO</small>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    {{-- Alamat --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="kode_mapel">Nama Mata Pelajaran</label>
                                        <input type="text" name="nama_mapel" id="nama_mapel" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Masukkan Mata Pelajaran</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    {{-- Usia --}}

                                    <div class="form-group disable">
                                        <label class="font-weight-bold" for="kelas">Kelas</label>
                                        <input type="text" name="kelas" id="kelas" class="form-control"
                                            aria-describedby="helpId" value="1">
                                        <small id="helpId" class="text-muted">Masukkan Kelas</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            {{-- save alert --}}
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
                </form>
            </div>
        </div>
    </div>
</div>

<div class="table pt-3 mx-2">
    {{-- table --}}
    <table class="table table-striped pt-4">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kode Mapel</th>
                <th scope="col">Nama Mapel</th>
                <th scope="col">Kelas</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->kode_mapel}}</td>
                <td>{{$item->nama_mapel}}</td>
                <td>{{$item->kelas}}</td>
                <td class="d-flex"><button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#edit{{$item->id}}"><i class="fas fa-edit text-gray-300 mr-2"></i>Ubah</button>
                <form action="/mapel/{{$item->id}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('delete')}}
                    <button class="btn btn-danger " onclick="return confirm('Anda Yakin Menghapus Data {{$item->nama_mapel}}')" type="submit"><i class="fas fa-check text-gray-300 mr-2"></i>Hapus</button>
                </form></td>
                   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    {{-- MODAL --}}
    @foreach ($data as $item)
    <div class="modal fade" id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title ml-auto" id="exampleModalLabel">Masukkan Mata Pelajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/mapel/update/{{$item->id}}" method="post">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    {{-- <input type="hidden" name="id" id=""> --}}
                                    {{-- nama --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="kode_mapel">Kode Mata Pelajaran</label>
                                        <input type="text" name="kode_mapel" id="kode_mapel" class="form-control"
                                            placeholder="" aria-describedby="helpId" value="{{$item->kode_mapel}}">
                                        <small id="helpId" class="text-muted">Contoh: M0119BIO</small>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    {{-- Alamat --}}
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="kode_mapel">Nama Mata Pelajaran</label>
                                        <input type="text" name="nama_mapel" id="nama_mapel" class="form-control"
                                            placeholder="" aria-describedby="helpId" value="{{$item->nama_mapel}}">
                                        <small id="helpId" class="text-muted">Masukkan Mata Pelajaran</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    {{-- Usia --}}

                                    <div class="form-group disable">
                                        <label class="font-weight-bold" for="kelas">Kelas</label>
                                        <input type="text" name="kelas" id="kelas" class="form-control"
                                            aria-describedby="helpId" value="{{$item->kelas}}">
                                        <small id="helpId" class="text-muted">Masukkan Kelas</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            {{-- save alert --}}
                            <script>
                                var msg = '{{Session::get('alert')}}';
                                var exist = '{{Session::has('alert')}}';
                                if (exist) {alert(msg);}
                            </script>
                            {{-- end alert  --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach


@endsection
