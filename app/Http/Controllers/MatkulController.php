<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Http\Requests\StoreMatkulRequest;
use App\Http\Requests\UpdateMatkulRequest;

class MatkulController extends Controller
{
    public function index(){
        $matkuls = Matkul::paginate(8);
        return view('matkul', compact('matkuls'));
    }
}
