<div class="comments">
	<ul class="list-group">
	@foreach ($post->comments as $comment)
		<li class="list-group-item">
			<strong>{{ $comment->created_at->diffForHumans() }} &nbsp;</strong>
		
			{{ $comment->body }}
		
		</li>
		<hr>
	@endforeach
</ul>
</div>