@extends('layouts.main')

@section('page-title', $comic ->title)


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{ $comic ->title }}
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('comics.update', ['comic' => $comic ->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="thumb" class="form-label">Inserisci img</label>
                    <input type="text" max-lenght="1024" class="form-control" id="thumb" name="thumb" placeholder="Inserisci img..." value="{{ $comic ->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Inserisci titolo <strong class="color-strong">*</strong></label>
                    <input type="text" max-lenght="64" class="form-control" id="title" name="title" placeholder="Inserisci titolo..." value="{{ $comic ->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Inserisci prezzo <strong class="color-strong">*</strong></label>
                    <input type="number" min="1" step="0.01" max="1000" class="form-control" id="price" name="price" placeholder="Inserisci prezzo..." value="{{ $comic ->price }}" required>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Inserisci serie <strong class="color-strong">*</strong></label>
                    <input type="text" maxlength="100" class="form-control" id="series" name="series" placeholder="Inserisci serie..." value="{{ $comic ->series }}" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Inserisci tipo <strong class="color-strong">*</strong></label>
                    <input type="text" maxlength="32" class="form-control" id="type" name="type" placeholder="Inserisci tipo..." value="{{ $comic ->type }}" required>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Inserisci data d'uscita <strong class="color-strong">*</strong></label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci data d'uscita..." value="{{ $comic ->sale_date }}" required>
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Inserisci gli artisti</label>
                    <textarea class="form-control" id="artists" name="artists" placeholder="Inserisci gli artisti..." rows="3" value="{{ $comic ->artists }}"></textarea>
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Inserisci gli scrittori</label>
                    <textarea class="form-control" id="writers" name="writers" placeholder="Inserisci gli scrittori..." rows="3" value="{{ $comic ->writers }}"></textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Inserisci la descrizione</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione..." rows="5" value="{{ $comic ->description }}"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-warning w-100">
                        + Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection