@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card m-3">
                    <ul class="list-group list-group-flush">
                        <div class="card-header"><strong>Titolo:</strong> {{ $movie->title }}</div>
                        <li class="list-group-item"><strong>Titolo Originale: </strong> {{ $movie->original_title }}</li>
                        <li class="list-group-item"><strong>Nazionalità: </strong>{{ $movie->nationality }}</li>
                        <li class="list-group-item"><strong>Data di uscita: </strong>{{ $movie->date }}</li>
                        <li class="list-group-item"><strong>Voto: </strong>{{ $movie->vote }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection
