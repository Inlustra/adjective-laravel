@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-action-backup"></i> View Uploads</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-text">
                    <thead>
                    <tr>
                        <th>Filename</th>
                        <th>Course</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Filename</td>
                        <td>Course Name</td>
                        <td>Interim</td>
                        <td>26.03.2015</td>
                        <td>
                            <div class="btn btn-small"><span>Delete</span></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>

@stop