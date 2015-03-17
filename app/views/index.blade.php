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

<br>

<div class="divider"></div>

<div class="container">
<div class="row">
	<div class="col s12"><h4><i class="small mdi-av-my-library-books"></i> Courses</h4>                      
	</div>
	
	<div class="row">
		<div class="col s4">
			
		<div class="card blue lighten-5">
            <div class="card-content white-text">
              <span class="card-title">Computer Programming</span>
              <p>COMP1648</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href='#'>This is a link</a>
            </div>
          </div>	
			
		</div>
		
		<div class="col s4">2</div>
		
		<div class="col s4">3</div>                            

	</div>
</div>                       
 
@stop