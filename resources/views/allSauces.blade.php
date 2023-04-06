@extends('welcome')
<!-- Afficher toutes les sauces de la base de données -->
@section('content')
    <link rel="stylesheet" href="{{ asset('css/allSauce.css') }}">
    <div class="allSauceContainer">
        @foreach ($sauces as $sauce)
        <a href="/sauce/{{$sauce->id}}">
            <div class="container">
                <img src="{{ $sauce->imgURL }}" alt="{{ $sauce->name }}">
                <h2>{{ $sauce->name }}</h2>
                <p>Heat : {{ $sauce->heat }}/10</p>
            </div>
        </a>
        @endforeach
    </div>
@endsection
