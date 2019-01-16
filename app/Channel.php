<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    protected $fillable=['title','id','content'];




    public function discussions()
    {
        return $this->hasMany('App\Disscussion');
    }


}
