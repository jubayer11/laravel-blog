<?php

namespace App\Http\Controllers;

use App\Disscussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DiscussionsController extends Controller
{
    //

    public function create()
    {
      return view('discuss');

    }
    public function store()
    {
        $r=request();
       $this->validate($r,[

        'content'=>'required',
        'title'=>'required',


    ]);


        $discussion=Disscussion::create([
           'title'=> $r->title,
           'content'=>$r->content,

           'chanel_id'=>$r->channel_id,
           'user_id' => Auth::id(),
            'slug'=>str_slug($r->title)







       ]);

       Session::flash('success','Discussion successfull created');

         return redirect()->route('discussion',['slug'=>$discussion->slug]);
    }

    public function show($slug)
    {
        
        return view('discussions.show')->with('discussion',Disscussion::where('slug',$slug)->first());

    }



}
