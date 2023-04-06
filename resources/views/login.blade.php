@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <form action="{{ route('authenticate') }}" method="post">
        <h2>LOGIN</h2>
        @csrf
        <input type='email' name='email' placeholder='Email'>
        <input type='password' name='password' placeholder='Password'>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <button type="submit">Connexion</button>
    </form>
@endsection
