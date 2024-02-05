@extends('layouts.master')

@section('edit')
    <h1>Modifica fumetto</h1>
    <a class="text-decoration-none" href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    <form class="mt-3" action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title', $comic->title) }}">
            @error('title')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id=""
                cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
            @error('description')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                value="{{ old('price', $comic->price) }}">
            @error('price')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                value="{{ old('series', $comic->series) }}">
            @error('series')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Data di vendita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input type="string" class="form-control @error('type') is-invalid @enderror" name="type"
                value="{{ old('type', $comic->type) }}">
            @error('type')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Artisti</label>
            <input type="string" class="form-control @error('artists') is-invalid @enderror" name="artists"
                value="{{ old('artists', $comic->artists) }}">
            @error('artists')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Scrittori</label>
            <input type="string" class="form-control @error('writers') is-invalid @enderror" name="writers"
                value="{{ old('writers', $comic->writers) }}">
            @error('writers')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
