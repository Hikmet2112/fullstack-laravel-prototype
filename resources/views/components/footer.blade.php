<footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-body-secondary">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
    {{-- <li class="nav-item"><a href="" class="nav-link px-2 text-body-secondary">Lavora con noi</a></li> --}}
    <!-- Button trigger modal --> 
  @auth
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Lavora con noi
    </button> 
  @endauth
  </ul>
  <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
</footer>