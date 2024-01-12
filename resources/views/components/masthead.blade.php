<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">{{$title}}</h1>
    <div class="col-lg-6 mx-auto">
        @if (Route::currentRouteName() == 'revisor.index')
        
        @else
        <p class="lead mb-4">{{__('ui.textMasthead')}}.</p>
        @endif
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

        @guest
        <a href="{{route('login')}}" class="btn btn-dark btn-lg px-4 gap-3">Login</a>
        <a href="{{route('register')}}" class="btn btn-outline-secondary btn-lg px-4">{{__('ui.register')}}</a>
        @endguest

        @auth
        @if (Route::currentRouteName() == 'article.create' || Route::currentRouteName() == 'revisor.index')
        
        @else
        <a href="{{route('article.create')}}" class="btn btn-outline-secondary btn-lg px-4"><i class="fa-solid fa-square-plus fa-lg me-1"></i> Inserisci annuncio</a>
        @endif
        @endauth

      </div>
    </div>
  </div>