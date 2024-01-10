
  
  <!-- Modal --> 
  
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
     

    <div class="container-fluid">
        <div class="row justify-content-center">
    
            <div class="col-12 ">
                <form method="POST" action="{{route('become.revisor')}}" class="p-4  my-5 rounded-4">
                    @csrf 
                    
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome Utente</label>
                      <input type="text" disabled name="name" class="form-control @error('name') is-invalid @enderror" value="{{Auth::user()->name}}" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Utente</label>
                        <input type="email" disabled name="email" class="form-control @error('email') is-invalid @enderror" value="{{Auth::user()->email}}" id="email">
                    </div> 

                    <div class="mb-3">
                        <label for="body" class="form-label">Perchè vuoi lavorare con noi?</label>
                        <textarea name="body" id="body" cols="50" rows="10"></textarea>
                      </div>
                  <div>
                     <button type="submit" class="btn btn-primary">Invia</button>
                  </div>
                
                    
                  </form>
            </div>
        </div>
    </div>
    
 
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>