@extends('layouts.app')

@section('content')
    <p>{{$details->name}}</p>
    <p>{{$details->size}}</p>
    <p> {{$details->color}} </p>
    <p> {{$details->price}} </p>
    <p> {{$details->brand}} </p>
@endsection
