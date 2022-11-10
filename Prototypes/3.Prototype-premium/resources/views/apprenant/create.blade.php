@include('layouts.head')


<form  action="{{route('apprenant.store')}}" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom :<input type="text" class="form-control"  name="nom" >
      </div>
      <div class="form-group col-md-2">
        Prenom:<input type="text" class="form-control"  name="prenom" >
      </div>
      <div class="form-group col-md-2">
        Prenom:<input type="text" class="form-control"  name="email" >
      </div>
      <input type="hidden" value="{{$id}}" name="promotion_id">

    </div>

    <button type="submit" class="btn btn-primary" style="margin-top :20px">Add</button>
  </form>
  
