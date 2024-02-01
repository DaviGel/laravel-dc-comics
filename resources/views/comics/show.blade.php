@extends('layouts.master')

@section('show')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <hr>
        <p>{{ $comic->description }}</p>
        <a class="text-decoration-none" href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    </div>
@endsection
