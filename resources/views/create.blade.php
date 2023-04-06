@extends('welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <form action="{{ route('addSauce') }}" method="post">
        <h2>ADD A SAUCE</h2>
        @csrf
        <input type='text' name='name' placeholder='Name'>
        <input type='text' name='manufacturer' placeholder='Manufacturer'>
        <input type='text' name='description' placeholder='Description'>
        <input type='number' name='heat' placeholder='Heat' max="10" min="0">
        <input type='text' name='mainPepper' placeholder='Main pepper'>
        <input type='text' name='image' placeholder="Lien de l'image">
        <button type="submit">Add</button>
    </form>
@endsection
