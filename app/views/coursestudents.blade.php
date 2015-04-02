@extends('layouts.master')

@section('title')
    {{$course->code}} - Manage Course Members
@stop

@section('content')
    <script>

    </script>
    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-action-account-child"></i> Manage Course Members</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h4>Staff</h4>

            <div id="" class="col s12">
                <div class="table-responsive">
                    <table id="staff" class="table table-bordered table-striped table-text">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($course->staff as $staff)
                            <tr id="staff-{{$staff->id}}">
                                <td>{{$staff->username}}</td>
                                <td>{{$staff->fullName}}</td>
                                <td>{{$staff->Role}}</td>
                                <td><a onClick="removeStaff({{$staff->id}})"><i
                                                class="mdi-action-highlight-remove red-text"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <h5>Add Staff</h5>

            <form>
                <div class="input-field col s5">
                    <i class="mdi-action-search prefix"></i>
                    <input id="staff_search" type="text" class="validate">
                    <label for="staff_search">Name, Email, ID</label>
                </div>
                <div class="input-field col s5">
                    <input id="staff_role" type="text" class="validate">
                    <label for="staff_role">Role</label>
                </div>
                <div class="col s2">
                    <a onClick="addStaff()" class="btn-floating waves-effect waves-light btn-medium green">
                        <i class="mdi-content-add"></i>
                    </a>
                </div>
            </form>
            <script>
                var i = 0;
                var current_staff = {};
                var staff_search = $('#staff_search');
                var staff_role = $('#staff_role');
                var staffToRemove = [];
                var staffToAdd = [];
                staff_search.autocomplete({
                    noCache: true,
                    dataType: 'json',
                    serviceUrl: '/api/users/staff/',
                    transformResult: function (response) {
                        return {
                            suggestions: $.map(response, function (dataItem) {
                                return {value: dataItem.fullName, data: dataItem};
                            })
                        };
                    },
                    onSelect: function (suggestion) {
                        current_staff['staff_id'] = suggestion.data.id;
                        current_staff['data'] = suggestion.data;
                    }
                });

                function addStaff() {
                    if (current_staff.staff_id == null) {
                        Materialize.toast('You need to select a staff member first!', 4000);
                        return;
                    }
                    staffToAdd.push({staff_id: current_staff.id, staff_role: staff_role.val()});
                    $('#staff tr:last').after
                    ("<tr class='blue lighten-4' id='staff-" + current_staff.staff_id + "'>" +
                    "<td>" + current_staff.data.username + "</td>" +
                    "<td>" + current_staff.data.fullName + "</td>" +
                    "<td>" + staff_role.val() + "</td>" +
                    "<td><a onClick=\"removeStaffTemp('" + current_staff.data.id + "')\">" +
                    "<i class='mdi-action-highlight-remove red-text'></i></a></td>" +
                    "</tr>");
                }
                function removeStaff(id) {
                    if ($('#staff tr').length === 2) {
                        Materialize.toast("You can't remove the last staff member.", 4000)
                        return;
                    }
                    $('#staff-' + id).remove();
                    staffToRemove.push({staff_id: current_staff.id});
                    console.log(staffToRemove);
                }

                function removeStaffTemp(id) {
                    if ($('#staff tr').length === 2) {
                        Materialize.toast("You can't remove the last staff member.", 4000)
                        return;
                    }
                    $('#staff-' + id).remove();
                    var i = staffToAdd.length
                    while (i--) {
                        if (staffToAdd[i].id === id) {
                            staffToAdd.splice(i, 1);
                        }
                    }
                    console.log(staffToAdd);
                }
            </script>
        </div>
    </div>
    <br>
    <div class="divider"></div>
    <div class="container">
        <div class="row">
            <div class="col s12">

                <h4>Students</h4>
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

                        <tr>
                            <td>Igor Jendoletov</td>
                            <td>ji204@greenwichac.uk</td>
                            <td>Keeran Jamil</td>
                            <td>Ray Stoneham</td>
                            <td><a href="editstudent">Edit</a> / <a href="">Dashboard</a></td>
                        </tr>
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
                        <tr>
                            <td>Igor Jendoletov</td>
                            <td>ji204@greenwichac.uk</td>
                            <td>Keeran Jamil</td>
                            <td>nope</td>
                            <td><a href="editstudent">Edit</a> / <a href="">Dashboard</td>
                        </tr>
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
                            <td><a href="">Edit</a> / <a href="">Dashboard</a></td>
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