@extends('layouts.master')

@section('title') Student Editing Details @stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-action-account-child"></i> View Uploads</h4>
            </div>

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
                        <td>
                            <div class="btn btn-small"><span>Edit</span></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>

@stop