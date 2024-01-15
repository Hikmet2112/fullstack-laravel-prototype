<div class="px-4 py-5 my-5 text-center video-container">
  <video autoplay muted loop id="video-header">
    <source src="/storage/Video/video.mp4" type="video/mp4">
  </video>
     <h1 class="display-5 fw-bold  title-custom">{{__("ui.$title")}}</h1>
    <div class="col-lg-6 mx-auto">
        @if (Route::currentRouteName() == 'revisor.index')
        
        @else
        <p class="lead mb-4 text-masthead ">{{__('ui.textMasthead')}}.</p>
        @endif
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

        @guest
        <a href="{{route('login')}}" class="btn btn-dark btn-lg px-4 gap-3">Login</a>
        <a href="{{route('register')}}" class="btn btn-dark btn-lg px-4 gap-3 register">{{__('ui.register')}}</a>
        @endguest

        @auth
        @if (Route::currentRouteName() == 'article.create' || Route::currentRouteName() == 'revisor.index')
        
        @else
        <a href="{{route('article.create')}}" class="btn  btn-lg px-4 button-article"><i class="fa-solid fa-square-plus fa-lg me-1"></i> {{__('ui.insertAnnoucement')}}</a>
        @endif
        @endauth
      </div>
    </div>
  </div>