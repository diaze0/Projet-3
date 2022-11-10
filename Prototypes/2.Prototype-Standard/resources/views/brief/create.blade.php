@include('layouts.head')


<form  action="{{route('brief.store')}}"method="POST" >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du brief :<input type="text" class="form-control"name="nom" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de livraison :<input type="datetime-local" class="form-control"  name="livraison" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de récupération :<input type="datetime-local" class="form-control" name="recuperation" >
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
  <a href="{{route('brief.index')}}">retourn</a>
