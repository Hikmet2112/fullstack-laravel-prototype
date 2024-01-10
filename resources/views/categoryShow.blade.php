<x-layout>
  
  {{-- Category nav --}}
  <x-category-navbar></x-category-navbar>

  @forelse($category->articles as $article)
  <div class="col-12 col-md-6">
    <div class="card" style="width: 18rem;">
      <img src="https://picsum.photos/200" class="card-img-top" alt="...">
      <div class="card-body">
        <p>{{$article->category->name}}</p>
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text">{{$article->body}}</p>
        <p class="card-text">{{$article->price}}</p>
      </div>
    </div>
  </div>
  
  @empty 
  <div class="col-12 col-md-6 my-5">
    <h2 class="text-center">Non sono presenti annunci in questa categoria!</h2>
    <p class="text-center">
      Crea un nuovo articolo <a href="{{route('article.create')}}">qui</a>
    </p>
  </div>
  @endforelse
  
</x-layout>