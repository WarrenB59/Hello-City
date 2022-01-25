@extends('app')

@section('title', 'A propos | ' . config('app.name'))

@section('content')
        <img src="{{ asset('images/dev_icon.png') }}" alt="Developer Icon" class="my-12 rounded-full shadow-md h-32">

        <h2 class="mb-5 text-gray-700">
            Codé avec <span class="text-pink-500">&hearts;</span> par WARREN
        </h2>

        <p>
            <a href="{{ route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">
            Revenir vers la page d'accueil</a>
        </p>
@endsection
