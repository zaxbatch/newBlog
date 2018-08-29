@extends ('layouts.master')

@section ('content')
<div class="container">
	
	        <div class="blog-post">
            <h1 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} <a href="#">Mark</a></p>

            <p>{{ $post->body}}</p>
</div>
@endsection