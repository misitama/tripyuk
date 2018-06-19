<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="{{ url('img/fav-icon.png') }}" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Travel Agent | Login Admin</title>

    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('vendors/nprogress/nprogress.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('vendors/animate.css/animate.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('build/css/custom.min.css') }}">

	<style type="text/css">
		.login-error-message {
		    margin-top: 40px;
		    text-align: center;
		    background: red;
		    color: #fff;
		    padding: 5px;
		}
	</style>

	{{-- {{HTML::script('js/jquery-1.8.3.min.js')}} --}}
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <h1></h1>
          <div id="login-message">
				@if (Session::has('message'))
					<div class='login-error-message'>{{Session::get('message')}}</div>
				@endif
				@if (Session::has('success'))
					<div class='login-error-message' style="background: transparent; padding: 0px; font-size: 14px;">{{Session::get('success')}}</div>
				@endif
		</div>
          <section class="login_content">
          	<form action="{{ URL::current() }}" method="POST" files="true">
          		<input name="_token" type="hidden" value="{{ csrf_token() }}">
              <h1>Login Form</h1>
              <div>
                <input name="username" type="text" class="form-control" placeholder="Username" required="reqired" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="required" />
              </div>
              <div>
              	<input type="submit" name="Log In" class="btn btn-default submit">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©{{date('Y')}} Travel Agent</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
