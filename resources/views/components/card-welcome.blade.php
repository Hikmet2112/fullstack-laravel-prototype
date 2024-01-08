
{{-- @dd($articles) --}}
<div class="card m-5" style="width: 18rem;">
  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
  <div class="card-body">
    <a href="{{route('categoryShow',['category'=>$article->category])}}">{{$article->category->name}}</a>
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->body}}</p> 
    <p class="card-text">{{$article->price}}</p>
    <a href="{{route('article.show', compact('article'))}}"  class="btn btn-primary">Dettaglio</a>
  </div>
</div>
