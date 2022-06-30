@extends('layout.main')

@section('content')
  <div class="container my-4">

    <section class="d-flex justify-content-between align-items-center">
      <h1 class="d-inline">Comics List </h1>
      <a class="btn btn-success" href="{{ route('comics.create') }}">ADD</a>
    </section>

    @if(session('comic_deleted'))
      <div class=" my-2 alert alert-success" role="alert">
        {{ session('comic_deleted') }}
      </div>
    @endif
    
    <table class="table my-5">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Thumbnail</th>
          <th scope="col">Title</th>
          <th scope="col">Type</th>
          <th scope="col">More</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic )

        <tr>
          <td>{{ $comic->id }}</td>
          <td> <img class="w-25" src="{{$comic->image}}" alt="{{$comic->title}}"></td>
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