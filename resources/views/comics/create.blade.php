@extends('layouts.main')

@section('content')
<div class="container">
  <a class="btn btn-primary mb-2" href="{{route('comics.index')}}">Home</a>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
  @endif
  <form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" placeholder="Title">
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">Thumb</label>
      <input type="text" class="form-control  @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}" placeholder="Thumb">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control  @error('type') is-invalid @enderror " id="type" name="type" value="{{old('type')}}" placeholder="Type">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}" placeholder="Price">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control  @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}" placeholder="Series">
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="text" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}"  placeholder="Sale date">
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Description</label>
      <textarea class="form-control" id="desc" name="desc"  rows="3">{{old('desc')}}</textarea>
    </div>
    <button class="btn btn-warning" type="submit">
      <i class="fa-solid fa-check"></i>
    </button>
  </form>
</div>
@endsection