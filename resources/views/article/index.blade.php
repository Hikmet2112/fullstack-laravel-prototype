<x-layout> 

<x-category-navbar></x-category-navbar>

    <x-masthead
    title="I nostri annunci"
    ></x-masthead> 


<div class="container-fluid">
    <div class="row justify-content-center">
        
        @foreach ($articles as $article)
        
        <x-card-welcome 
        :article="$article"
        ></x-card-welcome>
        
        
        @endforeach
        
        
        
        
    </div> 
</div>




</x-layout>