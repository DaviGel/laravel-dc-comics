@extends('layouts.master')

@section('list')
<div class="container">
  <h1>Elenco fumetti</h1>
  <a class="text-decoration-none" href="{{ route('comics.create') }}">Crea nuovo fumetto</a>
  <ul class="list-group mt-3">
    @foreach ($comics as $comic)
        <li class="list-group-item">{{ $comic->title }} - {{ $comic->price }} - {{ $comic->series }} - {{ $comic->sale_date }} - {{ $comic->type }} - <a class="text-decoration-none" href="{{ route('comics.show', $comic) }}" alt="Comic">vedi dettaglio</a></li>
    @endforeach
  </ul>
</div>
@endsection