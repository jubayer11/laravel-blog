<?php

namespace App\Http\Controllers;

use App\Disscussion;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    //


public function index()
{
    $discussions=Disscussion::orderBy('created_at','desc')->paginate(3);


    return view('forum',['discussions'=>$discussions]);
}
}

