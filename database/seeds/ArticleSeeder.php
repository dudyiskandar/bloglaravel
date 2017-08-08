<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
        	'judul' => 'Membuat System LOG dengan FLATE FILE',
        	'isi' =>'Beberapa kegunaan dari system log diantaranya selain untuk mengetahui informasi
                    visitor, log filejuga berguna untuk membantu analisis security Oke saya akan
                    langsung ke penjelasannya, kali ini saya akan menjelaskan log file dengan system
                    script PHP:
                     ',
            'bahasa_pem' => 'PHP',
        	'kategori' => 'Backend',
            'foto' => 'php.png',
        	'status' => '1',
        	'author' =>'1',
        	'tanggal' =>'2017-07-13 15:31:00.223000'
        	]);
    }
}
