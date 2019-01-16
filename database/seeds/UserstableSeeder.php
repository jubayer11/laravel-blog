<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([

            'name'=>'admin',
            'password'=>bcrypt('admin'),
            'email'=>'ahmed119475@gmail.com',
            'admin'=>1,
            'avatar'=>asset('avatars/avatar.png')




        ]);


        App\User::create([

            'name'=>'jubayer',
            'password'=>bcrypt('115487'),
            'email'=>'ahmedjubayer54@gmail.com@gmail.com',

            'avatar'=>asset('avatars/avatar.png')




        ]);

    }
}
