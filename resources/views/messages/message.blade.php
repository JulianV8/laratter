@extends('layouts.app')
@section('content')
  <h1>Mensaje N°: {{ $messege->id }}</h1>
  @include('messages.messege')

  <responses :messege="{{ $messege->id }}"></responses>
@endsection
