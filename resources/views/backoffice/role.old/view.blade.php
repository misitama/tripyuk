<?php
	use Illuminate\Support\Str;
?>

@extends('back.template.master')

@section('title')
	Role View
@endsection

@section('head_additional')
	{!!HTML::style('css/back/detail.css')!!}
	{!!HTML::style('css/back/index.css')!!}
@endsection

@section('js_additional')
	<script type="text/javascript">
		$(document).ready(function(){
			
		});
	</script>
@endsection

@section('page_title')
	Role View
	<span>
		<a href="{{URL::to('admin/dashboard')}}">Dashboard</a> / <a href="{{URL::to('admin/role')}}">Role</a> / <span>Role View</span>
	</span>
@endsection

@section('help')
	<ul class="menu-help-list-container">
		<li>
			Gunakan tombol Edit untuk mengedit Role
		</li>
	</ul>
@endsection

@section('content')
	<div class="page-group">
		<div class="page-item col-1">
			<div class="page-item-content">
				<h1 class="view-title">
					@if($request->session()->has('last_url'))
						<a class="view-button-item view-button-back" href="{{URL::to($request->session()->get('last_url'))}}"></a>
					@else
						<a class="view-button-item view-button-back" href="{{URL::to('admin/role')}}"></a>
					@endif
					{{$role->name}}
					<a href="{{URL::to('admin/role/' . $role->id . '/edit')}}" class="view-button-item view-button-edit">
						Edit
					</a>
				</h1>
				
				@if (file_exists(public_path() . '/usr/img/admingroup/' . $role->id . '_' . Str::slug($role->title, '_') . '_thumb.jpg'))
					{!!HTML::image('usr/img/admingroup/' . $role->id . '_' . Str::slug($role->title, '_') . '_thumb.jpg?lastmod=' . Str::random(5), '', ['class'=>'view-photo'])!!}
				@endif
				<div class="page-group">
					<div class="page-item col-1">
						<div class="page-item-title">
							Detail Information
						</div>
						<div class="page-item-content view-item-content">
							<table class="view-detail-table">
								<tr>
									<td>
										Name
									</td>
									<td class="view-info-mid">
										:
									
									</td>
									<td>
										{!!$role->name!!}
									
									</td>
								</tr>
								<tr>
									<td>
										Description
									</td>
									<td class="view-info-mid">
										:
									
									</td>
									<td>
										{!!$role->description!!}
									
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="view-last-edit">

					<div class="page-item-title" style="margin-bottom: 20px;">
						Basic Information
					</div>

					<div class="view-last-edit-group">
						<div class="view-last-edit-title">
							Create
						</div>
						<div class="view-last-edit-item">
							<span>
								Created at
							</span>
							<span>
								:
							</span>
							<span>
								{{date('l, d F Y G:i:s', strtotime($role->created_at))}}
							</span>
						</div>
						<div class="view-last-edit-item">
							<span>
								Created by
							</span>
							<span>
								:
							</span>
							<span>
								{{$role->created_by}}
							</span>
						</div>
					</div>

					<div class="view-last-edit-group">
						<div class="view-last-edit-title">
							Update
						</div>
						<div class="view-last-edit-item">
							<span>
								Updated at
							</span>
							<span>
								:
							</span>
							<span>
								{{date('l, d F Y G:i:s', strtotime($role->updated_at))}}
							</span>
						</div>
						<div class="view-last-edit-item">
							<span>
								Last Updated by
							</span>
							<span>
								:
							</span>
							<span>
								{{$role->last_modified_by}}
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection