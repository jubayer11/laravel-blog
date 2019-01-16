@extends('layouts.app')

@section('content')
    @foreach($discussions as $d)
        <div class="panel panel-default">

            <div class="panel-heading">
                <img src="{{$d->user->avatar}}" alt="no" width="70px" height="70px">&nbsp;&nbsp;
                <span>{{$d->user->name}}</span>
           <a href="{{route('discussion',['slug'=>$d->slug])}}" class="btn btn-default pull-right">view</a>



            </div>

            <div class="panel-body">
                <h4 class="text-center">
                    {{$d->title}}

                </h4>
                <p class="text-center">
                    {{str_limit($d->content,50)}}

                </p>



            </div>
            <div class="panel-footer">
                <p>

                    {{$d->replies->count()}}Replies
                </p>





            </div>


        </div>


    @endforeach
    <div class="textcenter">

        {{$discussions->links( )}}

    </div>



@endsection
