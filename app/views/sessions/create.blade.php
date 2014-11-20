@extends ('layouts.default')

@section('main')
	<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Log in!</h5>
			</div>

			<div class="panel-body">
				{{ Form::open(['route' => 'login_path']) }}

					<!-- Email form Input -->
					<div class="form-group form-group-lg">
						{{ Form::text('email', null, ['class'=>'form-control','placeholder'=>'Email', 'required'=>'required']) }}
					</div>

					<!-- Password form Input -->
					<div class="form-group form-group-lg">
						{{ Form::password('password', ['class'=>'form-control','placeholder'=>'Password', 'required'=>'required']) }}
					</div>

					<!-- Submit -->
					{{ Form::submit('Sign In', ['class'=>'btn btn-lg btn-primary btn-block']) }}
					{{ link_to('/password/remind', 'Reset Your Password', ['class'=>'form-side-link text-muted']) }}
				
				{{ Form::close() }}
			
			</div>
		</div>
	</div>
@stop

<!-- Show default MyHub Sidebar -->
@section('sidebar')
	{{-- No Sidebar --}}
@stop
