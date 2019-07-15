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
            'name' => 'Quan',
            'email' => 'quanvh@gmail.com',
            'password' => bcrypt('quan1234'),
        ]);
    }
}
