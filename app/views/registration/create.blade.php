<!-- Form to Register New User -->
@extends('layouts.default')
<!-- Pull {$user} subscribed sections (repeat x3) -->
@section('main')
<div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Register new account</h3>
			</div>
			<div class="panel-body">
				@include('layouts.partials.errors')
		
				{{ Form::open(['route' => 'register_path']) }}
					
					<!-- Username Form Input -->
					<div class="form-group">
						{{ Form::text('username', null, ['class' => 'form-control','placeholder'=>'Username']) }}
					</div>

					<!-- Email Form Input -->
					<div class="form-group">
						{{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Email']) }}
					</div>

					<!-- Password Form Input -->
					<div class="form-group">
						{{ Form::password('password', ['class' => 'form-control','placeholder'=>'Password']) }}
					</div>

					<!-- Password_confirmation Form Input -->
					<div class="form-group">
						{{ Form::password('password_confirmation', ['class' => 'form-control','placeholder'=>'Confirm Password']) }}
					</div>

					<!-- Submit Registration Form -->
					{{ Form::submit('Sign Up!', ['class' => 'btn btn-lg btn-primary btn-block']) }}

				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop

<!-- Show default MyHub Sidebar -->
@section('sidebar')
	{{-- No Sidebar --}}
@stop