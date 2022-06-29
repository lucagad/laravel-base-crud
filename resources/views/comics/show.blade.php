@extends('layout.main')

@section('content')
  <div class="container my-4">
    <h1>Comic Details </h1>

    <div class="row my-4">

      <div class="col-6 d-flex flex-column justify-content-center align-items-center">
          <h3>{{ $comic->title }}</h3>
          <span class="bg-warning my-2 p-1 rounded">{{ $comic->type }}</span>
      </div>

      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
      </div>

    </div>

    <a class="btn btn-success" href="{{ route('comics.index') }}">BACK</a>
    
  </div>

@endsection