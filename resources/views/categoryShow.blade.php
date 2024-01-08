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
  <div class="col-12">
    <p>non sono presenti annunci in questa categoria!</p>
    <a href="{{route('article.create')}}"><p>crea un nuovo articolo</p></a>
  </div>
  @endforelse
  
</x-layout>