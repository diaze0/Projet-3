@include('layouts.head')

<form  action="{{route('promotion.update',$promotion->id)}}" method="POST"  >
    @csrf
    @method("PUT")
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du brief :<input type="text" class="form-control"  value="{{$promotion->nom}}" name="nom" >
      </div>
    </div>

    <button type="submit" class="btn btn-warning" style="margin-top :20px">Editer</button>
  </form>




  <form action="{{route('apprenant.create')}}"  method="get" >

    <button type="submit" class="btn btn-primary">Add apprenant</button>
    <input type="hidden" value="{{$promotion->id}}" name="promotion_id">
    </form>

  <table class="table">
    <thead class="thead-dark" style="background-color:black ;color:azure">
      <tr>

            <th scope="col">id</th>
            <th scope="col">Nom </th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($apprenant as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->Nom}}</td>
        <td>{{$value->Prenom}}</td>
        <td>{{$value->Email}}</td>
          <td>
              <form action="{{route('apprenant.destroy',$value->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <a href="{{route('apprenant.edit',$value->id)}}" class="btn btn-warning">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>

              </form>
           </td>
      </tr>
      @endforeach

    </tbody>

  </table>

  <a href="{{route('promotion.index')}}">retourn</a>
  