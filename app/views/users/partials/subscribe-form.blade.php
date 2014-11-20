@if($signedIn)
	@if($user->isFollowedBy($currentUser))
		<!-- Unsubscribe Button(Form) -->
		{{ Form::open([ 'method'=>'DELETE', 'route' => ['unsubscribe_path', $user->id] ]) }}
			{{ Form::hidden('userIdToUnsubscribe', $user->id) }}
			<button class="btn btn-block btn-danger {{ isset($class) ? $class: '
'}} " type="submit">Unfollow</button>
		{{ Form::close() }}
	@else
		<!-- Subscribe Button(Form) -->
		{{ Form::open(['route' => 'subscribe_path']) }}
			{{ Form::hidden('userIdToSubscribeTo', $user->id) }}
			<button class="btn btn-block btn-info {{ isset($class) ? $class: '
'}} " type="submit">Follow</button>

		{{ Form::close() }}
	@endif
@else

	<!-- If not signed in -->
	<div class="subscribe-form-bottom-links">
		{{ link_to_route('login_path', 'Sign In', null, ['class' => '']) }}
		or
		{{ link_to_route('register_path', 'Register', null, ['class' => '']) }}
	</div>
	
@endif
