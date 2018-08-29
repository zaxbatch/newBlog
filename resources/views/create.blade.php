@extends ('layouts.master')

@section ('content')




<main role="main" class="container">
	<div>
		<br>
		<h1>What's Happening?</h1>
	</div>
      <div>
      	<br>
      	<form class="form-group"method="POST" action="/posts">

        	
          {{csrf_field() }}

          <label for="title">Title</label><br>
        	<input type="text" name="title" class="form-control" id="title"><br><br>
        	
        	<label for="body">Body</label><br>
        	<textarea name="body" class="form-control id="body"></textarea><br>
        	<button type="submit" class="btn btn-primary">Publish</button>
        </form>
      </div>

     @include ('layouts.error')

</main><!-- /.container -->

@endsection
