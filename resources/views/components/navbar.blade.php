<header>
    <nav id="mainNavbar" class="navbar navbar-expand-lg bg-dark border-bottom  p-0" data-bs-theme="dark">
        <div class="container-fluid">
         <x-logo/>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-solid fa-bars"></span>
            
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
              <li class="nav-item">
                <a class="nav-link" href="{{route('homepage')}}">Homepage</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="{{route('list')}}">Elenco</a>
              </li>
             
            </ul>
            </header>