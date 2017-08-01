@extends('layouts.crud')

@section('content')
    <h1>List A Pet</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('breed','Breed')}}
            {{Form::text('breed','',['class'=> 'form-control', 'placeholder' => 'Breed'])}}
        </div>        
        <div class="form-group">
            {{Form::label('age','Age (months)')}}
            {{Form::text('age','',['class'=> 'form-control', 'placeholder' => 'Age (months)'])}}
        </div>
            <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=> 'form-control', 'placeholder' => 'Name'])}}
        </div>  
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price','',['class'=> 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <!--<div class="form-group">
            {{Form::label('list','List Date')}}
            {{Form::date('list','',['class'=> 'form-control', 'placeholder' => 'List Date'])}}
        </div>-->              
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <a href="/dashboard" class="btn btn-default pull-right">Cancel</a>   
    {!! Form::close() !!}
@endsection