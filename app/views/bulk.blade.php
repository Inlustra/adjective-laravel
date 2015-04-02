@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')


			<div class="container">
				<div class="row">
                    <div id="all" class="col s12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-text">
                                <thead>
                                <tr>
                                    <th></th>                                
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>1st Marker</th>
                                    <th>2nd Marker</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($course->students as $student)
                                    <tr>
                                    	<td><input type="checkbox" id="test5" /></td>
                                        <td>{{$student->user->fullName}}</td>
                                        <td>{{$student->user->email}}</td>
                                        <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                        <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>



@stop