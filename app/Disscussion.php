<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disscussion extends Model
{
    //
    protected $fillable=['title','content','user_id','chanel_id','slug'];



    public function channel(){


        return $this->belongsTo('App\Channel');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }



    public function replies(){
        return $this->hasMany('App\Reply');
    }
    
}
