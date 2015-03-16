<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Adjective</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li>{{ $user->getFullName() }}</li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </nav>