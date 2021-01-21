@extends('layouts.app')

@section('content')

    <div class="card text-center ">
        <div class="card-header">
            <h1>{{$details->name." ".$details->brand}}</h1>
        </div>
        <div class="card-body">
            <p class="card-text"> Prezzo di listino: {{$details->price}}</p>
            <p class="card-text"> Attualmente a disposizione la taglia: {{$details->size}}</p>
            <p class="card-text">Colore disponibile: {{$details->color}} </p>
            <a href="{{route('soldout')}}" class="btn btn-primary">verifica disponibilità</a>
        </div>
        <div class="card-footer text-muted">
            <p>
                Data inserimento articolo: {{date('d-m-Y', strtotime($details->created_at))}}
            </p>
            @if ($details->created_at != $details->updated_at )
                <p>
                    Data ultima modifica articolo: {{date('d-m-Y', strtotime($details->created_at))}}
                </p>

            @endif

        </div>
    </div>
@endsection
