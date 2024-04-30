<nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('/')}}">E-Commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('Produit.index')}}">Liste des Produits <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Liste des Categories <span class="sr-only">(current)</span></a>
            </li>
          
           
            
          </ul>
         
          <div class="form-inline my-2 my-lg-0" >
            {{-- <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search"> --}}
            @auth
            <form action="{{route('logout')}}" method="post" >
              @csrf
              @method('delete')
           <span>{{Auth::user()->name}} </span> <input class="btn btn-outline-success my-2 my-sm-0"  type="submit" value="se déconnecter"  />
           

            </form>

              @else
              <a href="{{route('login')}}"> <input class="btn btn-outline-success my-2 my-sm-0"  value="se connecter" type="button" /></a> &nbsp;
              <a href="{{route('signin')}}"> <input class="btn btn-outline-primary my-2 my-sm-0"  value="s'inscrire"  type="button"/></a>

          @endauth
          </div>
          
        </div>
      </nav>
</nav>