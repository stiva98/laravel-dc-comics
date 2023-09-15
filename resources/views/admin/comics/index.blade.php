@extends('layouts.main')

@section('page-title', 'DC Comics')


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                DC Comics
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-warning w-100">
                + Aggiungi
            </a>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Data d'uscita</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Artisti</th>
                        <th scope="col">Scrittori</th>
                        <th scope="col">Azione</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->price }} €</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->artists }}</td>
                            <td>{{ $comic->writers }}</td>
                            <td class="d-flex border-bottom-0">
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-warning me-2">
                                    Singolo Film
                                </a>
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-success me-2">
                                    Modifica
                                </a>
                                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" onsubmit="return confirm('Sei sicuro di eliminare questo film della DC Comics?');">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger pb-5">
                                        Elimina
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection