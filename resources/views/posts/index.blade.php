@extends('layouts.crud')

@section('content')
    <h4>All Pets</h4>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
            <!-- Load edit screen when click on listing # 
            <h3>Listing # <a href="/posts/{{$post->id}}/edit">{{$post ->id}} - Breed : {{$post->breed}}</a></h3>-->
            <h3>Listing # {{$post ->id}} - Breed : {{$post->breed}}</h3>
                <ul>
                <li>Price : {{$post ->price}}</li>
                <li>Age (months) : {{$post->age}}</li>
                <li>Name : {{$post->name}}</li>
                </ul>
                <!--<small>Listed on {{$post->created_at}} by {{$post->user->name}}</small>-->
                <small>Listed on {{ $post->created_at->format('d M Y - H:i:s') }} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
