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
                <ul class="small-text">
                    <li><p class="m-0">Il campo è obbligatorio</p></li>
                    <li><p class="m-0">Il campo deve contenere almeno 3 caratteri</p></li>
                </ul>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" wire:model.blur='price' class="form-control" id="price">
                <ul class="small-text">
                    <li><p class="m-0">Il campo è obbligatorio</p></li>
                    <li><p class="m-0">Il campo non deve contenere più di 8 caratteri</p></li>
                </ul>
            </div>
            <div class="d-flex flex-column mb-3">
                <label for="body" class="form-label">Descrizione</label>
                <textarea class="form-control" name="body" wire:model.blur='body' id="body" cols="40" rows="3"></textarea>
                <ul class="small-text">
                    <li><p class="m-0">Il campo è obbligatorio</p></li>
                    <li><p class="m-0">Il campo deve contenere almeno 15 caratteri</p></li>
                    <li><p class="m-0">Il campo non deve contenere più di 500 caratteri</p></li>
                </ul>
            </div>
            <div class="mb-3">

                <label for="category" class="form-label">Categoria</label>
                
                <select class="form-select" wire:model.defer="category" id="category" aria-label="Default select example">

                    <option value="" hidden>Seleziona una categoria</option>

                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                        
                </select>

                <ul class="small-text">
                    <li><p class="m-0">Il campo è obbligatorio</p></li>
                </ul>
                
            </div>
            <button type="submit" class="btn-canvas-cus">Inserisci</button>
        </form>
    </div>
    
</div>
