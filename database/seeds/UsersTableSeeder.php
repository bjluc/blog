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
        $user = App\User::create([
            'name' => 'Luc Audemard',
            'email' => 'bjluc@bjluc.co.uk',
            'password' => bcrypt('secret'),
            'admin' => 1


            ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'loem ipsum dolor sit amet, consector addiffkdfkdfgkdf mcdkrgosdgs,jirga.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'

            ]);


    }
}
