@extends('layouts.master')
 
@section('title') Student Editing Details @stop
 
@section('content')

<div class="container">
<div class="row">
	<div class="col s12"><h4><i class="small mdi-action-account-child"></i> View Students</h4>
	</div>
	
	<div class="table-responsive">
        <table class="table table-bordered table-striped">
 
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>First Marker</th>
                    <th>Second Marker</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
            	@foreach ($user as $users)
				<tr>
					<td>{{ $users->getFullName() }}</td>
					<td>{{ $users->email }}</td>
					<td>{{ $users->username }}</td>
					<td></td>
					<td></td>
					<td>button edit</td>
            </tr>
            @endforeach
            </tbody>
           
            	
        </table>
	</div>	
	
	</div>
	</div>
</div>
 
@stop