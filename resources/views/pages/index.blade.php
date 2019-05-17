@extends('layouts.app')
@section('content')
      <h1>Welcome </h1>
    {{ Form::open(['action'=> 'ATGController@store','method'=>'POST'])}}
       <div class="form-group">
          {{Form::label('title','name')}}
          {{Form::text('title','',['class'=>'form-control','placeholder'=>''])}}
        </div> 
        <div class="form-group">
          {{Form::label('title','Pincode')}}
          {{Form::text('title','',['class'=>'form-control','placeholder'=>''])}}
        </div>
        <div class="form-group">
          {{Form::label('title','Email')}}
          {{Form::text('title','',['class'=>'form-control','placeholder'=>''])}}
        </div>     
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {{ Form::close() }}

@endsection       