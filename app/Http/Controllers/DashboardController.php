<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard')
            ->with('full_name', "RR. Denti, Syahla Syafiqah, Zahra Annisa");
    }
}
