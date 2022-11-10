
@include('layouts.head')

<div style="margin-bottom: 19px; padding-left: 662px; padding-top: 15px;">
<a  href="{{route('promotion.index')}}"  class="btn btn-info" >Promotion</a>
<a  href="{{route('brief.index')}}"  class="btn btn-light" >Brief</a>
</div>





<a  href="{{route('promotion.create')}}" style="margin-bottom: 12px" class="btn btn-primary" >Add promotion</a>


<table class="table">
    <thead class="thead-dark" style="background-color:black ;color:azure">
      <tr>

            <th scope="col">id</th>
            <th scope="col">Nom de promotion</th>
            <th scope="col">Action</th>
            <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($promotion as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->nom}}</td>
          <td>
              <form action="{{route('promotion.destroy',$value->id)}}" method="POST">
               @csrf
               @method('DELETE')
                <a href="{{route('promotion.edit',$value->id)}}" class="btn btn-warning">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
                
              </form>
           </td>
      </tr>
      @endforeach

    </tbody>

  </table>
