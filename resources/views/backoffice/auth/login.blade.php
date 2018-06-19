@extends('backoffice.auth.main')

@section('title')
    Login
@stop

@section('content')
    <div class="panel panel-primary">
        <div class="panel-body">
            <h4 class="text-center" style="margin-bottom: 25px;">Log in to system</h4>
            <form id="frmLogin" class="form-horizontal" style="margin-bottom: 0px !important;">
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Input your email as username" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="pull-right"><label><input name="remember" id="remember" type="checkbox" value="1" checked> Remember Me</label></div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </form>

        </div>
        <div class="panel-footer">
            <a href="#" class="pull-left btn btn-link" style="padding-left:0">Forgot password?</a>
        </div>
    </div>
@stop

@section('customscripts')
    @include('backoffice.auth.loginjs')
@stop