@extends('layout.app')

@section('titolo', 'homepage')

@section('content')
<div class="container">
    <div class="text-center">
        <a href="{{route('comics.create')}}" class="btn my-3 btn-success fs-3">Crea fumetto</a>
    </div>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Series</th>
              <th scope="col">Type</th>
              <th scope="col">Price</th>
              <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->price}} $</td>

                        <td class="d-flex justify-content-between p-3">
                            <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}">Vedi</a>
                            <a class="btn btn-warning" href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica</a>

                            <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST" onsubmit="return confirm('Vuoi eliminare?');">
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