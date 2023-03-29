<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){
        $user = Auth::user();
        return View('layout.main',['user'=>$user]);
    }

    public function home(){
        $user = Auth::user();
        return View('home',['user'=>$user]);
    }
}
