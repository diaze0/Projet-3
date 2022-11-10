@include('layouts.head')


<form  action="{{route('tache.store')}}" method="POST" >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du brief :<input type="text" class="form-control"name="nom" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de livraison :<input type="datetime-local" class="form-control"  name="debut_tache" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de récupération :<input type="datetime-local" class="form-control" name="fin_tache" >
      </div>
      <input type="hidden" value="{{$id}}" name="brief_id">
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
  