@extends('layouts.master')
@section('title','Details')
@section('main')
<h3>
    {{$produit_details->nomPr}}
</h3>
        <table class="table table-strriped">
            <tr>
                <th>Nom : </th>
                <th>{{$produit_details->nomPr}} </th>
            </tr>
            <tr>
                <th>Prix unitaire : </th>
                <th>{{$produit_details->pu}} </th>
            </tr>
            <tr>
                <th>prix vente : </th>
                <th>{{$produit_details->pa}} </th>
            </tr>
            <tr>
                <th>Categorie : </th>
                <th>. </th>
            </tr>
            <tr colspan=2>
                <td>
                    @if ($toDelete=="yes" )
                        <form action="{{route('Produit.supprimer',['Produit'=>$produit_details->codePr])}}" method="post">

                            @csrf
                            @method('delete')
                            <input type="hidden" name="codePrd" value="{{$produit_details->codePr}}">
                            <input type="submit" value="supprimer" class="btn btn-danger">
                        </form>
                    @endif
                </td>
            </tr>
        </table>
    
@endsection