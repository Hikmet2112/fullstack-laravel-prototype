
 <a class="btn m-4 btn-cus-nav"  data-bs-toggle="offcanvas" href="#offcanvasDark" role="button" aria-controls="offcanvasExample">
  <i class="fa-solid fa-bars fs-5"></i>
</a> 




<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
  <div class="d-flex justify-content-end m-3"><button type="button" class="btn-close btn-close-white  " data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
  @auth
  <div class="d-flex justify-content-center"><img class="UserImg my-4" src="https://picsum.photos/200" alt=""></div>
  @endauth
  <div class="offcanvas-header d-flex justify-content-center mb-3"> 
    @auth
    <h5 class="offcanvas-title" id="offcanvasDarkLabel">{{Auth::user()->name}}</h5>
    @endauth
    {{-- QUI INSERIREMO IMG DELL'UTENTE INTATO NOME--}}
    
    
  </div>
  <div class="offcanvas-body">
    <p><nav class="navbar navbar-expand-lg bg-body-trasparent">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">E-presto</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <spa><i class="fa-solid fa-ellipsis fs-5 text-white"></i></spa>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}"><i class="fa-solid fa-house fs-5"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Link</a>
            </li>
            @auth
            <li class="nav-item dropdown custom ">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-regular fa-user fs-5"></i> {{Auth::user()->name}}</a>
              
              
              
              <ul class="dropdown-menu">
                <li>
                  <form class="d-flex justify-content-start  " method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class="d-flex justify-content-center btn btn-danger rounded-5" type="submit">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @endauth
            
            
            
            

          </div>
        </div>
      </nav> </p>
    </div>
  </div>