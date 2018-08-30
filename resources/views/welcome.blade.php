@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
  <h1>Laratter</h1>
  <nav>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="/laratter/public">Home</a> <!-- Cuando uso XAMPP -->
        <!--<a class="nav-link" href="/laratter/public">Home</a>--> <!-- Cuando uso Artisan Serve -->
      </li>
    </ul>
  </nav>
</div>
<div class="row">
  @forelse ($messeges as $messege)
    <div class="col-6">
      <img class="img-thumbnail" src="{{ $messege->image }}"> <!--Variable $messege ya la puedo usar como un objeto gracias al Model Messege-->
      <p class="card-text">{{ $messege->content }}
        <a href="/messege/{{ $messege->id }}">Leer mas</a>
      </p>

    </div>
  @empty
    <p class="text"> No hay Twits disponibles </p>
  @endforelse
</div>
@endsection
