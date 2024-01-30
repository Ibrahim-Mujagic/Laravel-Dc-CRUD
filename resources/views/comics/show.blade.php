@extends('layouts.main')

@section('content')
<div class="container">
  <a class="btn btn-primary" href="{{route('comics.index')}}">Home</a>
  <a class="btn btn-warning" href="{{route('comics.edit',$comic)}}"><i class="fa-solid fa-pencil"></i></a>
  <div class="card mb-3 shadow w-50 m-auto ">
    <img src="{{$comic->thumb}}" class="card-img-top custom-hight " alt="{{$comic->title}}">
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <p class="card-text">{{$comic->desc}}</p>
      <p class="card-text"><small class="text-body-secondary">{{$comic->type}}</small></p>
      <p class="card-text">{{$comic->price}}$</p>
      <p class="card-text">{{$comic->sale_date}}</p>
    </div>
  </div>
</div>
@endsection