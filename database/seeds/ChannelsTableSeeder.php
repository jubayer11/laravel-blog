<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $channel1=['title'=>'Laravel'];
        $channel2= ['title'=>'Vuejs'];
        $channel3= ['title'=>'boostrap'];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);



    }
}
