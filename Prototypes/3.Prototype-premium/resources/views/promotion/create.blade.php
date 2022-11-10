@include('layouts.head')


<form  action="{{route('promotion.store')}}" method="POST" >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du promotion :<input type="text" class="form-control"name="nom" >
      </div>
      
    </div>

    <button type="submit" class="btn btn-primary" style="margin-top :20px">Ajouter</button>
  </form>
  <a href="{{route('promotion.index')}}">retourn</a>
