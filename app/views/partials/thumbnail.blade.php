<div class="col-sm-4s col-md-4 col-lg-4">

  <div class="card">
    <div class="card-heading image">
      
      <div class="pull-left">
        @include('users.partials.avatar', ['user' => $idea->user, 'size' => 48])
      </div>
      
      <!-- Need to fix CSS where header drops below image -->
      <div class="card-heading-header">
        <h3> {{ Str::limit($idea->title, 16) }} </h3>
        <span>Published {{ $idea->created_at->diffForHumans() }}</span>
      </div>

    </div>

    <div class="card-media">
      <a class="card-media-container" href="#">
         <img src="{{ $idea->img_url }}" alt="media"/>
      </a>
    </div>

    <div class="card-body">
      <p class="small"> 
        {{ $idea->content }}
      </p>
    </div>

    <!-- Comments Section -->

    <div class="card-comments">
      <div class="comments-collapse-toggle">
         <span data-toggle="collapse" data-target="#<?= $itemCount ?>-comments">
          
          {{ $idea->ideaComments->count() }} Comments 
          <span class="fui-triangle-down-small"></span>

        </span>
      </div>
      
      
      <div id="<?= $itemCount ?>-comments" class="comments collapse">
    
        @foreach ($idea->ideaComments as $comment)
          <div class="media">
            <div class="pull-left">
              @include('users.partials.avatar', ['user' => $comment->owner, 'size' => 28])
            </div>

            <div class="media-body">
              <h4 class="media-heading"> {{ $comment->owner->username }} </h4>
              <p> {{ $comment->body }} </p>
            </div>
          </div>
        @endforeach
      
      @if ($signedIn)
        {{ Form::open(['route'=> ['comment_path', $idea->id], 'class'=>'comment-form']) }}

          {{ Form::hidden('idea_id', $idea->id) }}

          <!-- Body Form Input -->
          <div class="form-group">
            {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Say something...']) }}
          </div>

        {{ Form::close() }}
      @endif

      </div>
     

    </div>

  </div>
</div>