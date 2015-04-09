@extends('layouts.master')

@section('title')
    {{$course->code}} - Students
@stop

@section('content')
    <div class="container">
        <div class="row">
            <h5>Add Student</h5>

            <form>
                <div class="input-field col s4">
                    <i class="mdi-action-search prefix"></i>
                    <input id="student_search" type="text" class="validate">
                    <label for="student_search">Name, Email, ID</label>
                </div>
                <div class="input-field col s3">
                    <select class="browser-default" id="FirstMarker_add">
                        @foreach($course->staff as $staff)
                            <option value="" selected>No First Marker</option>
                            @foreach($course->staff as $staff)
                                <option value="{{$staff->id}}">{{$staff->fullName}}</option>
                            @endforeach
                        @endforeach

                    </select>
                </div>
                <div class="input-field col s3">
                    <select class="browser-default" id="SecondMarker_add">
                        <option value="" selected>No Second Marker</option>
                        @foreach($course->staff as $staff)
                            <option value="{{$staff->id}}">{{$staff->fullName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col s2">
                    <a onClick="addStaff()" class="btn-floating waves-effect waves-light btn-medium green">
                        <i class="mdi-content-add"></i>
                    </a>
                </div>
            </form>
        </div>
        {{ Form::open(array('route' => array('admin.course.students.post',$course->id)))}}
        <div id="all" class="col s12">
            <h5>Students correctly assigned.</h5>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-text">
                    <thead>
                    <tr>
                        <th>
                            <p>
                                <input type="checkbox" id="selectall"/>
                                <label for="selectall"></label>
                            </p>
                            <script>
                                $(document).ready(function () {
                                    $('#selectall').click(function (e) {
                                        var table = $(e.target).closest('table');
                                        $('td input:checkbox', table).prop('checked', this.checked);
                                    })
                                });
                            </script>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>1st Marker</th>
                        <th>2nd Marker</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course->students as $student)
                    @if($student['SecondMarker']!= null && $student['Supervisor'] != null)
                            <tr>
                                <td>
                                    <p>
                                        <input type="checkbox" id="student-{{$student['id']}}"
                                               value="{{$student['id']}}" name="student[]"/>
                                        <label for="student-{{$student['id']}}"></label>
                                    </p>
                                </td>
                                <td>{{$student['user']['fullName']}}</td>
                                <td>{{$student['user']['email']}}</td>
                                <td>{{$student['Supervisor']['fullName']  or 'None'}}</td>
                                <td>{{$student['SecondMarker']['fullName']  or 'None'}}</td>
                                <td>{{HTML::linkRoute('admin.imitate', 'Dashboard',
                                                array($student['user']['id']))}}</td>
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
                        <th>
                            <p>
                                <input type="checkbox" id="selectall_no1m"/>
                                <label for="selectall_no1m"></label>
                            </p>
                            <script>
                                $(document).ready(function () {
                                    $('#selectall_no1m').click(function (e) {
                                        var table = $(e.target).closest('table');
                                        $('td input:checkbox', table).prop('checked', this.checked);
                                    })
                                });
                            </script>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>1st Marker</th>
                        <th>2nd Marker</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course->students as $student)
                        @if($student['SecondMarker']!= null && $student['Supervisor'] == null)
                            <tr>
                                <td>
                                    <p>
                                        <input type="checkbox" id="student-{{$student['id']}}"
                                               value="{{$student['id']}}" name="student[]"/>
                                        <label for="student-{{$student['id']}}"></label>
                                    </p>
                                </td>
                                <td>{{$student['user']['fullName']}}</td>
                                <td>{{$student['user']['email']}}</td>
                                <td>{{$student['Supervisor']['fullName']  or 'None'}}</td>
                                <td>{{$student['SecondMarker']['fullName']  or 'None'}}</td>
                                <td>{{HTML::linkRoute('admin.imitate', 'Dashboard',
                                                array($student['user']['id']))}}</td>
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
                        <th>
                            <p>
                                <input type="checkbox" id="selectall_no2m"/>
                                <label for="selectall_no2m"></label>
                            </p>
                            <script>
                                $(document).ready(function () {
                                    $('#selectall_no2m').click(function (e) {
                                        var table = $(e.target).closest('table');
                                        $('td input:checkbox', table).prop('checked', this.checked);
                                    })
                                });
                            </script>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>1st Marker</th>
                        <th>2nd Marker</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course->students as $student)
                        @if($student['SecondMarker'] == null && $student['Supervisor'] != null)
                            <tr>
                                <td>
                                    <p>
                                        <input type="checkbox" id="student-{{$student['id']}}"
                                               value="{{$student['id']}}" name="student[]"/>
                                        <label for="student-{{$student['id']}}"></label>
                                    </p>
                                </td>
                                <td>{{$student['user']['fullName']}}</td>
                                <td>{{$student['user']['email']}}</td>
                                <td>{{$student['Supervisor']['fullName']  or 'None'}}</td>
                                <td>{{$student['SecondMarker']['fullName']  or 'None'}}</td>
                                <td>{{HTML::linkRoute('admin.imitate', 'Dashboard',
                                                array($student['user']['id']))}}</td>
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
                        <th>
                            <p>
                                <input type="checkbox" id="selectall_nom"/>
                                <label for="selectall_nom"></label>
                            </p>
                            <script>
                                $(document).ready(function () {
                                    $('#selectall_nom').click(function (e) {
                                        var table = $(e.target).closest('table');
                                        $('td input:checkbox', table).prop('checked', this.checked);
                                    })
                                });
                            </script>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>1st Marker</th>
                        <th>2nd Marker</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course->students as $student)
                        @if($student['SecondMarker'] == null && $student['Supervisor'] == null )
                            <tr>
                                <td>
                                    <p>
                                        <input type="checkbox" id="student-{{$student['id']}}"
                                               value="{{$student['id']}}" name="student[]"/>
                                        <label for="student-{{$student['id']}}"></label>
                                    </p>
                                </td>
                                <td>{{$student['user']['fullName']}}</td>
                                <td>{{$student['user']['email']}}</td>
                                <td>{{$student['Supervisor']['fullName']  or 'None'}}</td>
                                <td>{{$student['SecondMarker']['fullName']  or 'None'}}</td>
                                <td><a href="">Dashboard</a></td>
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
                <div class="col s5">
                    <select name="FirstMarker">
                        @foreach($course->staff as $staff)
                            <option value="" selected>No First Marker</option>
                            @foreach($course->staff as $staff)
                                <option value="{{$staff->id}}">{{$staff->fullName}}</option>
                            @endforeach
                        @endforeach

                    </select>
                </div>
                <div class="input-field col s5">
                    <select name="SecondMarker">
                        <option value="" selected>No Second Marker</option>
                        @foreach($course->staff as $staff)
                            <option value="{{$staff->id}}">{{$staff->fullName}}</option>
                        @endforeach
                    </select>
                    <script>
                        $(document).ready(function () {
                            $('select').material_select();
                        });

                    </script>
                </div>
                <div class="col s2">

                    <button type="submit" name="submit" class="btn-floating waves-effect waves-light btn-large green">
                        <i class="mdi-action-done"></i>
                    </button>
                </div>
                <script>
                </script>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@stop