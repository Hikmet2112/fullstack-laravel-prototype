<x-layout>
  
  
  <a href="{{route('article.index')}}" class=""><button class="btn btn-dark shadow ms-3 my-4"><i class="fa-solid fa-arrow-left fa-bounce me-2"></i> Torna indietro</button></a>
  <div class="container mx-5 mb-5 ">
    <div class="row"> 
      <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center">
        @if (!$article->images->isEmpty())
        <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach ($article->images as $image)
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
      
      <div class="col-12 col-md-4 d-flex flex-column justify-content-center ">
        <div class="text-center">
          <h2>{{$article->title}}</h2>
          <h3>{{$article->price}} €</h3>
          <p>{{$article->body}}</p>
        </div>
      </div>  
      
    </div>
  </div> 
  
</x-layout>