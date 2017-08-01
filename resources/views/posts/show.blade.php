@extends('layouts.app')

@section('content')
    <h1>Invoice #{{$post->id}}</h1>
    <div>
        breed- {{$post->breed}}</br>      
        age- {{$post->age}}</br>
        name- {{$post->name}}</br>
        price- {{$post->price}}</br>
        list- {{$post->list}}</br>
        sale- {{$post->sale}}</br>
    </div>
        <hr>
        <!--<small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>-->
        <small>Posted on {{date('M j, Y H:i', strtotime($post->created_at))}} by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/posts" class="btn btn-default">Go Back</a>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
@endsection