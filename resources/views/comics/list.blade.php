@extends('layouts.master')

@section('list')
    <h1>Elenco fumetti</h1>
    <a class="text-decoration-none" href="{{ route('comics.create') }}">Crea nuovo fumetto</a>
    <ul class="list-group mt-3">
        @foreach ($comics as $comic)
            <li class="list-group-item d-flex align-items-center">
                {{ $comic->title }}
                - {{ $comic->price }}
                - {{ $comic->series }}
                - {{ $comic->sale_date }}
                - {{ $comic->type }}
                - <a class="text-decoration-none mx-1" href="{{ route('comics.show', $comic) }}" alt="Comic">vedi
                    dettaglio</a>
                - <a class="text-decoration-none mx-1 link-success" href="{{ route('comics.edit', $comic->id) }}"
                    alt="Edit">modifica</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">x</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
