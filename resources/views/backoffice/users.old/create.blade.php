<?php
	use Illuminate\Support\Str;

	use App\Models\User;
?>

@extends('back.template.master')

@section('title')
	New User
@endsection

@section('head_additional')
	{!!HTML::style('css/back/edit.css')!!}
@endsection

@section('js_additional')
	<script type="text/javascript">
		$(function(){
			
		});
	</script>
@endsection

@section('page_title')
	New User
	<span>
		<a href="{{URL::to('admin/dashboard')}}">Dashboard</a> / <a href="{{URL::to('admin/user')}}">User</a> / <span>New User</span>
	</span>
@endsection

@section('help')
	<ul class="menu-help-list-container">
		<li>
			Field <i>User Group</i> digunakan untuk mengatur hak akses User di Back End
		</li>
		<li>
			Password harus di isi minimal 6 karakter
		</li>
		<li>
			Pastikan isi dari field Password dan Password Confirmation sama
		</li>
	</ul>
@endsection

@section('content')
	<div class="page-group">
		<div class="page-item col-1">
			<div class="page-item-content">
				@if($request->session()->has('last_url'))
					<a class="edit-button-item edit-button-back" href="{{URL::to($request->session()->get('last_url'))}}">
						Back
					</a>
				@else
					<a class="edit-button-item edit-button-back" href="{{URL::to('admin/user')}}">
						Back
					</a>
				@endif
				
				<div class="page-item-error-container">
					@foreach ($errors->all() as $error)
						<div class='page-item-error-item'>
							{{$error}}
						</div>
					@endforeach
				</div>
				{!!Form::model($user, ['url' => URL::to('admin/user'), 'method' => 'POST', 'files' => true])!!}
					<div class="page-group">
						<div class="page-item col-1">
							<div class="page-item-title">
								Detail Information
							</div>
							<div class="page-item-content edit-item-content">
								<div class="edit-form-group">
									{!!Form::label('role', 'Nama Role', ['class'=>'edit-form-label'])!!}
									{!!Form::select('role', $role_options, null, ['class'=>'edit-form-text large select'])!!}
									<span class="edit-form-note">
										*Required
									</span>
								</div>
								<div class="edit-form-group">
									{!!Form::label('username', 'Username', ['class'=>'edit-form-label'])!!}
									{!!Form::text('username', null, ['class'=>'edit-form-text large', 'required'])!!}
									<span class="edit-form-note">
										*Required
									</span>
								</div>
								<div class="edit-form-group">
									{!!Form::label('email', 'Email', ['class'=>'edit-form-label'])!!}
									{!!Form::email('email', null, ['class'=>'edit-form-text large', 'required'])!!}
									<span class="edit-form-note">
										*Required, Unique, and Email Format
									</span>
								</div>
								<div class="edit-form-group">
									{!!Form::label('password', 'Password', ['class'=>'edit-form-label'])!!}
									{!!Form::password('password', ['class'=>'edit-form-text large', 'required'])!!}
									<span class="edit-form-note">
										*Required and min 6 Character
									</span>
								</div>
								<div class="edit-form-group">
									{!!Form::label('password_confirmation', 'Password Confirmation', ['class'=>'edit-form-label'])!!}
									{!!Form::password('password_confirmation', ['class'=>'edit-form-text large', 'required'])!!}
									<span class="edit-form-note">
										*Required and must be exactly the same with Password Field
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="page-group">
						<div class="edit-button-group">
							{{Form::submit('Save', ['class'=>'edit-button-item'])}}
							{{Form::reset('Reset', ['class'=>'edit-button-item reset'])}}
						</div>
					</div>
				{!!Form::close()!!}
			</div>
		</div>
	</div>
@endsection