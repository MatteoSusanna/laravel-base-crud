@extends('layout.app')

@section('titolo', 'homepage')

@section('content')

    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">title</th>
              <th scope="col">thumb</th>
              <th scope="col">price</th>
              <th scope="col">series</th>
              <th scope="col">sale_date</th>
              <th scope="col">type</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            
        </tbody>
    </table>

@endsection