@extends('layouts.default')

@section('main')
	<div class="col-lg-9 col-md-9">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				@include('ideas.partials.publish-idea-form')
			</div>
		</div>
		
		@include('ideas.partials.ideas')
		
	</div>
@stop

@section('sidebar')
	 <div class="col-lg-3 col-md-3">
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