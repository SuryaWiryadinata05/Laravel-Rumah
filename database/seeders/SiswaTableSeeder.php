<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['nis' => 1001 , 'nama_siswa' => 'Surya Wiryadinata' , 'alamat_siswa' => 'Bandung West Java'
            , 'tanggal_lahir' => '2004-09-05'],
            ['nis' => 1002 , 'nama_siswa' => 'Uy Scutti' , 'alamat_siswa' => 'Jakarta'
            , 'tanggal_lahir' => '2003-12-07'],
            ['nis' => 1003 , 'nama_siswa' => 'Wildan Aja' , 'alamat_siswa' => 'Bandung West Java'
            , 'tanggal_lahir' => '2005-03-19']
        ];

        DB::table('siswa')->insert($siswa);
    }
}
