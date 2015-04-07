<div class="navbar-fixed">
    <nav>
        @if(Adjective::isImitating())
            <a href="{{route('admin.imitate.end')}}">
                @endif
                <div class="nav-wrapper
                @if(Adjective::user()->isStaff())
                    navstuff
                @endif
                @if(Adjective::isImitating())
                    imitation
                @endif">
                    <span class="left" style="margin-left:15px;">
                        {{Auth::user()->fullName}}
                    </span>
                    @if(Adjective::isImitating())
                        <i style="margin-right:15px;" class="right mdi-action-exit-to-app"></i>
                        <span href="#" class="right">
                        Imitating user: {{Adjective::user()->fullName}}
                    </span>
                    @endif
                    <span class="brand-logo">Adjective</span>
                </div>
                @if(Adjective::isImitating())
            </a>
        @endif
    </nav>
</div>