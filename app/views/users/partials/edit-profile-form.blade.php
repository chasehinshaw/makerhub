@extends('layouts.default')

@section('main')
	<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Edit Your Account</h3>
			</div>
			<div class="panel-body">
				@include('layouts.partials.errors')
				
				{{ Form::open(['route' => 'edit_profile_path']) }}
					<!-- username -->
					<div class="form-group">
						{{ Form::text('username', null, ['class' => 'form-control','placeholder'=>'Username']) }}
					</div>
					<!-- firstname -->
					<div class="form-group">
						{{ Form::text('firstname', null, ['class' => 'form-control','placeholder'=>'First Name']) }}
					</div>
					<!-- lastname -->
					<div class="form-group">
						{{ Form::text('lastname', null, ['class' => 'form-control','placeholder'=>'Last Name']) }}
					</div>
					<!-- profile pic -->
					<!-- location -->
					<!-- bio -->
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop

@section('sidebar')
@stop

@section('footer')
@stop