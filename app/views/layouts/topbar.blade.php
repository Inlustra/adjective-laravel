<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Adjective</a>
      
      
	  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
      	<li>{{ Auth::user()->username }}</li>
        <li><a href="/logout">Logout</a></li>
      </ul>

      
    </div>
  </nav>
</div>