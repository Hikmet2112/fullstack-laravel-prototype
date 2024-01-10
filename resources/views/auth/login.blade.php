
<x-layout>

    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}" class="p-4  my-5 rounded-4">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password </label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    </div>
                    <button type="submit" class="btn btn-dark">Accedi</button>
                    <p class="my-3">
                        Non sei registrato? Registrati <a href="{{route('register')}}">qui</a>
                    </p>
                  </form>
            </div>
        </div>
    </div>









</x-layout>