
<nav class="navbar main-nav border-less navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="/">
        <h1>Desaku</h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
      
        <li class="nav-item">
          <a class="nav-link" href="/">Home<span>/</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('landing-page.about.index')}}">Home<span>/</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('landing-page.profil.index')}}">Profil<span>/</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('landing-page.contact.index')}}">Contact</a>
        </li>

      </ul>
      <a href="#" class="ticket">
        <img src="{{ asset('assets/images/icon/ticket.png')}}" alt="ticket">
        <span>ayo mulai</span>
      </a>
      </div>
  </div>
</nav>
