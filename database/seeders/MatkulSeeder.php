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
                'KODE_MK' => 'RTI211001',
                'NAMA_MATA_KULIAH' => 'Pancasila',
                'SKS' => 2,
                'JAM' => 2,
                'SEMESTER' => 1
            ],
            [
                'id' => 2,
                'KODE_MK' => 'RTI211002',
                'NAMA_MATA_KULIAH' => 'Konsep Teknologi Informasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 1
            ],
            [
                'id' => 3,
                'KODE_MK' => 'RTI211003',
                'NAMA_MATA_KULIAH' => 'Critical Thinking dan Problem Solving',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 1
            ],
            [
                'id' => 4,
                'KODE_MK' => 'RTI211004',
                'NAMA_MATA_KULIAH' => 'Matematika 1',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 1
            ],
            [
                'id' => 5,
                'KODE_MK' => 'RTI211005',
                'NAMA_MATA_KULIAH' => 'Bahasa Inggris 1',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 1
            ],
            [
                'id' => 6,
                'KODE_MK' => 'RTI211006',
                'NAMA_MATA_KULIAH' => 'Dasar Pemrograman',
                'SKS' => 2,
                'JAM' => 4,
                'SE' => 1
            ],
            [
                'id' => 7,
                'KODE_MK' => 'RTI211007',
                'NAMA_MATA_KULIAH' => 'Pratikum Dasar Pemrograman',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 1
            ],
            [
                'id' => 8,
                'KODE_MK' => 'RTI211008',
                'NAMA_MATA_KULIAH' => 'Keselamatan dan Kesehatan Kerja',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 1
            ],
            [
                'id' => 9,
                'KODE_MK' => 'RTI212001',
                'NAMA_MATA_KULIAH' => 'Agama',
                'SKS' => 2,
                'JAM' => 2,
                'SEMESTER' => 2
            ],
            [
                'id' => 10,
                'KODE_MK' => 'RTI212002',
                'NAMA_MATA_KULIAH' => 'Matematika 2',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 11,
                'KODE_MK' => 'RTI212003',
                'NAMA_MATA_KULIAH' => 'Bahasa Inggris 2',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 12,
                'KODE_MK' => 'RTI212004',
                'NAMA_MATA_KULIAH' => 'Sistem Operasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 13,
                'KODE_MK' => 'RTI212005',
                'NAMA_MATA_KULIAH' => 'Rekayasa Perangkat Lunak',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 14,
                'KODE_MK' => 'RTI212006',
                'NAMA_MATA_KULIAH' => 'Basis Data',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 15,
                'KODE_MK' => 'RTI212007',
                'NAMA_MATA_KULIAH' => 'Praktikum Basis Data',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 16,
                'KODE_MK' => 'RTI212008',
                'NAMA_MATA_KULIAH' => 'Algoritma dan Struktur Data',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 17,
                'KODE_MK' => 'RTI212009',
                'NAMA_MATA_KULIAH' => 'Praktikum Algoritma dan Struktur Data',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 18,
                'KODE_MK' => 'RTI212010',
                'NAMA_MATA_KULIAH' => 'Ilmu Komunikasi dan Organisasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 19,
                'KODE_MK' => 'RTI212010',
                'NAMA_MATA_KULIAH' => 'Ilmu Komunikasi dan Organisasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 2
            ],
            [
                'id' => 20,
                'KODE_MK' => 'RTI213001',
                'NAMA_MATA_KULIAH' => 'Desain Antarmuka',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 21,
                'KODE_MK' => 'RTI213002',
                'NAMA_MATA_KULIAH' => 'Sistem Manajemen Kualitas',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 22,
                'KODE_MK' => 'RTI213003',
                'NAMA_MATA_KULIAH' => 'Kecerdasan Buatan',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 23,
                'KODE_MK' => 'RTI213004',
                'NAMA_MATA_KULIAH' => 'Desain dan Pemrograman Web',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 3
            ],
            [
                'id' => 24,
                'KODE_MK' => 'RTI213005',
                'NAMA_MATA_KULIAH' => 'Basis Data Lanjut',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 3
            ],
            [
                'id' => 25,
                'KODE_MK' => 'RTI213006',
                'NAMA_MATA_KULIAH' => 'Matematika 3',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 26,
                'KODE_MK' => 'RTI213007',
                'NAMA_MATA_KULIAH' => 'Pemrograman Berbasis Objek',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 3
            ],
            [
                'id' => 27,
                'KODE_MK' => 'RTI213008',
                'NAMA_MATA_KULIAH' => 'Praktikum Pemrograman Berbasis Objek',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 3
            ],
            [
                'id' => 28,
                'KODE_MK' => 'RTI214001',
                'NAMA_MATA_KULIAH' => 'Kewarganegaraan',
                'SKS' => 2,
                'JAM' => 2,
                'SEMESTER' => 4
            ],
            [
                'id' => 29,
                'KODE_MK' => 'RTI214002',
                'NAMA_MATA_KULIAH' => 'Analisis dan Desain Berorientasi Objek',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
            [
                'id' => 30,
                'KODE_MK' => 'RTI214003',
                'NAMA_MATA_KULIAH' => 'Manajemen Proyek',
                'SKS' => 2,
                'JAM' => 3,
                'SEMESTER' => 4
            ],
            [
                'id' => 31,
                'KODE_MK' => 'RTI214004',
                'NAMA_MATA_KULIAH' => 'Proyek 1',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 4
            ],
            [
                'id' => 32,
                'KODE_MK' => 'RTI214005',
                'NAMA_MATA_KULIAH' => 'Business Intelligence',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
            [
                'id' => 33,
                'KODE_MK' => 'RTI214006',
                'NAMA_MATA_KULIAH' => 'Jaringan Komputer',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
            [
                'id' => 34,
                'KODE_MK' => 'RTI214007',
                'NAMA_MATA_KULIAH' => 'Praktikum Jaringan Komputer',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
            [
                'id' => 35,
                'KODE_MK' => 'RTI214008',
                'NAMA_MATA_KULIAH' => 'Pemrograman Web Lanjut',
                'SKS' => 3,
                'JAM' => 6,
                'SEMESTER' => 4
            ],
            [
                'id' => 36,
                'KODE_MK' => 'RTI214009',
                'NAMA_MATA_KULIAH' => 'Statistik Komputasi',
                'SKS' => 2,
                'JAM' => 4,
                'SEMESTER' => 4
            ],
        ];
        DB::table('matkuls')->insert($data);
    }
}
