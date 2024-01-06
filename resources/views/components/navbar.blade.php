
<a class="btn btn-primary"  data-bs-toggle="offcanvas" href="#offcanvasDark" role="button" aria-controls="offcanvasExample">
  Navbar
</a>


  <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
    <div class="d-flex justify-content-center"><img class="UserImg my-4" src="https://picsum.photos/200" alt=""></div>
    
    <div class="offcanvas-header d-flex justify-content-center mb-3">
      <h5 class="offcanvas-title" id="offcanvasDarkLabel">{{Auth::user()->name}}</h5>

       {{-- QUI INSERIREMO IMG DELL'UTENTE INTATO NOME--}}
       <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     
    </div>
    <div class="offcanvas-body">
      <p><nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">E-presto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              @auth
              <li class="nav-item dropdown custom">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">  {{Auth::user()->name}}</a>
    
    
    
                <ul class="dropdown-menu">
                  <li>
                    <form class="d-flex justify-content-center" method="POST" action="{{route('logout')}}">
                        @csrf
                        <button class="d-flex justify-content-center btn btn-danger" type="submit">Logout</button>
                    </form>
                </li>
                </ul>
              </li>
              @endauth
              
                
             
           
            {{-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
          </div>
        </div>
      </nav> </p>
    </div>
  </div>