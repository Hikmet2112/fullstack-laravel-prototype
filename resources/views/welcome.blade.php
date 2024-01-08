<x-layout>
    
    <x-masthead title='E-presto'></x-masthead>


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