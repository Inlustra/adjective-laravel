<ul class="collapsible" data-collapsible="expandable">
    <li>
        <a href="/user">
            <div class="collapsible-header active"><i class="mdi-action-home"></i>Home</div>
        </a>
    </li>
</ul>

<br>

<ul class="collapsible" data-collapsible="accordeon">
    <li>
        <div class="collapsible-header active"><i class="mdi-action-account-circle"></i>Profile</div>
        <div class="collapsible-body"><p><a href="/editprofile">Edit Profile</a></p></div>
        <div class="collapsible-body"><p><a href="/viewuploads">View Uploads</a></p></div>
    </li>
    <li>
        <div class="collapsible-header"><i class="mdi-communication-chat"></i>Communication</div>
        <div class="collapsible-body"><p><a href="/communications">Dialogue List</a></p></div>
        <div class="collapsible-body"><p><a href="/meeting">Meetings</a></p></div>
    </li>
    @if(Auth::user()->isStudent())
        <li>
            <div class="collapsible-header"><i class="mdi-av-my-library-books"></i>Courses</div>
            @foreach(Auth::user()->studentCourses() as $course)
                <div class="collapsible-body">
                    <p>
                        {{HTML::linkRoute('student.course', $course->name, array($course->id))}}
                    </p>
                </div>
            @endforeach
        </li>
    @endif


</ul>
<br>
<ul class="collapsible" data-collapsible="expandable">
    <li>
        <div class="collapsible-header active"><i class="mdi-action-language"></i>Useful Links</div>
        <div class="collapsible-body"><p><a href="/travel">Travel and transport</a></p></div>
        <div class="collapsible-body"><p><a href="/announcements">Uni Announcements</a></p></div>
    </li>
</ul>

@if(Auth::user()->isStaff())
    <br>
    <ul class="collapsible" data-collapsible="expandable">
        <li>
            <div class="collapsible-header"><i class="mdi-action-description"></i>Course Administration</div>
            @foreach(Auth::user()->staffCourses() ->get() as $course)
                <div class="collapsible-body">
                    <p>
                        {{HTML::linkRoute('admin.course', $course->name, array($course->id))}}
                    </p>
                </div>
            @endforeach
        </li>
    </ul>
@endif

<br>

<ul class="collapsible" data-collapsible="expandable">
    <li>
        <div class="collapsible-header active"><i class="mdi-content-backspace"></i><a href="/logout">Log Out</a></div>
    </li>
</ul>