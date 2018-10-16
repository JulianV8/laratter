@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    @foreach($user->follows as $follow)
        <li>{{ $follow->username }}</li>
    @endforeach
@endsection