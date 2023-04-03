<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Http\Requests\StoreMatkulRequest;
use App\Http\Requests\UpdateMatkulRequest;
use Illuminate\Support\Facades\Auth;

class MatkulController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('matkul', ['matkuls' => Matkul::index()], ['user'=>$user]);
    }

    public function show($semester)
    {
        return view('matkul', ['matkuls' => Matkul::getBySemester($semester)]);
    }
}
