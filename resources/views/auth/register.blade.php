
<x-layout>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('register')}}" class="p-4  my-5 rounded-4">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nome Utente</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name">
                  <ul class="small-text">
                    <li><p class="m-0">Il campo è obbligatorio</p></li>
                </ul>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Utente</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email">
                    <ul class="small-text">
                        <li><p class="m-0">Il campo è obbligatorio</p></li>
                    </ul>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password Utente</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    <ul class="small-text">
                        <li><p class="m-0">Il campo deve contenere almeno 8 caratteri</p></li>
                    </ul>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma password</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Registrati</button>
              </form>
        </div>
    </div>
</div>

</x-layout>
