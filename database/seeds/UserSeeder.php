<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' =>'Dudi Iskandar',
        	'username' =>'dudii12',
            'email' =>'dudyiskandar325@gmail.com',
            'avatar' =>'profile.png',
            'bgprofile' =>'bg.png',
            'description' =>'Berusahalah dan Kerja keras karena kesuksesan tidak dapat diraih bila bermalas malasan',
            'facebook' =>'dudyiskanda10',
        	'instagram' =>'dudyiskndr',
        	'password' =>bcrypt('dudii12')
        	]);
    }
}
