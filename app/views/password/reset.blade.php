@extends('layouts.default')

@section('main')

	<div class="row">
		<div class="col-md-6">

			<h1>Reset Your Password</h1>

			{{ Form::open() }}
				{{ Form::hidden('token', $token) }}

				<!-- Email Form Input -->
				<div class="form-group">
					{{ Form::label('email', 'Email:') }}
					{{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
				</div>

				<!-- Password Form Input -->
				<div class="form-group">
					{{ Form::label('password', 'Password:') }}
					{{ Form::password('password',  ['class' => 'form-control', 'required']) }}
				</div>

				<!-- Confirm Password Form Input -->
				<div class="form-group">
					{{ Form::label('password_confirmation', 'Password:') }}
					{{ Form::password('password_confirmation',  ['class' => 'form-control', 'required']) }}
				</div>

				<!-- Submit Form -->
				<div class="form-group">
					{{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}
				</div>
			{{ Form::close() }}

		</div>
	</div>

@stop