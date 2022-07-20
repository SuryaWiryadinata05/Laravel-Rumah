<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['title' => 'Tips Cepat Nikah' , 'content' => 'lorem ipsum'],
            ['title' => 'Haruskah menunda Nikah ?' , 'content' => 'lorem ipsum'],
            ['title' => 'Membangun Visi Misi Keluarga' , 'content' => 'lorem ipsum']
        ];

        DB::table('posts')->insert($sampel);
    }
}
