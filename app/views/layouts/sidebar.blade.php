<ul class="collapsible" data-collapsible="expandable">
    <li>
      	<div class="collapsible-header active"><i class="mdi-action-home"></i>Home</div>
    </li>
</ul>

<br>

<ul class="collapsible" data-collapsible="expandable">
    <li>
      	<div class="collapsible-header active"><i class="mdi-action-account-circle"></i>Profile</div>
      	<div class="collapsible-body"><p>Edit Profile.</p></div>
     	<div class="collapsible-body"><p>View Uploads.</p></div>
    </li>
    <li>
      	<div class="collapsible-header"><i class="mdi-communication-chat"></i>Communication</div>
      	<div class="collapsible-body"><p>Dialogue List.</p></div>
    </li>
    <li>
      	<div class="collapsible-header"><i class="mdi-av-my-library-books"></i>Courses</div>
      	<div class="collapsible-body"><p>COMP1648</p></div>
      	<div class="collapsible-body"><p>COMP1648</p></div>
      	<div class="collapsible-body"><p>COMP1648</p></div>
    </li>

</ul>
<br>
<ul class="collapsible" data-collapsible="expandable">
    <li>
      	<div class="collapsible-header active"><i class="mdi-action-language"></i>Useful Links</div>
      	<div class="collapsible-body"><p>Travel and transport.</p></div>
     	<div class="collapsible-body"><p>Uni Announcements.</p></div>
    </li>
</ul>

<br>

@if(Auth::user()->isStaff())
<ul class="collapsible" data-collapsible="expandable">
    <li>
      	<div class="collapsible-header"><i class="mdi-av-my-library-books"></i>Administration</div>
      	<div class="collapsible-body"><p>View Students</p></div>
      	<div class="collapsible-body"><p>View Courses</p></div>
      	<div class="collapsible-body"><p>Something</p></div>
    </li>
</ul>
@endif

<br>

<ul class="collapsible" data-collapsible="expandable">
	<li>
		<div class="collapsible-header active"><i class="mdi-content-backspace"></i>Log Out</div>
	</li>
</ul>