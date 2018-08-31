<div class="card">
	<div class="card-block">
		<form class="form-group" method="POST" action="/posts/{{ $post->id }}/comments">

          {{csrf_field() }}
			

			<textarea  name="body" class="form-control" placeholder="What do you think?" required></textarea>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Comment</button>
		</div>
		</form>

	</div>
	<div>
		@include ('layouts.error')
	</div>

	
</div>