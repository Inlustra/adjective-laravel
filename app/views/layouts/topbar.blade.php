<div class="navbar-fixed">
    <nav>
        @if(Auth::user()->isStaff())
            <div class="nav-wrapper navstuff">
                <a href="#" class="brand-logo">Adjective | Staff</a>
            </div>
        @else
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Adjective | Student</a>
            </div>
        @endif
    </nav>
</div>