@extends('layout.app')

@section('titole', 'Crea nuovo fumetto')


@section('content')
<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        
        @csrf
        {{-- Primo input--}}
        <div class="mb-3">
            <label for="title" class="form-label text-white fs-4">Title</label>
            <input type="text" class="form-control @error('title')is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{old('title')}}">
            
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Secondo input--}}
        <div class="mb-3">
            <label for="thumb" class="form-label text-white fs-4">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Thumb" value="{{old('thumb')}}">

            @error('thumb')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Terzo input--}}
        <div class="mb-3">
            <label for="price" class="form-label text-white fs-4">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Price" value="{{old('price')}}">

            @error('price')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Quarto input--}}
        <div class="mb-3">
            <label for="series" class="form-label text-white fs-4">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Series" value="{{old('series')}}">
            
            @error('series')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Quinto input--}}
        <div class="mb-3">
            <label for="sale_date" class="form-label text-white fs-4">Sale_date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Sale_date" value="{{old('sale_date')}}">
            
            @error('sale_date')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Sesto input--}}
        <div class="mb-3">
            <label for="type" class="form-label text-white fs-4">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Type" value="{{old('type')}}">
            
            @error('type')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Settimo input--}}
        <div class="mb-3">
            <label for="description" class="form-label text-white fs-4">Description</label>
            <textarea name="description" id="type" cols="30" rows="6" class="form-control @error('description') is-invalid @enderror" placeholder="Description" value="{{old('description')}}"></textarea>
            
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
  
    
        <button type="submit" class="btn btn-dark">Salva</button>
        <a class="btn btn-success" href="{{route('comics.index')}}">Indietro</a>
  </form>
</div>

@endsection