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
                                        <td>{{$student->Supervisor->firstname." ".$student->Supervisor->lastname}}</td>
                                        <td>{{$student->SecondMarker->firstname." ".$student->SecondMarker->lastname}}</td>
                                        <td><a href="editstudent">Edit</a> / <a href="">Dashboard</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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

                        <p>

                        <div class="row">
                            <form class="col s12">
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

                                <div class="btn">
                                    <span>Select file</span>
                                    <input type="file"/>
                                </div>
                            </form>
                            <div class="btn"><span>Submit</span></div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    @endif
@stop