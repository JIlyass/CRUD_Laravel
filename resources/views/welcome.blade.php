@extends('layouts.master')
@section('title','welcome')
@section('main')
    <div class="welcome">
       
        <h3>Welcome </h3>
         @auth
            <span>Bienvenue Monsieur : <b>  {{Auth::user()->name}}  </b> </span>
            @else
        @endauth
        <p>Cette dashboard permet de gerer les profuits et les categories</p>
    </div>
@endsection