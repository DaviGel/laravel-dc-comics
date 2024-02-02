@extends('layouts.master')

@section('show')
    <h1>{{ $comic->title }}</h1>
    <hr>
    <p>{{ $comic->description }}</p>
    <a class="text-decoration-none" href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
@endsection
