<div>
  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Dittoskala</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/resume') }}">Resume</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </header>

  <main class="main">
    <section id="hero" class="hero section" style="position: relative; overflow: hidden; height: 100vh;">
      <!-- Background Image -->
      <img src="{{ asset('front/img/mikasa.png') }}" alt="Hero Background"
           style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
           object-fit: cover; z-index: 1; opacity: 0.4;">

      <!-- Optional overlay (kalau mau lebih gelap/kontras) -->
      <div style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

      <!-- Content on top -->
      <div class="container text-center d-flex flex-column justify-content-center align-items-center"
           data-aos="zoom-out" data-aos-delay="100"
           style="position: relative; z-index: 2; height: 100%;">
        <h2 class="text-white fw-bold">Adytia Kusuma Putra</h2>
        <p class="text-light">blablabalabalab</p>
        <a href="{{ url('/about') }}" class="btn btn-primary mt-3">About Me</a>
      </div>
    </section>
  </main>
</div>
