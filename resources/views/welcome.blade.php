
<x-layout>
    
    {{-- Category nav --}}
    <x-category-navbar></x-category-navbar>
    
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    
    <x-masthead title='sito'></x-masthead>
    
    
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