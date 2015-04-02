@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h4>
                    <i class="small mdi-av-my-library-books"></i> {{$course->name}} - {{$course->code}}
                </h4>
            </div>

            <div class="col s12 m6 12">
                <blockquote>
                    @foreach($course->staff as $staff)
                        <p><b>{{$staff->Role}}</b></p>
                    @endforeach
                </blockquote>

            </div>
            <div class="col s12 m6 12">
                <blockquote>
                    @foreach($course->staff as $staff)
                        <p>{{$staff->firstname . " ". $staff->lastname}}</p>
                    @endforeach
                </blockquote>
            </div>
            {{HTML::linkRoute('admin.course.staff', 'Manage staff',
            array($course->id),
            array('class'=>'waves-effect waves-teal btn-flat right'))}}
        </div>
    </div>
    <div class="divider"></div>
    <br>
    <div class="container">
        <h5>
            Deadlines
        </h5>

        <div id="test1" class="col s12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-text">
                    <tbody>
                    @foreach($course->deadlines as $deadline)
                        <tr>
                            <td>{{$deadline->name}}</td>
                            <td>{{$deadline->date}}</td>
                            <td>{{$deadline->filetypes}}</td>
                            <td>{{$deadline->timeLeft}}</td>
                            <td>
                                <a href="editstudent">Upload</a>
                                @if(Auth::user()->isStaff())/ <a href="editstudent">Edit</a>@endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if(isset($meetings))
        <div class="divider"></div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h5>Meetings</h5>
                    <ul class="collapsible" data-collapsible="accordion">
                        @foreach($meetings as $meeting)
                            <li>
                                <div class="collapsible-header">
                                    @if($meeting->held)
                                        <i class="mdi-action-history grey-text"></i>
                                    @elseif(!$meeting->isAccepted(Auth::user()))
                                        <i class="mdi-alert-error red-text"></i>
                                    @elseif(!$meeting->isAcceptedOther(Auth::user()))
                                        <i class="mdi-device-access-time yellow-text"></i>
                                    @else
                                        <i class="mdi-action-today green-text"></i>
                                    @endif
                                    <span class="left truncate">{{$meeting->agenda}}</span>
                                    <span class="right badge">{{$meeting->time}}</span></div>
                                @if($meeting->held)
                                    <div class="collapsible-body">
                                        <p>{{$meeting->minutes}}</p>
                                    </div>
                                @elseif(!$meeting->isAccepted(Auth::user()))
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s12 center-align">
                                                </br>
                                                <button class="btn waves-effect waves-light green" type="submit"
                                                        name="action">
                                                    Accept
                                                    <i class="mdi-action-done right"></i>
                                                </button>
                                                <button class="btn waves-effect waves-light yellow darken-3"
                                                        type="submit"
                                                        name="action">
                                                    Change Time
                                                    <i class="mdi-editor-mode-edit right"></i>
                                                </button>
                                                <button class="btn waves-effect waves-light red" type="submit"
                                                        name="action">
                                                    Cancel
                                                    <i class="mdi-alert-warning right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @elseif(!$meeting->isAcceptedOther(Auth::user()))
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s12 center-align">
                                                </br>
                                                <button class="btn waves-effect waves-light yellow darken-3"
                                                        type="submit"
                                                        name="action">
                                                    Change Time
                                                    <i class="mdi-editor-mode-edit right"></i>
                                                </button>
                                                <button class="btn waves-effect waves-light red" type="submit"
                                                        name="action">
                                                    Cancel
                                                    <i class="mdi-alert-warning right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s12 center-align">
                                                </br>
                                                <button class="btn waves-effect waves-light yellow darken-3"
                                                        type="submit"
                                                        name="action">
                                                    Change Time
                                                    <i class="mdi-editor-mode-edit right"></i>
                                                </button>
                                                <button class="btn waves-effect waves-light red" type="submit"
                                                        name="action">
                                                    Cancel
                                                    <i class="mdi-alert-warning right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </li>
                        @endforeach
                    </ul>
                    <a class="waves-effect waves-teal btn-flat right">View all {{$meetings_count}} meetings</a>

                </div>
            </div>
        </div>
    @endif

    @if(Auth::user()->isStaff())
        <div class="divider"></div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h5>Students</h5>

                    <div id="test1" class="col s12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-text">
                                <thead>
                                <tr>
                                    <th>Username</th>
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
                                        <td>{{$student->user->username}}</td>
                                        <td>{{$student->user->firstname." ".$student->user->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->Supervisor->fullName or 'None'}}</td>
                                        <td>{{$student->SecondMarker->fullName or 'None'}}</td>
                                        <td><a href="">Dashboard</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{HTML::linkRoute('admin.course.students', 'Manage students',
                    array($course->id),
                    array('class'=>'waves-effect waves-teal btn-flat right'))}}
                </div>
            </div>
        </div>

        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red">
                <i class="large mdi-editor-mode-edit"></i>
            </a>
            <ul>
                <li>
                    <a class="btn-floating green">
                        <i class="large mdi-editor-mode-edit"></i>
                    </a>
                </li>
                <li>
                    <a class="btn-floating blue">
                        <i class="large mdi-action-account-circle"></i>
                    </a>
                </li>
            </ul>
        </div>
    @endif
    <div class="divider"></div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <blockquote>
                    <p class="flow-text">
                        {{$course->description}}
                    </p>
                </blockquote>
            </div>
        </div>
    </div>

    @if(Auth::user()->isStudent())
        <div class="divider"></div>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <blockquote>
                        <p><b>Latest Uploads</b></p>

                        <p>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-text">
                                <thead>
                                <tr>
                                    <th>Filename</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Filename</td>
                                    <td>Interim</td>
                                    <td>26.03.2015</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    @endif

    @if(Auth::user()->isStudent())
        <div class="divider"></div>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <blockquote>
                        <p><b>Upload your work</b></p>

                        <div class="row">
                            <form class="col s12">
                                <div class="btn">
                                    <span>Select file</span>
                                    <input type="file"/>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Comment your file</label>
                                    </div>
                                </div>
                                <label>Select upload type</label>
                                <select class="browser-default">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Weekly</option>
                                    <option value="2">Interim</option>
                                    <option value="3">Coursework</option>
                                </select>
                            </form>
                            <div class="btn"><span>Submit</span></div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    @endif
@stop