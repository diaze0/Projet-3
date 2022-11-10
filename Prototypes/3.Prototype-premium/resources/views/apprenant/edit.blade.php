@include('layouts.head')


<form  action="{{route('apprenant.update',$apprenant->id)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-row">
      <div class="form-group col-md-2">
        Nom :<input type="text" class="form-control" value="{{$apprenant->Nom}}" name="nom" >
      </div>
      <div class="form-group col-md-2">
        Prenom:<input type="text" class="form-control" value="{{$apprenant->Prenom}}" name="prenom" >
      </div>
      <div class="form-group col-md-2">
        Prenom:<input type="text" class="form-control" value="{{$apprenant->Email}}" name="email" >
      </div>
      <input type="hidden" value="{{$apprenant->promotion_id}}" name="promotion_id">

    </div>

    <button type="submit" class="btn btn-warning" style="margin-top :20px">Editer</button>
  </form>
  
