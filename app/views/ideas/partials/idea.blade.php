<article class="media idea-media">
	
	<div class="pull-left">
		@include('users.partials.avatar', ['user' => $idea->user])
	</div>

	<div class="media-body">
		<h4 class="media-heading"> {{ $idea->user->username }} </h4>
		<p> {{ $idea->present()->timeSincePublished() }} </p>
		
		{{ $idea->content }}

	</div>

</article>

@if ($signedIn)
	{{ Form::open(['route'=> ['comment_path', $idea->id], 'class'=>'comments__create-form']) }}
		{{ Form::hidden('idea_id', $idea->id) }}

		<!-- Body Form Input -->
		<div class="form-group">
			{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 1]) }}
		</div>
	{{ Form::close() }}
@endif

@unless ( $idea->ideaComments->isEmpty() )
	<div class="comments">
		@foreach ( $idea->ideaComments as $comment )
			@include('ideas.partials.comment')
		@endforeach
	</div>
@endunless