@extends('layouts.app')

@section('title', 'Home page')

@section('content')

    <h1>Elenco dei films</h1>

    <ul>
        @foreach ($movies as $movie)
        <li>{{$movie->id}} - {{$movie->title}} - {{$movie->original_title}}</li>
        @endforeach
    </ul>

@endsection
