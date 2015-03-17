@extends('layouts.master')
 
@section('title') Student Landing Page @stop
 
@section('content')
  
<div class="container">
<div class="row">
	<div class="col s12"><h4><i class="small mdi-social-person"></i> {{ Auth::user()->username }}</h4>
	</div>

	<div class="col s12 m3 12"><blockquote><p><b>Programme</p><p>Email</p><p>Graduation</p></blockquote>
	</div>
	<div class="col s12 m3 12"><blockquote><p>Computing</p><p>hellou@hello.com</p><p>2015</p></blockquote></b>
	</div>
    <div class="col s12 m6 18">
    <img src="img/phototest.png" class="circle responsive-img" />
	</div>
	</div>
</div>
<br>

<div class="divider"></div>

<div class="container">
<div class="row">   
     <div class="col s12"><h4><i class="small mdi-communication-message"></i> Latest Messages</h4>
	 <ul class="collection">
	 <li class="collection-item avatar">
      <span class="title white-text"><div class="card-panel blue darken-1">Ray Stoneham</div></span>
      <p><i class="mdi-content-drafts"></i>Hello, how are u today?
      </p>
      <a href="#!" class="secondary-content"><i class="mdi-content-reply"></i></a>
    </li>
	 <ul class="collection">
	 <li class="collection-item avatar">
      <span class="title white-text"><div class="card-panel blue darken-1">Keeran Jamil</div></span>
      <p><i class="mdi-content-drafts"></i>How is the work on project
      </p>
      <a href="#!" class="secondary-content"><i class="mdi-content-reply"></i></a>
    </li>
             
                            
                            
     </div>
</div> 

<br>

<div class="divider"></div>

                   
                            

                       
 
@stop