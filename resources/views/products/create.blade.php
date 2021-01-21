@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('products.store')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-12">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group col-12">
                <label >Colore</label>
                <input name="color" type="text" class="form-control" required >
            </div>
        </div>
        <div class="form-group">
            <label>Prezzo</label>
            <input name="price" type="number" class="form-control" required>
        </div>
        <div class="form-row">
            <div class="form-group col-12">
                <label>Brand</label>
                <input name="brand"type="text" class="form-control" required>
            </div>
            <div class="form-group col-12">
                <label>Taglia</label>
                <select name="size" class="form-control" required>
                    <option value="M">M</option>
                    <option value="XXS">XXS</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>


@endsection
