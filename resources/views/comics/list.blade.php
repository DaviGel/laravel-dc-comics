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
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                        data-bs-target="#modal-{{ $comic->id }}">
                        x
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1" aria-labelledby="modalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cancellazione fumetto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro di voler cancellare il fumetto: {{ $comic->title }}?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annulla</button>
                                    <button type="submit" class="btn btn-danger">Cancella</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
