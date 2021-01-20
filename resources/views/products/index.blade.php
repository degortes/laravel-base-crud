@extends('layouts.app')

@section('content')
    <section>
        <h2>index</h2>
        <h1>Prodotti</h1>
        <div class="card-wrapper">
            @foreach ($products as $prodotto)
                <a href="{{route('products.show' , ['product' => $prodotto->id ] )}}">
                    <div class="card">
                        <h1> {{$prodotto->name}} </h1>
                        <p> {{$prodotto->color}} </p>
                    </div>
                </a>
            @endforeach

        </div>
    </section>
@endsection
