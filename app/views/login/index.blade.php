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
        <input id="Username" type="text">
        <label for="username">Username</label>
		</div>
		</div>
		</div>
		
		<div class="valign-wrapper">
		<div class="row">
		<div class="input-field col s12">
		<input id="password" type="password">
		<label for="password">Password</label>
		</div>
		</div>
		</div>
		
		<div class="valign-wrapper">
		{{ Form::submit('Login', ['class' => 'btn']) }}
		</div>
    
        {{ Form::close() }}
        
@stop