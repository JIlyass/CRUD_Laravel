@extends('layouts.master')
@section('title','index')
    
@section('main')
<style>
 .Allbutton{
    display: flex;
    flex-direction: column;
 }
 
</style>
    <div class="container mt3">
        <h3>Produits</h3>
        <a href="{{route('Produit.ajouter')}}"> <button class="btn btn-warning">Ajouter Nouveau Produit</button></a> <br> <br>
        <br>
        <form action="{{route('Produit.index')}}" method="post" name="f1">
            @csrf
            @section('search-form')
            <div class="form-inline my-2 my-lg-0" action="{{route('Produit.index')}}" method="post">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search" />
              </div>
            @endsection
            <select onchange="f1.submit()" name="categorie" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            {{-- <select name="categorie" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> --}}
            <option value="-1">Tous les catégories</option>
            @foreach ($dbCategories as $item)
                <option {{$categorie==$item->id?"selected":""}} value="{{$item->id}}">{{$item->nomCat}}</option>
                {{-- <option value="{{$item->id}}">{{$item->nomCat}}</option> --}}
            @endforeach
        </select>
        </form>
       
        <div class="d-flex">
        @foreach ($dbProduits as $item)
            <div class="card" style="width: 18rem;">
                    <img src="/Exemple_image.jpeg" class="card-img-top" alt="produit image">
                <div class="card-body">
                    <h3 class="card-title">{{$item->nomPr}}</h3>
                    <p class="card-text">
                        prix unitaire :  <b> {{$item->pu}} </b> DHs <br>
                        prix unitaire :  <b> {{$item->pa}} </b> Dhs <br>
                        <div class="Allbutton" >

                        </div>
                     
                       <div class="Allbutton">
                            <a href="{{route('Produit.details',['idPr'=>$item->codePr])}}"> <button class="btn btn-primary">Details</button> </a>
                            <a href="{{route('Produit.modifier',['idPr'=>$item->codePr])}} "> <button class="btn btn-success">modifier</button> </a>
                            <a href="{{route('Produit.details',['idPr'=>$item->codePr,'toDelete'=>'yes'])}}"> <button class="btn btn-danger">supprimer</button> </a>
                        </div>    
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection