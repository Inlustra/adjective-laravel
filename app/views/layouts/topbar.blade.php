<div class="navbar-fixed">
<nav>
<div class="nav-wrapper">

@if(Auth::user()->isStaff())
       <a href="#" class="brand-logo">Adjective | Staff</a>
@else
       <a href="#" class="brand-logo">Adjective | Student</a>       
       
@endif                    
       <ul id="nav-mobile" class="right hide-on-med-and-down">
	   <li>{{ Auth::user()->username }}</li>
       <li><a href="/logout">Logout</a></li>
       </ul>
     </div>
</nav>