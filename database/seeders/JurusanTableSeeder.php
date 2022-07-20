<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class JurusanTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $jurusan = [
        ['kode_mata_pelajaran' => 'B01' , 'nama_mata_pelajaran' => 'B.indonesia' , 'semester' => 1
        , 'jurusan' => 'Informatika'],
        ['kode_mata_pelajaran' => 'B02' , 'nama_mata_pelajaran' => 'B.inggris' , 'semester' => 1
        , 'jurusan' => 'Topologi Dan Jaringan'],
        ['kode_mata_pelajaran' => 'A01' , 'nama_mata_pelajaran' => 'B.sunda' , 'semester' => 2
        , 'jurusan' => 'Hukum']
       ];

       DB::table('jurusan')->insert($jurusan); 
    }
}
