@extends('login.master')
          
@section('title') Adjective @stop
 
@section('content')
 

@if ($errors->has())
@foreach ($errors->all() as $error)
<div class='bg-danger alert'>{{ $error }}</div>
@endforeach
@endif
	
		<div class="valign-wrapper">
		<img class="mainlogo" src="img/adjective3.png"></div>
		
		<div class="login-text">
		A word naming an attribute of a noun, such as sweet, red, or technical.
		</div>
		
		{{ Form::open(['role' => 'form']) }}
		
		<div class="valign-wrapper">
		<div class="row">
		<div class="input-field col s12">
		{{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
		</div>
		</div>
		</div>
		
		<div class="valign-wrapper">
		<div class="row">
		<div class="input-field col s12">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
		</div>
		</div>
		</div>
		
		<div class="valign-wrapper">
		{{ Form::submit('Login', ['class' => 'btn']) }}
		</div>
    
        {{ Form::close() }}
        
@stop