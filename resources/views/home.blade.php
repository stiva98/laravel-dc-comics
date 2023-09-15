@extends('layouts.main')

@section('page-title', 'Homepage')


@section('main-content')
<div class="container">
    <h1>
        Homepage
    </h1>
</div>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3 mb-3">
                <div class="card height" style="width: 18rem;">
                    <img src="{{ $comic ->thumb }}" alt="{{ $comic ->title }}" class="height-img">
                    <div class="card-body">
                      <h5 class="card-title">{{ $comic->title }}</h5>
                      <p class="card-text text-warning fw-bold">Prezzo: <strong>{{ $comic->price }} €</strong></p>
                      <p class="card-text">Data di pubblicazione: <strong>{{ $comic->sale_date }}</strong></p>
                      <p class="card-text">Serie: <strong>{{ $comic->series }}</strong></p>
                      <a href="/comics" class="btn btn-warning text-black">Go DC Comics</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection