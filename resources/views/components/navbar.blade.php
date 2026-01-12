<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('books_index')}}">Libri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('books_create')}}">Aggiungi Libro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('museums_index')}}">Musei</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('museums_create')}}">Aggiungi Museo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('movies_index')}}">Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('movies_create')}}">Aggiungi Film</a>
        </li>
      </ul>
    </div>
  </div>
</nav>