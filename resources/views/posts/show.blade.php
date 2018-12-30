@extends('layout/app')

@section('content')
<a href="/posts" class="btn btn-default">חזור</a>
      <h1>{{$post->title}} </h1>
      <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
      <br><br>
      <div>
          {!!$post->body!!}
      </div>
      <hr>
<small>נוצר בתאריך {{$post->created_at}} באמצעות {{$post->user->name}}</small>
      <hr>
      @if (!Auth::guest())
         @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> ערוך </a>

            {!! Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-left']) !!}
                  {{Form::hidden('_method','DELETE')}}
                  {{Form::submit('מחק',['class'=>"btn btn-danger"])}}
            {!! Form::close() !!}      
         @endif
      @endif
 @endsection
    