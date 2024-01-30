@extends('layouts.main')

@section('content')
<div class="container">
  <div>
    <a class="btn btn-primary mb-4" href="{{route('comics.create')}}"><i class="fa-solid fa-plus"></i></a>
    {{$comics->links()}}
  </div>
  <table class="table table-striped shadow">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Type</th>
        <th class="text-center">Control</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($comics as $comic)
          <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->type}}</td>
            <td class="text-center">
              <a class="btn btn-primary" href="{{route('comics.show',$comic)}}"><i class="fa-solid fa-eye"></i></a>
              <a class="btn btn-warning" href="{{route('comics.edit',$comic)}}"><i class="fa-solid fa-pencil"></i></a>
              @include('partials.form-delete',[$comic])
            </td>
          </tr>
      @empty
          <h2>No data</h2>
      @endforelse
    </tbody>
  </table>
</div>
@endsection