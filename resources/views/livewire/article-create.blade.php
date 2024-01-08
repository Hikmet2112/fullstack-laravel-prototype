<div>
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <form enctype="multipart/form-data" class="p-4 border-4 shadow rounded" wire:submit="articleStore">
            
            {{-- <div class="mb-3">
                <label for="img" class="form-label"> Allega file</label>
                <input type="file"  name="img"  class="form-control"  id="img" >
            </div> --}}

            <div class="mb-3">
                <label for="title" class="form-label">Nome prodotto</label>
                <input type="text" wire:model.blur='title' class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" wire:model.blur='price' class="form-control" id="price">
            </div>
            <div class="d-flex flex-column mb-3">
                <label for="body" class="form-label">Descrizione</label>
                <textarea name="body" wire:model.blur='body' id="body" cols="40" rows="3"></textarea>
            </div>
            <div class="mb-3">
                {{-- @dd($categories) --}}

                <div> <p>Selezione la tua categoria</p> </div>
                
                <select class="form-select" wire:model="category" id="category" aria-label="Default select example">

                    
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    
                    @endforeach
                   
                  </select>
                
               

            </div>
            
            <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
    
</div>
