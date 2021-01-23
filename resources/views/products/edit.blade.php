@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('products.update' , ['product' => $details->id])}}">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-12">
                <label>Nome</label>
                <input value="{{$details->name}}" type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group col-12">
                <label >Colore</label>
                <input value="{{$details->color}}" name="color" type="text" class="form-control" required >
            </div>
        </div>
        <div class="form-group">
            <label>Prezzo</label>
            <input value="{{$details->price}}" name="price" type="number" class="form-control" required>
        </div>
        <div class="form-row">
            <div class="form-group col-12">
                <label>Brand</label>
                <input value="{{$details->brand}}" name="brand"type="text" class="form-control" required>
            </div>
            <div class="form-group col-12">
                <label>Taglia</label>
                <select name="size" class="form-control" required>
                    <option value="M"{{$details->size == 'M' ? 'selected=selected' : ""}}>M</option>
                    <option value="XXS"{{$details->size == 'XXS' ? 'selected=selected' : ""}}>XXS</option>
                    <option value="XS"{{$details->size == 'XS' ? 'selected=selected' : ""}}>XS</option>
                    <option value="S"{{$details->size == 'S' ? 'selected=selected' : ""}}>S</option>
                    <option value="L"{{$details->size == 'L' ? 'selected=selected' : ""}}>L</option>
                    <option value="XL"{{$details->size == 'XL' ? 'selected=selected' : ""}}>XL</option>
                    <option value="XXL"{{$details->size == 'XXL' ? 'selected=selected' : ""}}>XXL</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>


@endsection
