@extends('layouts.app')

@section('content')
    @foreach($messages as $messege)
        @include('messages.messege')
    @endforeach
@endsection