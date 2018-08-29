<form class="form-group">
    @if (count($errors))
      <div class="alert alert-danger">
<form class="form-group">
        
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            <li>Please try again</li>
          </ul>
        </form>
      </div>
    @endif
</form>