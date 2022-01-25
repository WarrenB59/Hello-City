@extends('app')

@section('content')
        <img src="{{ asset('images/Flag_of_France.svg') }}" alt="France Flag" class="mt-12 rounded shadow-md h-32">
        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-blue-800">Bonjour de France !</h1>

        <p class="text-lg text-gray-800">Il est actuellement {{date('H:i:s')}}</p>
@endsection
