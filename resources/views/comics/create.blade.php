@extends('layout.main')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-8 offset-2">

                <section class = "d-flex justify-content-between align-items-center">
                    <h2 class="mb-3 d-inline">Add a new comic</h2>
                    <a class="btn btn-primary" href="{{ route('comics.index') }}">BACK</a>
                </section>

                <form action="{{ route('comics.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic Title</label>
                        <input type="text" 
                                id="title" 
                                name="title" 
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Comic Title"
                                value="{{old('title')}}">
                        @error('title')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Comic Type</label>
                        <input type="text"
                                id="type" 
                                name="type" 
                                class="form-control @error('type') is-invalid @enderror"
                                placeholder="Comic Type"
                                value="{{old('type')}}" >
                        @error('type')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">URL Image</label>
                        <input type="text" 
                                id="image" 
                                name="image" 
                                class="form-control @error('image') is-invalid @enderror"
                                placeholder="URL Image"
                                value="{{old('image')}}" >
                        @error('image')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">SAVE</button>
                </form>
            </div>
        </div>

    </div>
@endsection