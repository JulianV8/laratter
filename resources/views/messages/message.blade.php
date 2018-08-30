@extends('layouts.app')
@section('content')
  <h1>Mensaje N°: {{ $messege->id }}</h1>
  <img class="img-thumbnail" src="{{ $messege->image }}">
  <p>
    {{ $messege->content }}
    <small>{{ $messege->created_at }}</small>
  </p>
@endsection
