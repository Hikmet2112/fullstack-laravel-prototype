<x-layout>
  
  <x-masthead 
  title='titleRevisor'
  ></x-masthead>
  
  <div class="container-fluid p-1 bg-dark shadow w-75 mt-5 rounded-3 ">
    <div class="row">
      <div class="col-12 text-light p-5 text-center">
        <h1 class="disply-2">{{$article_to_check ? __('ui.articleRevisor') : __('ui.nonArticleRevisor')}}</h1>
        
      </div>
    </div>
  </div> 
  
  @if($article_to_check)
  <div class="container m-5">
    <div class="row justify-content-center"> 
      <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center">
      
        @if (!$article_to_check->images->isEmpty())
        <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach ($article_to_check->images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
              <img src="{{$image->getUrl(400, 300)}}" class="img-fluid img-custom rounded" alt="Immagine identificativa del prodotto">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
        
        @else
        <div class="m-5">
          <img src="/storage/image/default.jpg" alt="Immagine di default">
        </div>
        @endif
      </div> 
      
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
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
  <div class="row mt-5">
    <div class="col-12 col-md-6 border-end d-flex justify-content-center flex-column align-items-center">
      <h5 class="tc-accent mb-3">Tags</h5>
      <div class="p-2">
        @if ($image->labels)
            @foreach ($image->labels as $label)
                <p class="d-inline">{{$label}}, </p>
            @endforeach
        @endif
      </div>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center flex-column align-items-center">
      <div class="card-body">
        <h5 class="tc-accent mb-3">Revisione immagini:</h5>
        <p>Adulti: <span class="{{$image->adult}}"></span></p>
        <p>Satira: <span class="{{$image->spoof}}"></span></p>
        <p>Medicina: <span class="{{$image->medical}}"></span></p>
        <p>Violenza: <span class="{{$image->violence}}"></span></p>
        <p>Contenuto sessualmente esplicito: <span class="{{$image->racy}}"></span></p>
      </div>
    </div>
  </div>
</div> 
@endif

</x-layout>

