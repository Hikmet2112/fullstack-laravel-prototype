<x-layout>
  
  
  <div class="container my-5">
    <div class="row justify-content-center"> 
      <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-center">

        <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
          @if ($article->images)
          <div class="carousel-inner">
            @foreach ($article->images as $image)
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

      <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
        <div class="text-center">
          <h2>{{$article->title}}</h2>
          <h3>{{$article->price}} €</h3>
          <p>{{$article->body}}</p>
        </div>
      </div>  
    </div>
  </div> 
    
    
  </x-layout>