@extends('layout')

@section('content')

   <div class="col-sm-8 blog-main">

        @foreach($tasks as $task)
           
          <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{route('tasklink',$task->id)}}">{{$task->title}}</a></h2>

            <p class="blog-post-meta">January 1, 2014 by <a href="#"></a></p>

            <p>{{$task->post_body}}</p>
            <hr> 
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            
          </div><!-- /.blog-post -->       

        @endforeach

    </div><!-- /.blog-main -->

@endsection