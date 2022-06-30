@extends('layout.main')

@section('content')
  <div class="container my-4">
    <h1>Comic Details </h1>

    <div class="row my-4 border border-dark">

      <div class="col-4 col-lg-2 d-flex justify-content-start align-items-center">
        <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
      </div>

      <div class="col-8 col-lg-10 d-flex flex-column justify-content-center align-items-start">
          <h3>{{ $comic->title }}</h3>
          <span class="bg-warning my-2 p-1 rounded">{{ $comic->type }}</span>
      </div>

    </div>

    <a class="btn btn-primary" href="{{ route('comics.index') }}">BACK</a>
    
  </div>

@endsection