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
}
