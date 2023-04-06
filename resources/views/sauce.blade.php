@extends('welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/sauce.css') }}">
    <div class="container">
        <img src="{{ $sauce->imgURL }}" alt="{{ $sauce->name }}">
        <div>
            <h2>{{ $sauce->name }}</h1>
            <p><span class='titreDesc'>Manufacturer</span> : {{ $sauce->manufacturer }}</p>
            <p><span class='titreDesc'>Description</span> : {{ $sauce->description }}</p>
            <p><span class='titreDesc'>Main Pepper</span> : {{ $sauce->mainPepper }}</p>
            <p><span class='titreDesc'>Heat</span> : {{ $sauce->heat }}/10</p>
            <div>
                <a class="buttonSauce" id="like" href='{{route('likeSauce', ['id' => $sauce->id])}}'>👍 {{ $sauce->likes }}</a>
                <a class="buttonSauce" id="dislike" href='{{route('dislikeSauce', ['id' => $sauce->id])}}'>👎 {{ $sauce->dislikes }}</a>
        </div>


    </div>
@endsection
