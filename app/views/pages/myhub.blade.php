<!-- MYHUB -->
<!-- This is the AUTHENTICAED Homepage -->

<!-- Pull {$user} subscribed sections (repeat x3) -->
@section('main')
	<div class="col-lg-9">

		<h1>This is the homepage content...</h1>
		<p>I will love myself if this actually works... fingers crossed</p>
		@foreach($ideas as $idea)
			<h4>{{{ $idea->title }}} </h4>
			<p>{{{ $idea->content }}}</p>
		@endforeach

	</div>
@stop

<!-- Show default MyHub Sidebar -->
@section('sidebar')

  <div class="col-lg-3">
	  <section class="sidebar">
		  <ul class="nav nav-list ">
		  
		  @include('partials.sidebar._myhub-sub-navigation')
		  <li class="divider"></li>
		  @include('partials.sidebar._myhub-create-buttons')
		  <li class="divider"></li>
		  @include('partials.sidebar._myhub-subscribe-accordian')

		  </ul>
	  </section>
  </div>

@stop