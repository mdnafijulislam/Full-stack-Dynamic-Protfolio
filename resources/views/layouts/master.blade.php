<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'My Portfolio')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome (Working CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm custom-nav">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary nav-logo" href="{{ route('home') }}">
      MyPortfolio
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="{{ route('home') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="{{ route('portfolio') }}">Portfolio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="{{ route('about') }}">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="{{ route('contact') }}">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>



<main class="py-5">
  <div class="container">
    @yield('content')
  </div>
</main>


<footer class="bg-dark text-light py-4 mt-5">
  <div class="container text-center">
    &copy; {{ date('Y') }} MyPortfolio. All Rights Reserved.
  </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
