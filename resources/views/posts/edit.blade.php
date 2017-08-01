@extends('layouts.crud')

@section('content')
    <h1>Edit Pet Details</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('breed','Breed')}}
            {{Form::text('breed', $post->breed, ['class'=> 'form-control', 'placeholder' => 'Breed'])}}
        </div>        
        <div class="form-group">
            {{Form::label('age','Age (months)')}}
            {{Form::text('age', $post->age ,['class'=> 'form-control', 'placeholder' => 'Age (months)'])}}
        </div>
            <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name', $post->name ,['class'=> 'form-control', 'placeholder' => 'Name'])}}
        </div>  
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price', $post->price ,['class'=> 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <!--<div class="form-group">
            {{Form::label('list','List Date')}}
            {{Form::date('list', $post->created_at, ['class'=> 'form-control', 'placeholder' => $post->created_at])}}
        </div>-->         
        <div class="form-group">
            {{Form::label('sale','Sale Date')}}
            {{Form::date('sale', $post->sale, ['class'=> 'form-control', 'placeholder' => $post->sale])}}
        </div>           

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}        
        <a href="/dashboard" class="btn btn-default">Cancel</a>   
    {!! Form::close() !!}

@endsection