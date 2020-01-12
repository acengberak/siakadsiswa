<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    protected $table = 'mata_pelajaran';
    protected $fillable = ['id', 'kode_mapel', 'nama_mapel', 'kelas'];
}
