@extends('layout.main')

@section('content')
  <div class="container my-4">

    <section class="d-flex justify-content-between align-items-center">
      <h1 class="d-inline">Comics List </h1>
      <a class="btn btn-success" href="{{ route('comics.create') }}">ADD</a>
    </section>
    
    <table class="table my-5">
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
          <th scope="row">{{ $comic->id }}</th>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->type }}</td>
          <td>
            <a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">SHOW</a>
            <a class="btn btn-secondary" href="{{ route('comics.edit', $comic) }}">EDIT</a>

            <form class = "d-inline"
                  onsubmit = "return confirm('Do you confirm the deletion of the ## {{ $comic->title }} ## comic?')"
                  action = "{{ route('comics.destroy', $comic) }}" method="POST">
              @csrf
              @method ('DELETE')

              <button class="btn btn-danger">DELETE</button>
            </form>

          </td>
        </tr>
          
        @endforeach
        
      </tbody>
    </table>

  </div>

@endsection