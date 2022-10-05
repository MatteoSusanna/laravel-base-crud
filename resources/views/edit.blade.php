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

        {{-- Primo input--}}
        <div class="mb-3">
            <label for="title" class="form-label text-white fs-4">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title',$comic->title)}}">

            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Secondo input--}}
        <div class="mb-3">
            <label for="thumb" class="form-label text-white fs-4">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb',$comic->thumb)}}">

            @error('thumb')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Terzo input--}}
        <div class="mb-3">
            <label for="price" class="form-label text-white fs-4">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price',$comic->price)}} $">

            @error('price')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Quarto input--}}
        <div class="mb-3">
            <label for="series" class="form-label text-white fs-4">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series',$comic->series)}}">

            @error('series')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Quinto input--}}
        <div class="mb-3">
            <label for="sale_date" class="form-label text-white fs-4">Sale_date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">

            @error('sale_date')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Sesto input--}}
        <div class="mb-3">
            <label for="type" class="form-label text-white fs-4">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type', $comic->type)}}">

            @error('type')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- Settimo input--}}
        <div class="mb-3">
            <label for="description" class="form-label text-white fs-4">Description</label>
            <textarea name="description" id="type" cols="30" rows="6" class="form-control @error('description') is-invalid @enderror">{{old('description',$comic->description)}}</textarea>

            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
  
    
        <button type="submit" class="btn btn-dark text-white">Applica</button>
        <a class="btn btn-success" href="{{route('comics.index')}}">Indietro</a>
  </form>
</div>

@endsection
