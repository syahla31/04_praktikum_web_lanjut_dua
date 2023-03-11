<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'KODE MK' => 'RTI211001',
                'NAMA MATA KULIAH' => 'Pancasila',
                'SKS' => 2,
                'JAM' => 2,
                'SEM' => 1
            ],
            [
                'id' => 2,
                'KODE MK' => 'RTI211006',
                'NAMA MATA KULIAH' => 'Dasar Pemrograman',
                'SKS' => 2,
                'JAM' => 4,
                'SE' => 1
            ],
            [
                'id' => 3,
                'KODE MK' => 'RTI211007',
                'NAMA MATA KULIAH' => 'Pratikum Dasar Pemrograman',
                'SKS' => 3,
                'JAM' => 6,
                'SEM' => 1
            ],
            [
                'id' => 4,
                'KODE MK' => 'RTI211003',
                'NAMA MATA KULIAH' => 'Critical Thinking dan Problem Solving',
                'SKS' => 2,
                'JAM' => 4,
                'SEM' => 1
            ],
            [
                'id' => 5,
                'KODE MK' => 'RTI211002',
                'NAMA MATA KULIAH' => 'Konsep Teknologi Informasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEM' => 1
            ],
            [
                'id' => 6,
                'KODE MK' => 'RTI211004',
                'NAMA MATA KULIAH' => 'Matematika 1',
                'SKS' => 3,
                'JAM' => 6,
                'SEM' => 1
            ],
            [
                'id' => 7,
                'KODE MK' => 'RTI211005',
                'NAMA MATA KULIAH' => 'Bahasa Inggris 1',
                'SKS' => 2,
                'JAM' => 4,
                'SEM' => 1
            ],
            [
                'id' => 8,
                'KODE MK' => 'RTI211008',
                'NAMA MATA KULIAH' => 'Keselamatan dan Kesehatan Kerja',
                'SKS' => 2,
                'JAM' => 4,
                'SEM' => 1
            ],
        ];
        DB::table('matkuls')->insert($data);
    }
}
