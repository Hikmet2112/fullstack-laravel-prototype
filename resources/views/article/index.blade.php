<x-layout> 

<x-category-navbar></x-category-navbar>

    <x-masthead
    title="I nostri annunci"
    ></x-masthead> 


<div class="container-fluid">
    <div class="row justify-content-center">
        
        @forelse ($articles as $article)
        
        <x-card-welcome 
        :article="$article"
        ></x-card-welcome>

      
        @empty
        <div class="col-12">
            <h2>Non ci sono articoli al momento</h2>
            
        </div>
            
      
        
        @endforelse
        {{-- {{$articles->links()}} --}}
        
        
        
        
    </div> 
</div>




</x-layout>