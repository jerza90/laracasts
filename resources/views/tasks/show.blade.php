@extends('layout')

@section('content')

<div class="col-sm-8 blog-main">
  <h1>{{$selectedtask->post_body}}</h1> 

  <hr>

  <div class="comments">

	<ul class="list-group">
		
		@foreach($selectedtask->comments as $comment)
	  
		  	<li class="list-group-item">

			  		
				    {{$comment->body}}
			  		@if(!is_null($comment->created_at)) :
			  		<em>{{$comment->created_at->diffForHumans()}}</em>
			  		@endif

		  	</li>

		@endforeach

	</ul>
</div>

{{-- Add a comment --}}
<hr>
<div class="class-card">
	<div class="card-block">
		<form method="post" action="/posts/{{$selectedtask->id}}/comments">
			
			{{ method_field('PATCH') }}

			<div class="form-group">
				<textarea class="form-control" name="comment_body" placeholder="Your Comment Here..."></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Comment</button>
			</div>

		</form>
	</div>
</div>

</div> 

@endsection
    
