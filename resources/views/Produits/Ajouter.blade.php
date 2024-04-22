@extends('layouts.master')
@section('title','Ajouter')
@section('main')

  <form method="post" action="{{route('Produit.add')}}"  >


  @csrf
  <input type="hidden" name="codePr" value={{$codePr}}>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nom du produit</label>
      <input  name="nomPr" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">N'entrez pas un nom déjà existe!.</div>
    </div>
     <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Prix de vente</label>
      <input name="pu" type="number" class="form-control" id="exampleInputPassword1">
      <div id="emailHelp" class="form-text">prix de vente doit etre supperieur au prix d'achat !</div>

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Prix d'achat</label>
      <input  type="number"  name="pa" class="form-control" id="exampleInputPassword1">
    </div>
   
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Categorie</label>
      <select name="categories_id" >
        @foreach ($dbCat as $item)
            <option  value="{{$item->id}}" >{{$item->nomCat}}</option>
        @endforeach
      </select>

    </div>
    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary" >Submit</button>
  </form>
      
@endsection 