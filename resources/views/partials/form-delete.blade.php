<form class="d-inline" onsubmit="return confirm('Sei sicuro di voler eliminare: {{$comic->title}} ')" action="{{route('comics.destroy',$comic)}}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</form>