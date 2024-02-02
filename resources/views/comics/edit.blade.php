@extends('layouts.master')

@section('edit')
    <h1>Modifica fumetto</h1>
    <a class="text-decoration-none" href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    <form class="mt-3" action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $comic->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Data di vendita</label>
            <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input type="string" class="form-control" name="type" value="{{ $comic->type }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Artisti</label>
            <input type="string" class="form-control" name="artists" value="{{ $comic->artists }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Scrittori</label>
            <input type="string" class="form-control" name="writers" value="{{ $comic->writers }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
