@extends('layouts.master')

@section('title')
    {{$course->code}} - Students
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">

                <h4> Manage {{$course->name}} Students</h4>


                <ul class="tabs">
                    <li class="tab col s3"><a href="#all">All</a></li>
                    <li class="tab col s3"><a class="active" href="#n1st">no 1st marker</a></li>
                    <li class="tab col s3"><a href="#n2nd">no 2nd marker</a></li>
                    <li class="tab col s3"><a href="#nn">No markers</a></li>
                </ul>
            </div>
            <br>

            <div id="all" class="col s12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-text">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>1st Marker</th>
                            <th>2nd Marker</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($course->students as $student)
                            <tr>
                                <td>{{$student->user->fullName}}</td>
                                <td>{{$student->user->email}}</td>
                                <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                <td><a href="editstudent">Edit</a> / <a href="">Dashboard</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="n1st" class="col s12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-text">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>1st Marker</th>
                            <th>2nd Marker</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($course->students as $student)
                            @if($student->Supervisor == null)
                                <tr>
                                    <td>{{$student->user->fullName}}</td>
                                    <td>{{$student->user->email}}</td>
                                    <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                    <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                    <td><a href="editstudent">Edit</a> / <a href="">Dashboard</a></td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div id="n2nd" class="col s12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-text">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>1st Marker</th>
                            <th>2nd Marker</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($course->students as $student)
                            @if($student->SecondMarker == null)
                                <tr>
                                    <td>{{$student->user->fullName}}</td>
                                    <td>{{$student->user->email}}</td>
                                    <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                    <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                    <td><a href="editstudent">Edit</a> / <a href="">Dashboard</a></td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="nn" class="col s12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-text">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>1st Marker</th>
                            <th>2nd Marker</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($course->students as $student)
                            @if($student->SecondMarker == null && $student->Supervisor == null )
                                <tr>
                                    <td>{{$student->user->fullName}}</td>
                                    <td>{{$student->user->email}}</td>
                                    <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                    <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                    <td><a href="editstudent">Edit</a> / <a href="">Dashboard</a></td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <h5>Add Students</h5>

            <div class="row">
                <form>
                    <div class="input-field col s4">
                        <i class="mdi-action-search prefix"></i>
                        <input id="student_search" type="text" class="validate">
                        <label for="student_search">Name, Email, ID</label>
                    </div>
                    <div class="col s3">
                        <select class="browser-default" id="FirstMarker">
                            <option value="" disabled selected></option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="col s3">
                        <select class="browser-default" id="SecondMarker">
                            <option value="" disabled selected></option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="col s2">
                        <a onClick="addStaff()" class="btn-floating waves-effect waves-light btn-medium green">
                            <i class="mdi-content-add"></i>
                        </a>
                    </div>
                </form>
                <script>
                </script>
            </div>
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a class="btn-floating btn-large green">
                    <i class="large mdi-action-done"></i>
                </a>
                <ul>
                    <li>
                        <a class="btn-floating done red">
                            <i class="large mdi-content-clear"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop