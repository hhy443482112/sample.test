@if ($user->id !== Auth::user()->id)
	<div id="follow_row">
		@if (Auth::user()->isFollowing($user->id))
			<form action="{{ route('followers.destroy', $user->id) }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button type="submit" class="btn btn-sm btn-follow">取消关注</button>
			</form>
		@else
			<form action="{{ route('followers.store', $user->id) }}" method="POST">
				{{ csrf_field() }}
				<button type="submit" class="btn btn-sm btn-primary btn-follow">关注</button>
			</form>
		@endif
	</div>
@endif