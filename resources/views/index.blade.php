<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    <!-- Load Compiled CSS -->
    @vite(['resources/css/styles.css'])
  </head>
  <body>
    <!-- nav -->
    <nav>
      <a href="{{ url('/') }}"
        ><img src="{{ Vite::asset('resources/img/Asset 8.png') }}" class="logo" id="logo" data-hover-logo="{{ Vite::asset('resources/img/logo-hover.png') }}"
      /></a>
      <div class="nav-links">
        <a href="{{ url('/') }}" class="active">Home</a>
        <a href="{{ url('awards') }}">Awards</a>
        <!-- <a href="#">Nominees</a> -->
        <a href="{{ url('time-capsule') }}">Time Capsule</a>
      </div>
      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <button class="contact-btn">Contact</button>
    </nav>

    <!-- hero -->
    <section class="hero">
      <video class="video-bg" autoplay muted loop>
        <source src="{{ Vite::asset('resources/video/Website Gradient.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <div class="overlay"></div>
      <h1 class="title">IGNITE</h1>
      <h1 class="year">2025</h1>
      <div class="hero-buttons">
        <button class="hero-btn">Get Tickets</button>
        <button class="hero-btn">Learn More</button>
      </div>
    </section>

    <!-- cards -->
    <h2 class="section-title">Award Categories</h2>
    <x-section.cards-section />
    
    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
  </body>
</html>
