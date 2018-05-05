@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is the Laravel application from the "Laravel From Scratch" YouTube Series.</p>
    <p><a type="button" class="btn btn-primary" href="/login">Login</a> <a type="button" class="btn btn-success" href="/register">Register</a></p>
  </div>
@endsection
