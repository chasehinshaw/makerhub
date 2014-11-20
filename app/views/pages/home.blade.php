<!-- Public Homepage -->
@extends('layouts.default')
<!-- Pull {$user} subscribed sections (repeat x3) -->
@section('main')
	<div class="col-lg-12 col-md-12">
		
		<div class="jumbotron">
		
			<h1>Welcome to MakerHub!</h1>
			<p>A place to share your ideas and build projects that can link with interactive objects! </p>
			
			@if (! $currentUser) 
				<p>
					{{ link_to_route('register_path', 'Sign Up!', null, ['class' => 'btn btn-info btn-wide btn-hg btn-embossed']) }}
				</p>
			@endif
		</div>

	</div>
@stop

<!-- Show default MyHub Sidebar -->
@section('sidebar')
	{{-- No Sidebar --}}
@stop