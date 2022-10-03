@extends('layout.app')

@section('titolo', 'dettaglio fumetto')

@section('content')
    <div class="container">
        <h1>Dettaglio fumetti: {{$comic->title}}</h1>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div><strong>description:</strong>{{$comic->description}}</div>
        <div><strong>price:</strong>{{$comic->price}}</div>
        <div><strong>series:</strong>{{$comic->series}}</div>
        <div><strong>sale_date:</strong>{{$comic->sale_date}}</div>
        <div><strong>type:</strong>{{$comic->type}}</div>
    </div>

@endsection