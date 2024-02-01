@extends('layouts.master')

@section('create')
<div class="container">
    <h1>Nuovi fumetti</h1>
    <a class="text-decoration-none" href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    <form class="mt-3" action="{{ route('comics.store') }}" method="POST">
      @csrf
      <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title">
      </div>
      <div class="mb-3">
          <label class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="mb-3">
          <label class="form-label">Immagine</label>
          <input type="text" class="form-control" name="thumb">
      </div>
      <div class="mb-3">
          <label class="form-label">Prezzo</label>
          <input type="text" class="form-control" name="price">
      </div>
      <div class="mb-3">
          <label class="form-label">Serie</label>
          <input type="text" class="form-control" name="series">
      </div>
      <div class="mb-3">
          <label class="form-label">Data di vendita</label>
          <input type="date" class="form-control" name="sale_date">
      </div>
      <div class="mb-3">
          <label class="form-label">Tipo</label>
          <input type="string" class="form-control" name="type">
      </div>
      <div class="mb-3">
          <label class="form-label">Artisti</label>
          <input type="string" class="form-control" name="artists">
      </div>
      <div class="mb-3">
          <label class="form-label">Scrittori</label>
          <input type="string" class="form-control" name="writers">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection