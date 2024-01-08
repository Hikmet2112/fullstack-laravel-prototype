<x-layout>
    
    <x-masthead title='E-presto'></x-masthead>

    @foreach ($articles as $article)

    {{-- @foreach($categories as $category) --}}
        {{-- @if($category->id==$article->category_id){ --}}


            <x-card-welcome 
            :article="$article"
            ></x-card-welcome>

        {{-- } --}}
        {{-- @endif --}}
    
        
        {{-- @endforeach --}}

        
    

   

    @endforeach









</x-layout>