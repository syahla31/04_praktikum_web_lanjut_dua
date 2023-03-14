<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Http\Requests\StoreMatkulRequest;
use App\Http\Requests\UpdateMatkulRequest;

class MatkulController extends Controller
{
    public function index(){
        $matkuls = Matkul::all();
        return view('matkul', compact('matkuls'));
    }
}
