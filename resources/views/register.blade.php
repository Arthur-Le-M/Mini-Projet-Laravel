@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <form action="{{ route('newUser') }}" method="post">
        <h2>REGISTER</h2>
        @csrf
        <input type='email' name='email' placeholder='Email'>
        <input type='password' name='password' placeholder='Password'>
        <input type='password' name='password_confirmation' placeholder='Confirm password'>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <button type="submit">S'inscrire</button>
    </form>
@endsection
