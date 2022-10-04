@extends('layout.app')

@section('titole', 'Crea nuovo fumetto')

@section('content')
<div class="container mt-2">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</div>
<div class="container">
    <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
        
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label text-white fs-4">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label text-white fs-4">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label text-white fs-4">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}} $">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label text-white fs-4">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label text-white fs-4">Sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label text-white fs-4">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label text-white fs-4">Description</label>
            <textarea name="description" id="type" cols="30" rows="6" class="form-control">{{$comic->description}}</textarea>
        </div>
  
    
        <button type="submit" class="btn btn-dark text-white">Applica</button>
        <a class="btn btn-success" href="{{route('comics.index')}}">Salva</a>
  </form>
</div>

@endsection
