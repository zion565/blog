@extends('layouts/app')

@section('content')
       <h1> {{$title}} </h1>
      <p>{{$services[0]}}</p>
      <p>{{$services[1]}}</p>
      <p>{{$services[2]}}</p>
    @endsection
