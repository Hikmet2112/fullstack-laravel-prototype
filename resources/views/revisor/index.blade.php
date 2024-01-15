<x-layout>
  
  <x-masthead 
  title='titleRevisor'
  ></x-masthead>
  
  <div class="container-fluid p-1 bg-dark shadow mb-5">
    <div class="row">
      <div class="col-12 text-light p-5">
        <h1 class="disply-2">{{$article_to_check ? __('ui.articleRevisor') : __('ui.nonArticleRevisor')}}</h1>
        
      </div>
    </div>
  </div> 
  
  @if($article_to_check)
  <div class="container my-5">
    <div class="row justify-content-center"> 
      <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center">

        <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
          @if ($article_to_check->images)
          <div class="carousel-inner">
            @foreach ($article_to_check->images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
              <img src="{{Storage::url($image->path)}}" class="img-fluid img-custom rounded" alt="">
            </div>
            @endforeach
          </div>
          
          @else
          <div class="carousel-inner h-carousel">
            <div class="carousel-item active">
              <img src="https://picsum.photos/200" class="d-block img-fluid img-custom" alt="">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/200" class="d-block img-fluid img-custom" alt="">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/200" class="d-block img-fluid img-custom" alt="">
            </div>
          </div>
          @endif
          
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div> 

      <div class="col-12 col-md-6 d-flex flex-column justify-content-center my-4">
        <div class="text-center">
          <h2>{{$article_to_check->title}}</h2>
          <h3>{{$article_to_check->price}} €</h3>
          <p>{{$article_to_check->body}}</p>
        </div>
      </div>  
    </div>
    <div class="row">
      <div class="col-1 col-md-6"></div>
      <div class="col-5 col-md-3 d-flex justify-content-center">
        <form action='{{route("revisor.accept_article" , ["article"=>$article_to_check])}}' method="POST">
          @csrf 
          @method('PATCH') 
          
          <button type="submit" class="btn btn-success">{{__('ui.buttonAccept')}}</button> 
          
        </form>
      </div> 
      
      <div class="col-5 col-md-3 d-flex justify-content-center">
        <form action="{{route('revisor.reject_article',['article'=>$article_to_check])}}" method="POST">
          @csrf 
          @method('PATCH')  
          
          <button type="submit" class="btn btn-danger">{{__('ui.buttonReject')}}</button> 
          
        </form> 
      </div>
      
    </div>
  </div> 
  @endif
  
  
</x-layout>

