@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-action-account-child"></i> View Students</h4>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#test1">All</a></li>
                    <li class="tab col s3"><a class="active" href="#test2">no 1st marker</a></li>
                    <li class="tab col s3"><a href="#test3">no 2nd marker</a></li>
                    <li class="tab col s3"><a href="#test4">No markers</a></li>
                </ul>
            </div>

            <br>


            <div id="test1" class="col s12">
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
                        @foreach($students as $student)
                            <tr>
                                <td>Igor Jendoletov</td>
                                <td>ji204@greenwichac.uk</td>
                                <td>Keeran Jamil</td>
                                <td>Ray Stoneham</td>
                                <td><a href="editstudent">Edit</a> / <a href="">Dashboard</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="test2" class="col s12">
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
                        @foreach($students as $student)
                            <tr>
                                <td>Igor Jendoletov</td>
                                <td>ji204@greenwichac.uk</td>
                                <td>Keeran Jamil</td>
                                <td>nope</td>
                                <td><a href="editstudent">Edit</a> / <a href="">Dashboard</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div id="test3" class="col s12">
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
                        <tr>
                            <td>Igor Jendoletov</td>
                            <td>ji204@greenwichac.uk</td>
                            <td>Keeran Jamil</td>
                            <td></td>
                            <td><a href="">Edit</a> / <a href="">Dashboard</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="test4" class="col s12">
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
                        <tr>
                            <td>Igor Jendoletov</td>
                            <td>ji204@greenwichac.uk</td>
                            <td>Keeran Jamil</td>
                            <td>Ray Stoneham</td>
                            <td><a href="">Edit</a> / <a href="">Dashboard</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>

@stop