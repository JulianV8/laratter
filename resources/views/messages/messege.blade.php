<img class="img-thumbnail" src="{{ $messege->image }}"> <!--Variable $messege ya la puedo usar como un objeto gracias al Model Messege-->
<p class="card-text">
<div class="text-muted">Escrito por <a href="{{$messege->user->username}}">{{ $messege->user->name }}</a></div>
  {{ $messege->content }}
  <a href="/messege/{{ $messege->id }}">Leer mas</a>
</p>
<div class="card-text text-muted float-right">
  {{ $messege->created_at }}
</div>