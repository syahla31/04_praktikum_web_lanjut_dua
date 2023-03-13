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
                'SEMESTER' => 1
            ],
            [
                'id' => 2,
                'KODE MK' => 'RTI211002',
                'NAMA MATA KULIAH' => 'Konsep Teknologi Informasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 1
            ],
            [
                'id' => 3,
                'KODE MK' => 'RTI211003',
                'NAMA MATA KULIAH' => 'Critical Thinking dan Problem Solving',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 1
            ],
            [
                'id' => 4,
                'KODE MK' => 'RTI211004',
                'NAMA MATA KULIAH' => 'Matematika 1',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 1
            ],
            [
                'id' => 5,
                'KODE MK' => 'RTI211005',
                'NAMA MATA KULIAH' => 'Bahasa Inggris 1',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 1
            ],
            [
                'id' => 6,
                'KODE MK' => 'RTI211006',
                'NAMA MATA KULIAH' => 'Dasar Pemrograman',
                'SKS' => 2,
                'JAM' => 4,
                'SE' => 1
            ],
            [
                'id' => 7,
                'KODE MK' => 'RTI211007',
                'NAMA MATA KULIAH' => 'Pratikum Dasar Pemrograman',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 1
            ],
            [
                'id' => 8,
                'KODE MK' => 'RTI211008',
                'NAMA MATA KULIAH' => 'Keselamatan dan Kesehatan Kerja',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 1
            ],
            [
                'id' => 9,
                'KODE MK' => 'RTI212001',
                'NAMA MATA KULIAH' => 'Agama',
                'SKS' => 2,
                'JAM' => 2,
                'SEMESTER' => 2
            ],
            [
                'id' => 10,
                'KODE MK' => 'RTI212002',
                'NAMA MATA KULIAH' => 'Matematika 2',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 11,
                'KODE MK' => 'RTI212003',
                'NAMA MATA KULIAH' => 'Bahasa Inggris 2',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 12,
                'KODE MK' => 'RTI212004',
                'NAMA MATA KULIAH' => 'Sistem Operasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 13,
                'KODE MK' => 'RTI212005',
                'NAMA MATA KULIAH' => 'Rekayasa Perangkat Lunak',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 14,
                'KODE MK' => 'RTI212006',
                'NAMA MATA KULIAH' => 'Basis Data',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 15,
                'KODE MK' => 'RTI212007',
                'NAMA MATA KULIAH' => 'Praktikum Basis Data',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 16,
                'KODE MK' => 'RTI212008',
                'NAMA MATA KULIAH' => 'Algoritma dan Struktur Data',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 17,
                'KODE MK' => 'RTI212009',
                'NAMA MATA KULIAH' => 'Praktikum Algoritma dan Struktur Data',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 18,
                'KODE MK' => 'RTI212010',
                'NAMA MATA KULIAH' => 'Ilmu Komunikasi dan Organisasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 19,
                'KODE MK' => 'RTI212010',
                'NAMA MATA KULIAH' => 'Ilmu Komunikasi dan Organisasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 20,
                'KODE MK' => 'RTI213001',
                'NAMA MATA KULIAH' => 'Desain Antarmuka',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 21,
                'KODE MK' => 'RTI213002',
                'NAMA MATA KULIAH' => 'Sistem Manajemen Kualitas',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 22,
                'KODE MK' => 'RTI213003',
                'NAMA MATA KULIAH' => 'Kecerdasan Buatan',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 23,
                'KODE MK' => 'RTI213004',
                'NAMA MATA KULIAH' => 'Desain dan Pemrograman Web',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 3
            ],
            [
                'id' => 24,
                'KODE MK' => 'RTI213005',
                'NAMA MATA KULIAH' => 'Basis Data Lanjut',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 3
            ],
            [
                'id' => 25,
                'KODE MK' => 'RTI213006',
                'NAMA MATA KULIAH' => 'Matematika 3',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 26,
                'KODE MK' => 'RTI213007',
                'NAMA MATA KULIAH' => 'Pemrograman Berbasis Objek',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 27,
                'KODE MK' => 'RTI213008',
                'NAMA MATA KULIAH' => 'Praktikum Pemrograman Berbasis Objek',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 3
            ],
            [
                'id' => 28,
                'KODE MK' => 'RTI214001',
                'NAMA MATA KULIAH' => 'Kewarganegaraan',
                'SKS' => 2,
                'JAM' => 2,
                'SEMESTER' => 4
            ],
            [
                'id' => 29,
                'KODE MK' => 'RTI214002',
                'NAMA MATA KULIAH' => 'Analisis dan Desain Berorientasi Objek',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
            [
                'id' => 30,
                'KODE MK' => 'RTI214003',
                'NAMA MATA KULIAH' => 'Manajemen Proyek',
                'SKS' => 2,
                'JAM' => 3,
                'SEMESTER' => 4
            ],
            [
                'id' => 31,
                'KODE MK' => 'RTI214004',
                'NAMA MATA KULIAH' => 'Proyek 1',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 4
            ],
            [
                'id' => 32,
                'KODE MK' => 'RTI214005',
                'NAMA MATA KULIAH' => 'Business Intelligence',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
            [
                'id' => 33,
                'KODE MK' => 'RTI214006',
                'NAMA MATA KULIAH' => 'Jaringan Komputer',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
            [
                'id' => 34,
                'KODE MK' => 'RTI214007',
                'NAMA MATA KULIAH' => 'Praktikum Jaringan Komputer',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
            [
                'id' => 35,
                'KODE MK' => 'RTI214008',
                'NAMA MATA KULIAH' => 'Pemrograman Web Lanjut',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 4
            ],
            [
                'id' => 36,
                'KODE MK' => 'RTI214009',
                'NAMA MATA KULIAH' => 'Statistik Komputasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
        ];
        DB::table('matkuls')->insert($data);
    }
}
