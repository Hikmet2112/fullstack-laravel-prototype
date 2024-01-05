<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">{{$title}}</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        @guest
        
        <a href="{{route('login')}}" class="btn btn-primary btn-lg px-4 gap-3">Login</a>
        <a href="{{route('register')}}" class="btn btn-outline-secondary btn-lg px-4">Registrati</a>

        @endguest
        @auth
        <a href="{{route('article.create')}}" class="btn btn-outline-secondary btn-lg px-4">Inserisci annuncio</a>
        @endauth



      </div>
    </div>
  </div>