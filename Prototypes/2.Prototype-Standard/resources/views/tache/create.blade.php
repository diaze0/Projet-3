@include('layouts.head')

<form   action="{{route('tache.store')}}" method="POST" >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du tache :<input type="text" class="form-control"name="nom" >
      </div>
      <div class="form-group col-md-2">
        Début de la tache:<input type="datetime-local" class="form-control"  name="debut_tache" >
      </div>
      <div class="form-group col-md-2">
        Fin de la tache:<input type="datetime-local" class="form-control" name="fin_tache" >
      </div>
      <input type="hidden" value="{{$id}}" name="brief_id">

    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
