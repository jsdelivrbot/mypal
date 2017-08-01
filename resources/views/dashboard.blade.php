@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href="/posts/create" class="btn btn-xs btn-primary pull-right">List A Pet</a></div>

                <div class="panel-body">
                @include('inc.messages')
                    <h3>Your Pet Listing</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>List #</th>
                                <th>Breed</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Price</th>
                                <th>List Date</th>
                                <th>Sale Date</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>                      
                                <td>{{$post ->id}}</td>
                                <td>{{$post->breed}}</td>
                                <td>{{$post->name}}</td>
                                <td>{{$post->age}}</td>
                                <td>{{$post->price}}</td>
                                <!--<td>{{$post->created_at->format('d M Y - H:i:s') }}</td>-->
                                <td>{{$post->created_at->format('d M Y - H:i:s') }}</td>
                                <td>{{$post->sale}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-default">Edit</td>
                                <td></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                                    {!!Form::close()!!}                                
                                </td>                                                                   
                            </tr>
                            @endforeach
                        </table>
                    @else
                    <p>You have no pet listed</p>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
