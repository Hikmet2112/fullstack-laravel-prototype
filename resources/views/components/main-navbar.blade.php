<nav class="navbar navbar-expand-lg contenitore-navbar">
  <div class="container-fluid bg-collapse">
    <a class="btn btn-cus-nav" data-bs-toggle="offcanvas" href="#offcanvasDark" role="button" aria-controls="offcanvasExample">
      <i class="fa-solid fa-circle-user fa-xl text-white"></i>
    </a>
    <a class="navbar-brand text-white ms-3 me-5 pe-5" href="{{route('homepage')}}">E-presto</a>
    <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars fa-xl text-white"></i></span>
    </button>
    <div class="collapse navbar-collapse p-3 p-md-0 my-3" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-collapse">
        <li class="nav-item ms-3 p-0">
          <a class="nav-link text-white" aria-current="page" href="{{route('homepage')}}"><i class="fa-solid fa-house fs-5"></i></a>
        </li>
        <li class="nav-item pe-3 separator-right">
          <a class="nav-link text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item ms-3 p-0">
          <a class="nav-link text-white" aria-current="page" href="{{route('article.index')}}"><i class="fa-solid fa-book fa-xl"></i></a>
        </li>
        <li class="nav-item @auth @if(Auth::user()->is_revisor) separator-right @endif @endauth me-3">
          <a class="nav-link text-white" href="{{route('article.index')}}">Articoli</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{route('revisor.index')}}"><i class="fa-solid fa-check fa-xl"></i></a>
        </li>
        <li class="nav-item">
          @if(Auth::user()->is_revisor) 
          <li class="nav-item">
            {{-- <span class="bg-info"><i class="fa-solid fa-check fa-2xl text-white"></i></span> --}}
            <a class="nav-link text-white btn"  href="{{route('revisor.index')}}">Revisione
              @if (App\Models\Article::toBeRevisionedCount() == 0)
              
              @else    
              <span class=" translate-middle badge rounded-pill bg-danger badge-custom">
                
                {{App\Models\Article::toBeRevisionedCount()}}
                
                <span class="visually-hidden">Unread messages</span>
              </span>
              @endif
            </a> 
          </li>
          @endif
        </li>
        @endauth
      </ul>
      <form class="d-flex bg-collapse me-3" action="{{route('articles.search')}}" method="GET" role="search">
        <input name="searched" id="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>



{{-- <div class="container-fluid contenitore-navbar">
  <div class="row">
    <div class="col-12">
      <nav class="main-navbar">
        <span class="">
          <a class="btn btn-cus-nav m-2" data-bs-toggle="offcanvas" href="#offcanvasDark" role="button" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars fa-2xl text-white"></i>
          </a>
        </span>
        <span class="">
          <a class="btn btn-cus-nav m-2" href="{{route('homepage')}}" role="button" aria-controls="offcanvasExample">
            <p class="text-white">E-presto</p>
          </a>
        </span>
      </nav>
    </div>
  </div>
</div> --}}