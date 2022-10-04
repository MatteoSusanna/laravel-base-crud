@extends('layout.app')

@section('titolo', 'homepage')

@section('content')
<div class="container">

    <a href="{{route('comics.create')}}" class="btn btn-primary">Crea nuovo fumetto</a>

    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">title</th>
              <th scope="col">price</th>
              <th scope="col">series</th>
              <th scope="col">type</th>
              <th scope="col">azioni</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}">Vedi</a>
                        <a class="btn btn-warning" href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica</a>

                        <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection