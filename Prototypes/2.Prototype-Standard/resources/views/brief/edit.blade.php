@include('layouts.head')

<form  action="{{route('brief.update',$brief->id)}}" method="POST"  >
    @csrf
    @method("PUT")
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du brief :<input type="text" class="form-control"  value="{{$brief->Nom_du_brief}}" name="nom" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de livraison :<input type="datetime-local" class="form-control" value="{{$brief->Date_heure_de_livraison}}" name="livraison" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de récupération :<input type="datetime-local" class="form-control" value="{{$brief->Date_heure_de_récupération}}" name="recuperation" >
      </div>
    </div>

    <button type="submit" class="btn btn-warning">Editer</button>
  </form>


<form action="{{route('tache.create')}}" method="get" >

<button type="submit" class="btn btn-primary">Add tache</button>
<input type="hidden" value="{{$brief->id}}" name="brief_id">
</form>

<table class="table">
    <thead class="thead-dark" style="background-color:black ;color:azure">
      <tr>

            <th scope="col">id</th>
            <th scope="col">Nom de tache</th>
            <th scope="col">Debut du tache</th>
            <th scope="col">Fin du tache</th>
            <th scope="col">Action</th>
            <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tache as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->Nom_de_la_tache}}</td>
        <td>{{$value->Debut_de_la_tache}}</td>
        <td>{{$value->Fin_de_la_tache}}</td>
        <td>
            <form action="{{route('tache.edit',$value->id)}}">
                <button type="submit" class="btn btn-success">Edit</button>

            </form>
            </td>
            <td>
            <form action="{{route('tache.destroy',$value->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
           </td>
      </tr>
      @endforeach

    </tbody>

  </table>

<form action="{{route('brief.index')}}">
  <button type="submit" class="btn btn-dark">Retourn</button>
</form>
