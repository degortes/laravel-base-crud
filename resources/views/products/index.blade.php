@extends('layouts.app')

@section('content')
    <section>
        <h1>Prodotti</h1>
        <div class="card-wrapper flexevl">
            @foreach ($products as $prodotto)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.shareicon.net%2Fdata%2F2016%2F10%2F20%2F846458_blue_512x512.png&f=1&nofb=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$prodotto->name}}</h5>
                        <p class="card-text">{{$prodotto->color}}</p>
                        <a href="{{route('products.show' , ['product' => $prodotto->id ] )}}" class="btn btn-primary">Vedi Dettagli</a>
                    </div>
                </div>

            @endforeach
        </div>
@endsection
