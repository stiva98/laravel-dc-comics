@extends('layouts.main')

@section('page-title', 'Crea il nuovo DC Comics')


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Crea il tuo nuovo DC Comics
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="thumb" class="form-label">Inserisci img</label>
                    <input type="text" max-lenght="1024" class="form-control @error('thumb') is invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci img..." value="{{ old('thumb') }}">
                    @error('thumb')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Inserisci titolo <strong class="color-strong">*</strong></label>
                    <input type="text" max-lenght="64" class="form-control @error('title') is invalid @enderror" id="title" name="title" placeholder="Inserisci titolo..." required value="{{ old('title') }}">
                    @error('title')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Inserisci prezzo <strong class="color-strong">*</strong></label>
                    <input type="number" step="0.01" min="1" max="1000" class="form-control @error('price') is invalid @enderror" id="price" name="price" placeholder="Inserisci prezzo..." required value="{{ old('price') }}">
                    @error('price')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Inserisci serie <strong class="color-strong">*</strong></label>
                    <input type="text" maxlength="100" class="form-control @error('series') is invalid @enderror" id="series" name="series" placeholder="Inserisci serie..." required value="{{ old('series') }}">
                    @error('series')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Inserisci tipo <strong class="color-strong">*</strong></label>
                    <input type="text" maxlength="32" class="form-control @error('type') is invalid @enderror" id="type" name="type" placeholder="Inserisci tipo..." required value="{{ old('type') }}">
                    @error('type')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Inserisci data d'uscita <strong class="color-strong">*</strong></label>
                    <input type="date" class="form-control @error('sale_date') is invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci data d'uscita..." required value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">Inserisci gli artisti</label>
                    <textarea class="form-control @error('artists') is invalid @enderror" id="artists" name="artists" placeholder="Inserisci gli artisti..." rows="3">{{ old('artists') }}</textarea>
                    @error('artists')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">Inserisci gli scrittori</label>
                    <textarea class="form-control @error('writers') is invalid @enderror" id="writers" name="writers" placeholder="Inserisci gli scrittori..." rows="3">{{ old('writers') }}</textarea>
                    @error('writers')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Inserisci la descrizione</label>
                    <textarea class="form-control @error('description') is invalid @enderror" id="description" name="description" placeholder="Inserisci la descrizione..." rows="5">{{ old('description') }}</textarea>
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