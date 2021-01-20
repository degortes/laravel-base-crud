@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
            <h1 class="display-4">Boolando!</h1>
            <p class="lead ">benvenuto nell'ecommerce più vasto del mondo! Potrai scegliere tra ben 4 articoli</p>
            <div class="imgbkg"></div>
            <hr class="my-4">
            <p>Sappiamo che questa pagina è bellissima e potresti restare a fissarla per ore, ma se vuoi clicca sotto per vedere il vasto assortimento presente nei nostri magazzini di tutto il mondo</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{route('products.index')}}" role="button">Garda tutti i prodotti!</a>
            </p>
        </div>
@endsection
