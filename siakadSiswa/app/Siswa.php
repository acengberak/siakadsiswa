<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
  protected $table ="siswa";
    protected $primaryKey = 'id_nis_siswa';
  protected $fillable=["nama_siswa","kelas","tanggal_lahir","tempat_lahir","alamat","no_telp","kota","foto_siswa"];
}
