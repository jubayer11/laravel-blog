<?php

use App\Reply;
use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $r1=[
            'user_id'=>1,
            'discussions_id'=>1,
            'content'=>"some random comment"

        ];
        $r2=[
            'user_id'=>1,
            'discussions_id'=>2,
            'content'=>"some random comment and something"

        ];
        $r3=[
            'user_id'=>2,
            'discussions_id'=>1,
            'content'=>"some random comment and something bangladesh"

        ];
        $r4=[
            'user_id'=>2,
            'discussions_id'=>2,
            'content'=>"comment and something bangladesh"

        ];
        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);






    }
}
