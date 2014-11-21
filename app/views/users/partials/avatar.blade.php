
<a href="{{ URL::route('profile_path', $user->username) }}">
	<img src="{{ $user->present()->gravatar( isset($size) ? $size: 32) }}" alt="{{ $user->username }}" class="media-object {{ isset($class) ? $class: 'img-circle'}} avatar">
</a> 