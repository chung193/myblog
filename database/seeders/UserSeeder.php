<?php

namespace Database\Seeders;

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
        //
        DB::table('users')->insert([
            'name' => chung193,
            'email' => 'chungvd.it@gmail.com',
            'password' => Hash::make('123123'),
        ]);
    }
}
