<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    public static function index()
    {
        return Matkul::paginate(8);
    }
    
    public static function getBySemester($semester)
    {
        return Matkul::where('SEMESTER', $semester)
            ->paginate(5);
    }
}
