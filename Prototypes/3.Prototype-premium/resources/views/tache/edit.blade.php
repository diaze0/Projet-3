@include('layouts.head')


<form  action="{{route('tache.update',$tache->id)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du tache :<input type="text" class="form-control" value="{{$tache->Nom_de_la_tache}}" name="nom" >
      </div>
      <div class="form-group col-md-2">
        Début de la tache:<input type="datetime-local" class="form-control" value="{{$tache->Debut_de_la_tache}}" name="debut_tache" >
      </div>
      <div class="form-group col-md-2">
        Fin de la tache:<input type="datetime-local" class="form-control" value="{{$tache->Fin_de_la_tache}}" name="fin_tache" >
      </div>
      <input type="hidden" value="{{$tache->brief_id}}" name="brief_id">

    </div>

    <button type="submit" class="btn btn-warning">Editer</button>
  </form>
  
