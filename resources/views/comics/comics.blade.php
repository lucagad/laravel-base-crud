@extends('layout.main')

@section('content')
  <div class="container my-4">
    <h1>Comics List </h1>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Type</th>
          <th scope="col">More</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic )

        <tr>
          <th scope="row">{{ $comic }}</th>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->type }}</td>
          <td>
            <a class="btn btn-success" href="">SHOW</a>
            <a class="btn btn-dark" href="">EDIT</a>
          </td>
        </tr>
          
        @endforeach
        
      </tbody>
    </table>

  </div>

@endsection