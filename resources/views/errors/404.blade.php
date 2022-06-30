@extends('layout.main')

@section('content')
  <div class="container my-4">
    <h1>Error 404</h1>
    <h2>{{ $exception->getMessage() }}</h2>
    <p class="my-5">Oops, sorry we can't find that page! <br> Either something went wrong or the page doesn't exist anymore.</p>
    <h5>Select "Comics" from the menu to continue </h5>
    
  </div>
@endsection