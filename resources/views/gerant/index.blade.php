@extends('layouts.app')

@section('main')

<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
  <a class="navbar-brand" href="#">GPAO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Facture
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Afficher Factures</a>
          <a class="dropdown-item" href="#">Génerer Facture</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Planning
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Afficher Planning</a>
          <a class="dropdown-item" href="#">Génerer Planning</a>
        </div>
      </li>
    </ul>
    <a class="btn btn-outline-light my-2 my-sm-0 active"  href="{{ url('/main/logout') }}">Logout</a>
  </div>
</nav>

@endsection