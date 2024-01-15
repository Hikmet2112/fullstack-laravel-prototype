<div class="modal fade modal-custom" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inserimento foto profilo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="profile-img" method="POST" enctype="multipart/form-data" action="{{route('profile-img-store')}}">
          @csrf
            <input type="file" name="profile-img" id="profile-img">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form method="POST" name="profile-img" id="profile-img" action="{{route('profile-img-store')}}">
            @csrf
            <button type="submit" class="btn btn-primary">Inserisci foto</button>
          </form>
        </div>
      </div>
    </div>
  </div>