@extends('layouts.app')


@section('main')
    <h1>Trains Page</h1>
    <div class="row">

        @foreach ($trains as $train)
            <div class="col-3 py-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $train->train_code }}</h4>
                        <p class="card-text"><span>Partenza da:</span> {{ Ucwords($train->departure_station) }}</p>
                        <p class="card-text"><span>Arrivo a:</span> {{ Ucwords($train->arrival_station) }}</p>
                        <hr>
                        <p class="card-text"><span>Partenza il:</span> {{ $train->departure_time }}</p>
                        <p class="card-text"><span>Arrivo il:</span> {{ $train->arrival_time }}</p>
                        <a href="#" class="btn btn-primary">Clicca per maggiori dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
