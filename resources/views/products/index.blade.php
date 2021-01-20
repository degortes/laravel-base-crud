@extends('layouts.app')

@section('content')
    <header>
        <h2>index</h2>
        <h1>Prodotti</h1>
    </header>
    <section>
        <div class="card-wrapper">
            @foreach ($products as $prodotto)
                <h1> {{$prodotto->name}} </h1>
                <p> {{$prodotto->color}} </p>
                <p> {{$prodotto->size}} </p>
                <p> {{$prodotto->price}} </p>
                <p> {{$prodotto->brand}} </p>
            @endforeach

        </div>
    </section>
@endsection
