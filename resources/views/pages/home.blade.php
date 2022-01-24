@extends('app')

@section('content')
        <h1>Bonjour de France !</h1>

        <p>Il est actuellement {{date('H:i:s')}}</p>
@endsection
