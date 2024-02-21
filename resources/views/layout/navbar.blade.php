<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{route('index')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('course')}}">Courses</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li>  <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-log-out profile-icon">
                 <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                 <polyline points="16 17 21 12 16 7"></polyline>
                 <line x1="21" y1="12" x2="9" y2="12"></line>
             </svg>
             {{ __('Logout') }}
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST"
               class="d-none">
             @csrf
         </form></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    
      {{-- <a href="{{route('index')}}" class="get-started-btn">Get Started</a> --}}

    </div>
  </header><!-- End Header -->