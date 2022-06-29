@extends('layout.main')

@section('content')
  <div class="container my-4">
    <h1>Comic Details </h1>

    <div class="row">

      <div class="col-6">
          <h3>{{ $comic->title }}</h3>
          <span>{{ $comic->type }}</span>
      </div>

      <div class="col-6">
        <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
      </div>

    </div>
    
  </div>

@endsection