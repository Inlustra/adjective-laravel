@extends('layouts.master')

@section('title')
    {{$course->code}} - Staff
@stop

@section('content')
    <script>

    </script>
    <div class="container">
        <div class="row">
            <div class="col s12"><h4><i class="small mdi-action-account-child"></i> Manage {{$course->name}} Staff</h4>
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

@stop