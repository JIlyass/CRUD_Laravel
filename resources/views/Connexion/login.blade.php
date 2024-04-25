@extends('layouts.master')
@section('title','login')
@section('main')
<br><br>
<form action="{{route('login')}}" method="POST">
    @csrf
    <legend>Connexion</legend>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input name="email" value="{{old('email')}}" name="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">On va jamais partager ni votre email ni vos données.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
     <br> @error('email')
            <span class="alert alert-danger">
             {{$message}}
                
            </span> <br>
        @enderror
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
{{--   
<fieldset>
    <legend>Connexion</legend>
    <form action="{{route('login')}}" method="POST" class="form">
        @csrf
        <label for="email">email</label>
        <input type="text" name="email" value="{{old('email')}}" > <br>
      
        <label for="password">password</label>
        <input type="password" name="password"  > <br>  @error('email')
            <span class="alert alert-danger">
             {{$message}}
                
            </span> <br>
        @enderror <br>
        <button class="btn btn-primary" type="submit">Se connecter</button>

    </form>
</fieldset> --}}

@endsection