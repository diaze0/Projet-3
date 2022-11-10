@include('layouts.head')
<h1 style="color: brown">Deja assigner</h1>

 @foreach ($apprenantAssinger as $valuee)

 <table class="table">
    <tbody>
    <tr>
        <td>
            <h4>{{$valuee->Nom}} {{$valuee->Prenom}}</h4>
        </td>
        <td>
            <form action="{{route('assigner.destroy',$valuee->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <input type="hidden" value="{{$valuee->id}}" name="apprenant_id">
               <input type="hidden" value="{{$id}}" name="brief_id">

                <button class="btn btn-danger btn-lg">-</button>
        </form>
        </td>
    </tr>
    </table>






 @endforeach

 <h1 style="color: rgb(53, 45, 45)"> Assigner les apprenant</h1>
  @foreach ($apprenant as $value)

  <table class="table">
<tbody>
<tr>
    <td>
        <h4>{{$value->Nom}} {{$value->Prenom}}</h4>
    </td>
    <td>

    <form action="{{route('assigner.store')}}" method="POST">
        @csrf
       <input type="hidden" value="{{$value->id}}" name="apprenant_id">
       <input type="hidden" value="{{$id}}" name="brief_id">

       <button class="btn btn-primary btn-lg">+</button>
</form>
    </td>
</tr>
</table>



 @endforeach




