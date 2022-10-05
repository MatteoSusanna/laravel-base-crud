@extends('layout.app')

@section('titole', 'Crea nuovo fumetto')


@section('content')
<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        
        @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label text-white fs-4">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label text-white fs-4">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Thumb">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label text-white fs-4">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label text-white fs-4">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label text-white fs-4">Sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label text-white fs-4">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Type">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label text-white fs-4">Description</label>
            <textarea name="description" id="type" cols="30" rows="6" class="form-control" placeholder="Description"></textarea>
        </div>
  
    
        <button type="submit" class="btn btn-dark">Salva</button>
        <a class="btn btn-success" href="{{route('comics.index')}}">Indietro</a>
  </form>
</div>

@endsection