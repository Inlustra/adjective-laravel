<div class="navbar-fixed">
<nav>

@if(Auth::user()->isStaff())
<div class="nav-wrapper navstuff">
       <a href="#" class="brand-logo">Adjective | Staff</a>
@else
<div class="nav-wrapper">
       <a href="#" class="brand-logo">Adjective | Student</a>       
       
@endif 
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>                   
	   <ul class="right hide-on-med-and-down">
	   <li>{{ Auth::user()->username }}</li>
       <li><a href="/logout">Logout</a></li>
	   </ul>
       
       <ul class="side=nav" id="mobile-demo">
       <li>{{ Auth::user()->username }}</li>
       <li><a href="/logout">Logout</a></li>
       </ul>
</div>
</nav>
</div>