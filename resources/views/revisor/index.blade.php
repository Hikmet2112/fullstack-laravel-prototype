<x-layout>

<x-masthead 
title='Articoli da revisionare'
></x-masthead>
 
<div class="container-fluid p-5 bg-success shadow mb-4">
    <div class="row">
        <div class="col-12 text-light p-5">
            <h1 class="disply-2">{{$article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>

        </div>
    </div>
</div> 

@if($article_to_check)
<div class="container">
    <div class="row">
        <div class="col-12">
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
    <div>
        <h3>{{$article_to_check->title}}</h3> 
        <p>{{$article_to_check->body}}</p>
        <p>{{$article_to_check->price}}</p>
    </div>
    <div class="row"> 
        <div class="col-12 col-md-6">
            <form action='{{route("revisor.accept_article" , ["article"=>$article_to_check])}}' method="POST">
                @csrf 
                @method('PATCH') 

                    <button type="submit" class="btn btn-success">Accetta</button> 

            </form>
        </div> 

        <div class="col-12 col-md-6">
            <form action="{{route('revisor.reject_article',['article'=>$article_to_check])}}" method="POST">
                @csrf 
                @method('PATCH') 

                    <button type="submit" class="btn btn-danger">Rifiuta</button> 

            </form> 
        </div>

    </div>
</div>
@endif


</x-layout>