@extends('layouts.master')
@section('title','signin')
@section('main')

<fieldset>
    <legend>inscription</legend>
    <form action="{{route('signin')}}" method="POST" class="form">
        @csrf
        <table class="table width-100">
            <tr>
                <th>
                 <label for="name">name</label>
                </th>  
                <td>
                    <input type="text" name="name" value="{{old('name')}}" >   @error('name')<span class="alert alert-danger">
                        {{$message}}
                    @enderror </span>

                </td>  
            </tr>
            <tr>
                <th>
                    <label for="email">email</label>

                </th>  
                <td>
                    <input type="text" name="email" value="{{old('email')}}" >   @error('email')<span class="alert alert-danger">
                        {{$message}}
                    @enderror </span>

                </td>  
            </tr>
            <tr>
                <th>
                    <label for="password">password</label>
                
                </th>  
                <td>
                    <input type="password" name="password"  >   @error('password')<span class="alert alert-danger">
                        {{$message}}
                    @enderror </span>

                </td>  
            </tr>
            <tr>
                <th>
                    <label for="Cpassword">confirm password</label>

                </th>  
                <td>
                    <input type="password" name="Cpassword"  >   
                    @error('Cpassword')<span class="alert alert-danger">
                        {{$message}}
                    @enderror </span>
                    @error('password.confirmed')<span class="alert alert-danger">
                        {{$message}}
                    @enderror </span>
                </td>  
            </tr>
         
            
        </table>
       
      
      
       
        <button class="btn btn-primary" type="submit">Se connecter</button>

    </form>
</fieldset>

@endsection