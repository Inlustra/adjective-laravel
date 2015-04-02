@extends('layouts.master')

@section('title')
    {{$course->code}} - Students
@stop

@section('content')
    <form>
        <div class="container">
            <div class="row">
                <h5>Add Student</h5>

                <div class="row">
                    <form>
                        <div class="input-field col s4">
                            <i class="mdi-action-search prefix"></i>
                            <input id="student_search" type="text" class="validate">
                            <label for="student_search">Name, Email, ID</label>
                        </div>
                        <div class="col s3">
                            <select class="browser-default" id="FirstMarker_add">
                                <option value="" disabled selected></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="col s3">
                            <select class="browser-default" id="SecondMarker_add">
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
                <div id="all" class="col s12">
                    <h5>Students correctly assigned.</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-text">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>1st Marker</th>
                                <th>2nd Marker</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course->students as $student)
                                @if($student->SecondMarker!= null && $student->Supervisor != null)
                                    <tr>
                                        <td>
                                            <p>
                                                <input type="checkbox" id="student-{{$student->id}}" name="student[]"/>
                                                <label for="student-{{$student->id}}"></label>
                                            </p>
                                        </td>
                                        <td>{{$student->user->fullName}}</td>
                                        <td>{{$student->user->email}}</td>
                                        <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                        <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                        <td>{{HTML::linkRoute('admin.course.editstudents', 'Edit',
									array($course->student))}} / <a href="">Dashboard</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="n1st" class="col s12">
                    <h5>Students without a Supervisor</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-text">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>1st Marker</th>
                                <th>2nd Marker</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course->students as $student)
                                @if($student->SecondMarker!= null && $student->Supervisor == null)
                                    <tr>
                                        <td>
                                            <p>
                                                <input type="checkbox" id="student-{{$student->id}}" name="student[]"/>
                                                <label for="student-{{$student->id}}"></label>
                                            </p>
                                        </td>
                                        <td>{{$student->user->fullName}}</td>
                                        <td>{{$student->user->email}}</td>
                                        <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                        <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                        <td>{{HTML::linkRoute('admin.course.editstudents', 'Edit',
									array($course->student))}} / <a href="">Dashboard</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <div id="n2nd" class="col s12">
                    <h5>Students without a Second marker</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-text">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>1st Marker</th>
                                <th>2nd Marker</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course->students as $student)
                                @if($student->SecondMarker == null && $student->Supervisor != null)
                                    <tr>
                                        <td>
                                            <p>
                                                <input type="checkbox" id="student-{{$student->id}}" name="student[]"/>
                                                <label for="student-{{$student->id}}"></label>
                                            </p>
                                        </td>
                                        <td>{{$student->user->fullName}}</td>
                                        <td>{{$student->user->email}}</td>
                                        <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                        <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                        <td>{{HTML::linkRoute('admin.course.editstudents', 'Edit',
									array($course->student))}} / <a href="">Dashboard</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="nn" class="col s12">
                    <h5>Students with neither</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-text">
                            <thead>
                            <tr>
                                <th></th>
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
                                        <td>
                                            <p>
                                                <input type="checkbox" id="student-{{$student->id}}" name="student[]"/>
                                                <label for="student-{{$student->id}}"></label>
                                            </p>
                                        </td>
                                        <td>{{$student->user->fullName}}</td>
                                        <td>{{$student->user->email}}</td>
                                        <td>{{$student->Supervisor->fullName  or 'None'}}</td>
                                        <td>{{$student->SecondMarker->fullName  or 'None'}}</td>
                                        <td>{{HTML::linkRoute('admin.course.editstudents', 'Edit',
									array($course->student))}} / <a href="">Dashboard</a></td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <h5>Edit selected</h5>

                <div class="row">
                    <div class="row">
                        <form>
                            <div class="col s5">
                                <select class="browser-default" id="FirstMarker_edit">
                                    <option value="" disabled selected></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                            <div class="col s5">
                                <select class="browser-default" id="SecondMarker_edit">
                                    <option value="" disabled selected></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                            <div class="col s2">
                                <a onClick="editStudents()" class="btn-floating waves-effect waves-light btn-medium green">
                                    <i class="mdi-action-done"></i>
                                </a>
                            </div>
                        </form>
                        <script>
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop