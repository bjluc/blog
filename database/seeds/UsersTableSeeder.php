<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Luc Audemard',
            'email' => 'bjluc@bjluc.co.uk',
            'password' => bcrypt('secret')


            ]);
    }
}
