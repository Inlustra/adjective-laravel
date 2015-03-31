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
        <div class="collapsible-body"><p><a href="communications">Dialogue List</a></p></div>
    </li>
    <li>
        <div class="collapsible-header"><i class="mdi-av-my-library-books"></i>Courses</div>
        <div class="collapsible-body"><p><a href="/courses">COMP1648</a></p></div>
        <div class="collapsible-body"><p>COMP1648</p></div>
        <div class="collapsible-body"><p>COMP1648</p></div>
    </li>

</ul>
<br>
<ul class="collapsible" data-collapsible="expandable">
    <li>
        <div class="collapsible-header active"><i class="mdi-action-language"></i>Useful Links</div>
        <div class="collapsible-body"><p><a href="/travel">Travel and transport</a></p></div>
        <div class="collapsible-body"><p><a href="/announcements">Uni Announcements</a></p></div>
    </li>
</ul>

<br>

@if(Auth::user()->isStaff())
    <ul class="collapsible" data-collapsible="expandable">
        <li>
            <div class="collapsible-header"><i class="mdi-av-my-library-books"></i>Administration</div>
            <div class="collapsible-body"><p><a href="/viewstudents">View Students</a></p></div>
            <div class="collapsible-body"><p><a href="/viewcourses">View Courses</a></p></div>
        </li>
    </ul>
@endif

<br>

<ul class="collapsible" data-collapsible="expandable">
    <li>
        <div class="collapsible-header active"><i class="mdi-content-backspace"></i><a href="/logout">Log Out</a></div>
    </li>
</ul>