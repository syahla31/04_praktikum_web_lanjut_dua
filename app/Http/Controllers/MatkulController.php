<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Http\Requests\StoreMatkulRequest;
use App\Http\Requests\UpdateMatkulRequest;

class MatkulController extends Controller
{
    public function index(){
        return view('matkul', ['matkuls' => Matkul::index()]);
    }

    public function show($semester)
    {
        return view('matkul', ['matkuls' => Matkul::getBySemester($semester)]);
    }
}
