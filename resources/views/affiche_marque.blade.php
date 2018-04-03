<a href="{{route('marque') }}">ajout</a>

<table>
<tr>
<td>nom</td>
<td>reference</td>
<td>id_model</td>
<td>action</td>
</tr>
@foreach ($marques as $marque )
<tr>
<td>{{ $marque->nom}}</td>
<td>{{ $marque->refrerence}}</td>
<td>{{ $marque->id_model}}</td>
<td>
<a href="{{route('supp_marque',['id' => $marque->id]) }}">supprimer</a>
<a href="{{route('edit_marque',['id' => $marque->id]) }}">modifier</a>
</td>
</tr>
@endforeach

</table>