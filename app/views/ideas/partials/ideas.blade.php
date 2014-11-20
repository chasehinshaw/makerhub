<!-- Set Counter for JS Comment Collapse -->
<?php $itemCount = 0; ?>

@forelse($ideas->chunk(3) as $feedSet)
	<div class="row">


		@foreach ($feedSet as $idea)

			@include('partials.thumbnail')
			{{-- @include('ideas.partials.idea') --}}
			
			<?php $itemCount++ ?>

		@endforeach
		
	</div>
@empty

	<div class="jumbotron">
		<h1>This user hasn't posted any ideas </h1>
	</div>

@endforelse
