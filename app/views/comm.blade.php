@extends('layouts.master')
 
@section('title') Student Editing Details @stop
 
@section('content')
  
<div class="container">
<div class="row">
	<div class="col s12"><h4><i class="small mdi-communication-message"></i> Communications</h4>
	
	<ul class="collapsible" data-collapsible="accordion">
    <li>
    <div class="collapsible-header"><i class="mdi-communication-email"></i>Ray Stoneham</div>
    <div class="collapsible-body"><p>How are u today?</p>
    <p><button class="btn waves-effect waves-light" type="submit" name="action">Reply
    <i class="mdi-content-send right"></i></button></p></div> 

    <li>
      <div class="collapsible-header"><i class="mdi-communication-email"></i>Keeran Jamil</div>
      <div class="collapsible-body"><p>Coursework is going somewhere.</p>
      <p><button class="btn waves-effect waves-light" type="submit" name="action">Reply
    <i class="mdi-content-send right"></i>
  </button></p>
      
      </div>      
      </div>
    </li>
  </ul>
		
	
	</div>
	</div>
</div>


@stop