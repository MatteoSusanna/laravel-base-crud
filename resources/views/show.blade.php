@extends('layout.app')

@section('titolo', 'dettaglio fumetto')

@section('content')
    <div class="container">
        <h1>Dettaglio fumetti: {{$comic->title}}</h1>
        <img class="mb-2" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class="mb-2"><strong>Description:</strong>{{$comic->description}}</div>
        <div class="mb-2"><strong>Price:</strong>{{$comic->price}}</div>
        <div class="mb-2"><strong>Series:</strong>{{$comic->series}}</div>
        <div class="mb-2"><strong>Sale_date:</strong>{{$comic->sale_date}}</div>
        <div><strong>Type:</strong>{{$comic->type}}</div>
    </div>
@endsection