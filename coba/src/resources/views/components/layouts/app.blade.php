<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $title ?? 'My Website' }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/css/main.css') }}" rel="stylesheet">

  @livewireStyles
</head>

<body class="{{ $bodyClass ?? '' }}">

  {{ $slot }}

  <footer id="footer" class="footer light-background">
    <div class="container text-center">
      <p>&copy; <strong>Dittoskala</strong> All Rights Reserved</p>
    </div>
  </footer>

  <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/js/main.js') }}"></script>
  @livewireScripts
</body>
</html>
