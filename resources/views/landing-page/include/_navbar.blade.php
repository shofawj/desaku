
<nav class="navbar main-nav border-less navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="/">
       <img src="{{ asset('assets/images/desaku/icon.jpeg')}}" alt="" style="height: 80px;width: 150px;" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
      
        <li class="nav-item">
          <a class="nav-link" href="/">Beranda<span>/</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('landing-page.category.index')}}">Kategori<span>/</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('landing-page.about.index')}}">Tentang Kami<span>/</span></a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link" href="{{ route('landing-page.contact.index')}}">Kontak</a>
        </li>

      </ul>
    <a href="{{route('login')}}" class="ticket">
        <img src="{{ asset('assets/images/icon/ticket.png')}}" alt="ticket">
        <span>AYO MULAI</span>
      </a>
      </div>
  </div>
</nav>
