<!-- MYHUB - PROFILE -->
<!-- This is Your AUTHENTICATED Profile Page -->
@extends('layouts.default')

@section('main')

	<div class="col-lg-9 col-md-9">
		<div class="user-profile-summary panel panel-default">
			<div class="panel-body">

				<div class="row">
					<div class="col-md-3 col-lg-3">

						@include('users.partials.avatar', ['size' => 200, 'class' => ''])
						<div class="user-profile-stats">
						
							<!-- If this is Your Profile -->
							@if($user->is($currentUser))
								<a href="{{ URL::route('edit_profile_path', $currentUser->id)}}" type="button" class="btn btn-info btn-sm btn-block">
									<span class="fui-check"></span>
									Edit Profile
								</a>
							@else 
								@include('users.partials.subscribe-form')
							@endif

							<ul class="list-inline">
								<li> {{ $user->present()->ideaCount }}</li>
								<li> {{ $user->present()->subscriberCount }} </li>
							</ul>
							
						</div>
					</div>

					<div class="col-md-9 col-lg-9">
						
						<h1>{{ $user->username }}</h1>
						<p class="secondary">From <b>{{ $user->location }}</b></p>
						<p class="secondary">Member since <b>ENTER DATE </b></p>
						
						<div class="divider"></div>

						<button type="button" class="btn btn-default btn-circle btn-lg">
							<span class="fui-facebook"></span>
						</button>	
						<button type="button" class="btn btn-default btn-circle btn-lg">
							<span class="fui-twitter"></span>
						</button>	
						<button type="button" class="btn btn-default btn-circle btn-lg">
							<span class="fui-github"></span>
						</button>

						<h4 class="heading">About Me</h4>
						<p>{{{ str_limit($user->bio, $limit = 255, $end = '...') }}}</p>
						<a href="">See More</a>

					</div>

				</div>
					
			</div>
		</div>
		
		<!-- If this is Your Profile -->
		@if($user->is($currentUser))
			<!-- Show Form to Post New Idea -->
			@include('ideas.partials.publish-idea-form')
		@endif

		<!-- Output All User Created Items -->
		@include('ideas.partials.ideas', ['ideas' => $user->ideas])

	</div>
@stop

<!-- Show default MyHub Sidebar -->
@section('sidebar')
	
	<div class="col-lg-3 col-md-3">
	  <section class="sidebar">
		  <ul class="nav nav-list ">
			
			@foreach($user->subscribers as $subscriber)
				@include ('users.partials.avatar', ['size' => 32, 'user'=>$subscriber])
			@endforeach

			<!-- If this is Your Profile -->
			@if($user->is($currentUser))
			  @include('partials.sidebar._myhub-sub-navigation')
			  <li class="divider"></li>
			  @include('partials.sidebar._myhub-create-buttons')
			  <li class="divider"></li>
			  @include('partials.sidebar._myhub-subscribe-accordian')
			@endif

		  </ul>
		</section>
	</div>
  
@stop