
@include('layouts.head')


<a  href="{{route('brief.create')}}" style="margin-bottom: 12px" class="btn btn-primary" >Add brief</a>

<table class="table">
    <thead class="thead-dark" style="background-color:black ;color:azure">
      <tr>

            <th scope="col">id</th>
            <th scope="col">Nom de brief</th>
            <th scope="col">Date heure de livraison</th>
            <th scope="col">Date heure derécupération</th>
            <th scope="col">Action</th>
            <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($brief as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->Nom_du_brief}}</td>
        <td>{{$value->Date_heure_de_livraison}}</td>
        <td>{{$value->Date_heure_de_récupération}}</td>
        <td>
            <form action="{{route('brief.edit',$value->id)}}">
                <button type="submit" class="btn btn-warning">Edit</button>

            </form>
            </td>
            <td>
            <form action="{{route('brief.destroy',$value->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
           </td>
      </tr>
      @endforeach

    </tbody>

  </table>
