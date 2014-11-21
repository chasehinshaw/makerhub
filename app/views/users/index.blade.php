@extends('layouts.default')

@section('main')
	<div class="container">
	<h1>Explore All Users</h1>

	<!-- Add the button section to SORTBY: -->
	<!-- || (users)(ideas) || (recent) (top) || -->
	
	@foreach( $users->chunk(4) as $userSet )
		<div class="row users">

			@foreach( $userSet as $user )
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					
					<div class="card people">
					  <div class="card-top">
					    
					    @include('users.partials.avatar', ['size' => 200, 'class' => ''])

					  </div>
					  <div class="card-info">
					    {{ link_to_route('profile_path', $user->username, $user->username, ['class' => 'title']) }}
					    <div class="desc"> {{ Str::limit($user->bio, 48) }} </div>
					  </div>
					  <div class="card-bottom">

					    @if($user->is( $currentUser ))
								{{ link_to_route('profile_path', "My Profile", $user->username, ['class' => 'btn btn-primary btn-xs btn-block']) }}
							@else
								@include('users.partials.subscribe-form', ['class' => 'btn-xs'])
							@endif
							
					  </div>
					</div>

				</div>
			@endforeach
		</div>
	@endforeach
	{{ $users->links() }}
	</div>
@stop