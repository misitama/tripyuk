@extends('backoffice.main')

@section('customstyles')
@stop

@section('title')
    Roles
@stop

@section('page-header')
    <div id="page-heading">

        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="active">Roles</li>
        </ol>

        <h1>Roles</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="#" id="btnAddNewRole" class="btn btn-primary"><i class="fa fa-plus-square"></i> Add New Role</a>
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
                        <h4>Roles List</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-condensed" id="tblRoles">
                                <thead>
                                    <tr>
                                        <th data-column-id="name">Role Name</th>
                                        <th data-column-id="description">Description</th>
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
    @include('backoffice.role.modal')
@stop

@section('customscripts')
    @include('backoffice.role.rolejs')
@stop