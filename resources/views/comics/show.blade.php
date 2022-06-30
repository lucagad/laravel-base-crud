@extends('layout.main')

@section('content')
  <div class="container my-4">
    <div class="row">
      <div class="col-8 offset-2">

        <section class = "d-flex justify-content-between align-items-center">
          <h2 class="mb-3 d-inline">Comic Details</h2>
          <a class="btn btn-primary" href="{{ route('comics.index') }}">BACK</a>
        </section>

        <div class="row my-4 border border-dark rounded p-2">

          <div class="col-4 col-lg-2 d-flex justify-content-start align-items-center">
            <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
          </div>

          <div class="col-8 col-lg-10 d-flex flex-column justify-content-center align-items-start">
              <h3>{{ $comic->title }}</h3>
              <span class="bg-warning my-2 p-1 rounded">{{ $comic->type }}</span>
          </div>

        </div>
      </div>
    </div>

  </div>

@endsection