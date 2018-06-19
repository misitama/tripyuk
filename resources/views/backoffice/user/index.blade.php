@extends('backoffice.main')

@section('customstyles')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/dist/css/select2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/css/custom.css')}}">
@stop

@section('title')
    Users
@stop

@section('page-header')
    <div id="page-heading">

        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="active">Users</li>
        </ol>

        <h1>Users</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="#" id="btnAddNewUsers" class="btn btn-primary"><i class="fa fa-plus-square"></i> Add New Users</a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Users List</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-condensed" id="tblUsers">
                                <thead>
                                <tr>
                                    <th data-column-id="full_name">Full Name</th>
                                    <th data-column-id="email">Email</th>
                                    <th data-column-id="sex">Sex</th>
                                    <th data-column-id="name">Role Name</th>
                                    <th data-column-id="province_name">Province</th>
                                    <th data-column-id="regency_name">Regency</th>
                                    <th data-column-id="district_name">District</th>
                                    <th data-column-id="phone">Phone</th>
                                    <th data-column-id="is_active" data-formatter="isActive">Active</th>
                                    <th data-column-id="is_blocked" data-formatter="isBlock">Block</th>
                                    <th data-column-id="action" data-formatter="action" data-sortable="false">Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
    @include('backoffice.user.modal')
@stop

@section('customscripts')
    <script src="{{asset('vendors/select2/dist/js/select2.min.js')}}"></script>
    @include('backoffice.user.usersjs')
@stop