@extends('layouts.default')

@section('main')
	
	<div class="col-md-9">
	
		<table class="table table-bordered">
			<thead>
				<tr>
					<th></th>
					<th>User</th>
					<th>Member Since</th>
					<th>Manage</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($users as $user)
					<tr>
						<td width="36px"> @include('users.partials.avatar') </td>
						<td> 
							<a href="{{ route('profile_path', $user->username) }}">
								<strong>{{ $user->username }}</strong>  
							</a>
						</td>
						<td> {{ $user->created_at->toFormattedDateString() }} </td>
						<td class="subscribe-manage-column">
							@include('users.partials.subscribe-form')
						</td>
					</tr>
				@endforeach
				
				{{-- End Repeat Region --}}
			</tbody>
		</table>

	</div>
@stop


@section('sidebar')
	
@stop



