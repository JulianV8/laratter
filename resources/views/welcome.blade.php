@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
  <h1>Laratter</h1>
  <nav>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <!--<a class="nav-link" href="/laratter/public">Home</a> <!-- Cuando uso XAMPP -->
        <a class="nav-link" href="/">Home</a> <!-- Cuando uso Artisan Serve -->
      </li>
    </ul>
  </nav>
</div>

<div class="row">
  <form action="/messages/create" method="post">
    <div class="form-group">
    {{ csrf_field() }}
      <input type="text" class="form-control @if ($errors->has('message')) is-invalid @endif" name="message" class="form-control" placeholder="En que piensas?">
      @if ($errors->has('message'))
        @foreach ($errors->get('message') as $error)
        <div class="invalid-feedback">{{ $error }}</div>
        @endforeach
      @endif
    </div>
  </form>
</div>

<div class="row">
  @forelse ($messeges as $messege)
    <div class="col-6">
      @include('messages.messege')
    </div>
  @empty
    <p class="text"> No hay Twits disponibles </p>
  @endforelse
  @if(count($messeges))
    <div class="mt-2 mx-auto">
    {{ $messeges }}
    </div
  @endif
</div>
@endsection
