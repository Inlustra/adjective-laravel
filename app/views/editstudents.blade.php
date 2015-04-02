@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-social-person"></i> Edit details</h4>

                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">{{$student->user->firstname}}</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">{{$student->user->lastname}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate">
                            <label for="username">{{$student->user->username}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">{{$student->user->email}}</label>
                        </div>
                    </div>
                    <div id="select" class="section scrollspy">
                        <div class="col s12">
                            <label>First Marker</label>
                            <select class="browser-default">
                                <option value="" disabled selected>{{$student->Supervisor->fullName  or 'None'}}</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="col s12">
                            <label>Second Marker</label>
                            <select class="browser-default">
                                <option value="" disabled selected>{{$student->SecondMarker->fullName  or 'None'}}</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="valign-wrapper">
            <div class="btn"><span>Submit</span>
            </div>
        </div>
    </div>


@stop