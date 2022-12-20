@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row row-cols-5 g-4">
        @forelse($trains as $train)
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>{{$train->id}}</li>
                        <li><strong>azienda:</strong> {{$train->azienda}}</li>
                        <li><strong>stazione_di_partenza:</strong> {{$train->stazione_di_partenza}}</li>
                        <li><strong>stazione_di_arrivo:</strong> {{$train->stazione_di_arrivo}}</li>
                        <li><strong>orario_di_partenza:</strong> {{$train->orario_di_partenza}}</li>
                        <li><strong>orario_di_arrivo:</strong> {{$train->orario_di_arrivo}}</li>
                        <li><strong>codice_treno:</strong> {{$train->codice_treno}}</li>
                        <li><strong>numero_carrozze:</strong> {{$train->numero_carrozze}}</li>
                        <li><strong>in_orario:</strong> {{$train->in_orario}}</li>
                        <li><strong>cancellato:</strong> {{$train->cancellato}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <p>No trains yet!</p>
        </div>
        @endforelse
    </div>
</div>
@endsection