@extends('layouts.app')

@section('content')
    <div class="card text-center ">
        <div class="card-header">
            {{$details->brand}} offre numerosi vantaggi!
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$details->name}}</h5>
            <p class="card-text"> Approfitta dello sconto! può essere tuo a soli: : {{$details->price}}!</p>
            <p class="card-text"> Attualmente a disposizione la taglia: {{$details->size}}</p>
            <p class="card-text">Sai che il {{$details->color}} ti sta particolarmente bene?</p>
            <a href="#" class="btn btn-primary">Acquista ora!</a>
        </div>
        <div class="card-footer text-muted">
            Non lasciatelo scappare, scade tra poco
        </div>
    </div>
@endsection
