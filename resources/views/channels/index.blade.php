@extends('layouts.app')

@section('content')

                <div class="panel panel-default">
                    <div class="panel-heading">Channels</div>

                    <div class="panel-body">
                         <table class="table table hover">
                             <thead>
                               <tr>
                                 <th>Name</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                               </tr>
                             </thead>
                             <tbody>
                             @foreach ($channels as $channel)
                                 <tr>
                                     <td>{{$channel->title }}</td>
                                     <td><a href="{{route('channels.edit',['channel'=>$channel->id])}}" class="btn btn-xs btn-info">EDIT</a></td>
                                     
                                     
                                     <td>
                                         <form action="{{ route('channels.destroy',['channel'=>$channel->id])}}" method="post">
                                             {{ csrf_field() }}
                                             {{method_field('DELETE')}}
                                         
                                             <button class="btn btn-xs btn-danger" type="submit">Destroy</a> </button>

                                         </form>

                                     </td>

                                 </tr>

                                 @endforeach


                             </tbody>
                           </table>

                    </div>

    </div>
@endsection
