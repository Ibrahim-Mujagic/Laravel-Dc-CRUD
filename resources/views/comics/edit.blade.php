@extends('layouts.main')

@section('content')
<div class="container">
  <div class="d-flex gap-1">
    <a class="btn btn-primary mb-2" href="{{route('comics.index')}}">Home</a>
    @include('partials.form-delete',[$comic])
  </div>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
  @endif
  <form action="{{route('comics.update',$comic)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control  @error('title') is-invalid @enderror  " id="title" name="title" value="{{$comic->title}}" placeholder="Title">
      @error('title') <p class="text-danger">{{$message}}</p> @enderror
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Thumb</label>
      <input type="text" class="form-control  @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{$comic->thumb}}" placeholder="Thumb">
      @error('thumb') <p class="text-danger">{{$message}}</p> @enderror

    </div>    
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control  @error('type')  is-invalid @enderror" id="type" name="type" value="{{$comic->type}}" placeholder="type">
      @error('type') <p class="text-danger">{{$message}}</p> @enderror

    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" value="{{$comic->price}}" placeholder="Price">
      @error('price') <p class="text-danger">{{$message}}</p> @enderror

    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control  @error('series') is-invalid @enderror" id="series" name="series" value="{{$comic->series}}" placeholder="Series">
      @error('series') <p class="text-danger">{{$message}}</p> @enderror

    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="text" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"  placeholder="Sale date">
      @error('sale_date') <p class="text-danger">{{$message}}</p> @enderror
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Description</label>
      <textarea class="form-control  id="desc" name="desc"  rows="3">{{$comic->desc}}"</textarea>
    </div>
    <button class="btn btn-warning" type="submit">
      <i class="fa-solid fa-check"></i>
    </button>
  </form>
</div>
@endsection