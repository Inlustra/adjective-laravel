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
	 <ul class="collection with-header">
        <li class="collection-header"><h4>Ray Stoneham</h4></li>
        <li class="collection-item"><div>How are you</div></li>     
		<li class="collection-item"><div>I'm good and you<a href="#!" class="secondary-content"><i class="mdi-content-send"></i></a></div></li>
	 </ul>
	 <div class="col s12"><h4><i class="small mdi-communication-message"></i> Latest Messages</h4>
	 <ul class="collection with-header">
        <li class="collection-header"><h4>Keeran Jamiil</h4></li>
        <li class="collection-item"><div>Coursework is it done</div></li>     
		<li class="collection-item"><div>Still nothing<a href="#!" class="secondary-content"><i class="mdi-content-send"></i></a></div></li>
	 </ul>
	 <ul class="collection">
	 <li class="collection-item avatar">
      <i class="mdi-file-folder circle"></i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
    </li>
     
             
                            
                            
     </div>
</div>                    
                            

                       
 
@stop