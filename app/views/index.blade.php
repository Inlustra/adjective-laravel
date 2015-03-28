@extends('layouts.master')
 
@section('title') Student Landing Page @stop
 
@section('content')
  
<div class="container">
<div class="row">
	<div class="col s12"><h4><i class="small mdi-social-person"></i> {{ Auth::user()->getFullName() }}</h4>
	</div>

	<div class="col s12 m3 12"><blockquote><p><b>Programme</p><p>Email</p><p>Graduation</p>
	<p>First Marker</p><p>Second Marker</p></blockquote>
	</div>
	<div class="col s12 m3 12"><blockquote><p>Computing</p><p>{{ Auth::user()->email }}</p><p>2015</p>
	<p>Ray Stoneham</p><p>Keeran Jameel</p></blockquote></b>
	</div>
    <div class="col s12 m6 18">
    <img src="img/user-icon1.jpg" class="circle responsive-img" />
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
			
		<div class="card blue darken-1">
            <div class="card-content white-text">
              <span class="card-title">COMP1648</span>
              <p>Computer Programming</p>
              <p>Deadline</p>
              <p>31.03.2015</p>
            </div>
            <div class="card-action">
              <a href="courses">Link<i class="mdi-image-navigate-next"></i></a>
            </div>
          </div>	
			
		</div>
		
		<div class="col s4">
		
				<div class="card blue darken-1">
            <div class="card-content white-text">
              <span class="card-title">COMP1656</span>
              <p>Advanced Programming</p>
            </div>
            <div class="card-action">
              <a href="courses">Link<i class="mdi-image-navigate-next"></i></a>
            </div>
          </div>	
			
		</div>
		
		<div class="col s4">
			
					<div class="card blue darken-1">
            <div class="card-content white-text">
              <span class="card-title">COMP1699</span>
              <p>Project (CIS)</p>
            </div>
            <div class="card-action">
              <a href="courses">Link<i class="mdi-image-navigate-next"></i></a>
            </div>
          </div>
          
		</div>                            

	</div>
</div>                       
 
@stop