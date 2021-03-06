@extends('layouts.app')

@section('content')
    <section>
        <h1>Prodotti</h1>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">colore</th>
                    <th scope="col">taglia</th>
                    <th scope="col">prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $prodotto)
                <tr>
                    <th scope="row">{{$prodotto->name}}</th>
                    <td>{{$prodotto->color}}</td>
                    <td>{{$prodotto->size}}</td>
                    <td>{{$prodotto->price}}</td>
                    <td><a href="{{route('products.show' , ['product' => $prodotto->id ] )}}" class="btn btn-primary">Vedi Dettagli</a></td>
                    <td><a href="{{route('products.edit' , ['product' => $prodotto->id ] )}}" class="btn btn-warning">Modifica</a></td>
                    <td>
                        <form action="{{route('products.destroy' , ['product' => $prodotto->id ] )}}" method="post">
                            <button type="submit" name="button" class="btn btn-danger">Elimina</button>
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="text-center">
            <a href="{{route('products.create')}}" class="btn btn-primary">Aggiungi prodotto</a>
        </div>
@endsection
