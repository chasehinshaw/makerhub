@include('layouts.partials.errors')
		
<div class="idea-post">
	{{ Form::open(['route' => 'ideas_path', 'files' => true]) }}
		
		<div class="form-group">

			{{ Form::textarea('content', null, ['class'=>'form-control idea-post-textarea', 'placeholder'=>'What\'s your Idea?', 'rows'=>'3']) }}
			
			<div class="fileinput fileinput-new" data-provides="fileinput">
		    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
		    <div class="fileinput-btn-group">
		      <span class="btn btn-primary btn-xs btn-embossed btn-file">
		        <span class="fileinput-new"><span class="fui-image"></span>&nbsp;&nbsp;Select image</span>
		        <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
		       
		        {{ Form::file('ideaPhoto') }}

		      </span>
		      <a href="#" class="btn btn-primary btn-xs btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;Remove</a>
		    </div>
		  </div>

		</div>

		

		<div class="form-group idea-post-submit">
			{{ Form::submit('Post Idea', ['class' => 'btn btn-primary btn-xs']) }}
		</div>

	{{ Form::close() }}
</div>