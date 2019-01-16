<?php

use App\Disscussion;
use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $t1="about laravel";
        $t2="about vuejs";
        $t3="about boostrap";

        $d1=[
            'title'=>$t1,
            'content'=>"laravel boss",
            'chanel_id'=>1,
            'user_id'=>2,
            'slug'=>str_slug($t1)


        ];

        $d2=[
            'title'=>$t2,
            'content'=>"Vuejs boss",
            'chanel_id'=>2,
            'user_id'=>1,
            'slug'=>str_slug($t2)


        ];
        $d3=[
            'title'=>$t3,
            'content'=>"boostrap boss",
            'chanel_id'=>3,
            'user_id'=>1,
            'slug'=>str_slug($t3)


        ];

        Disscussion::create($d1);
        Disscussion::create($d2);
        Disscussion::create($d3);





    }
}
