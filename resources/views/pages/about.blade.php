@extends('app')

@section('title', 'A propos | ' . config('app.name'))

@section('content')
        <img src="{{ asset('images/dev_icon.png') }}" alt="Developer Icon">

        <p>Codé avec &hearts; par WARREN</p>

        <p><a href="{{ route('home')}}">Revenir vers la page d'accueil</a></p>
@endsection
