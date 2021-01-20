@extends('layouts.app')

@section('content')
        <h1>Siamo spiacenti, il prodotto da te selezionato non è più disponibile</h1>
        <div class="text-center">
            <a href="{{route('home')}}" class="btn btn-primary">Torna alla Home</a>
            
        </div>

@endsection
