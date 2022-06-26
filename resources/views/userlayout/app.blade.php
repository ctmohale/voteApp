<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/db2059466e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
    @livewireStyles
  </head>
  <body>
    @include('sweetalert::alert')
    <nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="/"><b>Vote <i class="fa-solid fa-check-to-slot"></i> Application</b></a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user.register">Registere </a>
              </li>
            </ul>
            @if (isset(session('user')->name))
                <span> 
                    <a href="{{ route('vote') }}" class="text-secondary m-2">

                        @if ($vote == true)
                            <b class="text-secondary"><i class="fas fa-smile text-light"></i> Voting Status</b> 
                        @else
                            <b class="text-secondary"><i class="fas fa-frown text-danger"></i> Voting Status</b>
                        @endif
                        
                    </a>
                </span>
                <span> <a href="{{ route('profile') }}" class="text-secondary m-2"> <i class="fa-solid fa-user text-secondary"></i> {{session('user')->name}} </a></span>
                <span> <a href="{{ route('logout') }}" class="text-secondary m-2"> <i class="fas fa-sign-out"></i> Log out </a></span>
            @else
                <span> <a href="" data-bs-toggle="modal" data-bs-target="#LoginModal" class="text-secondary m-2"> <i class="fas fa-sign-in text-secondary"></i> Sign in </a></span>
            @endif

          </div>
        </div>
    </nav>
    @yield('content')
    @include('userlayout.modal')
    @include('userlayout.footer')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
