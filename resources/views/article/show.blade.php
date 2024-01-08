<x-layout>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-12 h-100 d-flex justify-content-center">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner h-carousel">
                      <div class="carousel-item active pippo">
                        <img src="https://picsum.photos/200" class="d-block  img-custom" alt="https://picsum.photos/200">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/200" class="d-block  img-custom" alt="https://picsum.photos/200">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/200" class="d-block  img-custom" alt="https://picsum.photos/200">
                      </div>
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
            </div>
        </div>

          <div class="row my-4">
            <div class="col-12 d-flex justify-content-center flex-column align-items-center">
                <h2 class="bg-danger">{{$article->title}}</h2>
                <h4 class="bg-danger">{{$article->body}}</h4>
                <p class="bg-danger">{{$article->price}}</p>
            </div>
          </div>

    </div>
    

</x-layout>