<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TENEWS | Artikel</title>
    <link href="{{ asset('assets/img/logo.svg') }}" rel="icon" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
</head>
<body>
    <!-- Navbar -->
    <nav class="fixed-top bg-transparant">
        <div class="container-fluid">
          <div class="container">
            <div class="row navbar navbar-expand-lg d-flex justify-content-between">
              <div class="col-4">
                <a class="navbar-brand" href="/">
                  <img
                    src="{{ asset('assets/img/news.svg') }}"
                    alt="Tenews"
                    height="70"
                    />
                </a>
              </div>
              <button class="col-2 navbar-toggler" style="border:none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="col-lg-8 navbar-nav d-flex justify-content-end">
                  <div class="mx-3"><a class="nav__item btn btn-dark {{ Request::is('/tenews/kampus-unissula') ? 'active' : '' }}" href="/tenews/kampus-unissula">Home</a></div>
                  <div class="mx-3"><a class="nav__item btn btn-outline-dark {{ Request::is('/tenews/about') ? 'active' : '' }}" href="#">About</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      @yield('main')
      <!-- End of Navbar -->
      @include('layouts.footer')
      <script src="{{ asset('assets/js/script.js') }}"></script>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"
      ></script>
    </body>
  </html>