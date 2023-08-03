<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">Mercatino dei Quadri</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        @if(auth()->user())
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Annunci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('homeUser')}}">I miei annunci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">I miei ordini</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="{{route('creaAnnuncio')}}">Inserisci annuncio</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <input type="submit" class="nav-link text-danger" value="Logout">
            </form>
          </li>
        @else
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Annunci</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/login">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/register">Registrati</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>