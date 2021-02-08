@extends('layouts.app')

@section('content')
<a href="/pkproject/public/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>
  <img style="width:100%;height:500px" src="/pkproject/storage/app/public/cover_images/{{$post->cover_image}}" alt="">
  <p>{{$post->body}}</p>
  <hr>
   <small>Written {{$post->created_at}}</small> 
   <hr>
   @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
   <a href="/pkproject/public/posts/{{$post->id}}/edit" class="btn btn-default">EDIT</a>
   {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST','class' => 'pull-right'])!!}
   {{Form::hidden('_method','DELETE')}}
   {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
   {!!Form::close()!!}
   @endif
@endif

@endsection

