<!-- Navigation-->
<nav class="navbar navbar-expand-md navbar-dark bg-black py-1 px-2">
    <div class="container-xxl">
      <!-- navbar brand / title -->
      <a class="navbar-brand col-md-2" href="{{ route('landing') }}">
        <img src="/assets/logo4.svg" class="nav-logo" width="70" height="70" alt="car.go logo">
      </a>
      <!-- toggle button for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link fw-bold text-light hover-txt-blue" href="{{ route('landing') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-light hover-txt-blue" href="{{ route('myorder') }}">My Orders</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link fw-bold text-light hover-txt-blue" href="{{ route('cart') }}"><i class="bi bi-cart-fill"></i></a>
          </li> --}}
          <li class="nav-item">
            {{-- <a class="nav-link fw-bold text-light hover-txt-blue" href="#"><i class="bi bi-person-fill"></i></a> --}}
            <a class="nav-link dropdown-toggle hover-txt-blue text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="{{ route('login') }}">Log out</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item ">
            <a class="nav-link fw-bold text-light" href="#">Contact Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link fw-bold text-light" href="{#">Where To Buy</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link fw-bold text-light" href="#">Crowd Fund</a>
          </li> --}}
          {{-- <li class="nav-item d-md-none">
            <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#modalLoginForm">SIGN IN</a>
          </li>        
          <li class="nav-item ms-2 d-none d-md-inline">
            <div>
              <a class="btn bg-green txt-white" href="" data-bs-toggle="modal" data-bs-target="#modalLoginForm">SIGN IN</a>
            </div>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>