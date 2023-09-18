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
                    <input type="text" max-lenght="1024" class="form-control  @error('thumb') is invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci img..." value="{{ old('thumb', $comic ->thumb) }}">
                    @error('thumb')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Inserisci titolo <strong class="color-strong">*</strong></label>
                    <input type="text" max-lenght="64" class="form-control @error('title') is invalid @enderror" id="title" name="title" placeholder="Inserisci titolo..." value="{{ old('title', $comic ->title) }}" required>
                    @error('title')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Inserisci prezzo <strong class="color-strong">*</strong></label>
                    <input type="number" min="1" step="0.01" max="1000" class="form-control @error('price') is invalid @enderror" id="price" name="price" placeholder="Inserisci prezzo..." value="{{ old('price', $comic ->price) }}" required>
                    @error('price')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Inserisci serie <strong class="color-strong">*</strong></label>
                    <input type="text" maxlength="100" class="form-control @error('series') is invalid @enderror" id="series" name="series" placeholder="Inserisci serie..." value="{{ old('series', $comic ->series) }}" required>
                    @error('series')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Inserisci tipo <strong class="color-strong">*</strong></label>
                    <input type="text" maxlength="32" class="form-control @error('type') is invalid @enderror" id="type" name="type" placeholder="Inserisci tipo..." value="{{ old('type', $comic ->type) }}" required>
                    @error('type')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Inserisci data d'uscita <strong class="color-strong">*</strong></label>
                    <input type="date" class="form-control @error('sale_date') is invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci data d'uscita..." value="{{ old('sale_date', $comic ->sale_date) }}" required>
                    @error('sale_date')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Inserisci gli artisti</label>
                    <textarea class="form-control @error('artists') is invalid @enderror" id="artists" name="artists" placeholder="Inserisci gli artisti..." rows="3">{{ old('artists', $comic ->artists) }}</textarea>
                    @error('artists')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Inserisci gli scrittori</label>
                    <textarea class="form-control @error('writers') is invalid @enderror" id="writers" name="writers" placeholder="Inserisci gli scrittori..." rows="3">{{ old('writers', $comic ->writers) }}</textarea>
                    @error('writers')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Inserisci la descrizione</label>
                    <textarea class="form-control @error('description') is invalid @enderror" id="description" name="description" placeholder="Inserisci la descrizione..." rows="5">{{ old('description', $comic ->description) }}</textarea>
                    @error('description')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
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