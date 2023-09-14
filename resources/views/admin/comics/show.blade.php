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
        <div class="col">
            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top image-card" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">
                        <div class="text-warning">
                            Prezzo: <strong>{{ $comic->price }} €</strong>
                        </div>
                        <div>
                            Serie: <strong>{{ $comic->series }}</strong>
                        </div>
                        <div>
                            Tipo: <strong>{{ $comic->type }}</strong>
                        </div>
                        <div>
                            Data d'uscita: <strong>{{ $comic->sale_date }}</strong>
                        </div>
                        <div class="border border-success p-2 mb-2 border-opacity-50 rounded">
                            Descrizione: <strong>{{ $comic->description }}</strong>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection