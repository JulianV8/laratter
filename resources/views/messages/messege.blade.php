<img class="img-thumbnail" src="{{ $messege->image }}"> <!--Variable $messege ya la puedo usar como un objeto gracias al Model Messege-->
<p class="card-text">
  <div class="text-muted">Escrito por {{ $messege->user_id }}</div>
  {{ $messege->content }}
  <a href="/messege/{{ $messege->id }}">Leer mas</a>
</p>
