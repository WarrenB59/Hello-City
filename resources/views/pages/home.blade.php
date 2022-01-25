@extends('app')

@section('content')
        <img src="{{ asset('images/Flag_of_France.svg') }}" alt="France Flag">
        <h1>Bonjour de France !</h1>

        <p>Il est actuellement {{date('H:i:s')}}</p>
@endsection
