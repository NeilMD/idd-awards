<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    @vite('resources/css/styles.css')
    @vite('resources/css/time-capsule.css')
    @vite('resources/css/award-categories.css')
  </head>
  <body>
    <!-- nav -->
    <nav>
      <a href="{{ url('/') }}"
        >
        <img src="{{ Vite::asset('resources/img/Asset 8.png') }}" class="logo" id="logo" data-hover-logo="{{ Vite::asset('resources/img/logo-hover.png') }}"
      /></a>
      <div class="nav-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('awards') }}" class="active">Awards</a>
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
    <!--hero-->
    <section class="hero time-capsule-hero">
      <div class="overlay"></div>
      <h1 class="title">AWARD CATEGORIES</h1>
    </section>

    <!-- cards -->
    <section class="cards-section">
      <div class="cards-container">
        <div class="card">
          <a href="{{ url('ignite-awards') }}"
            ><img
              src="{{ Vite::asset('resources/img/IGNITE@3x.png') }}"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">The IGNITE Award</h2>
            <p class="card-text">
              See criteria for the IGNITE award. Student and Instructor voted!
            </p>
          </div>
        </div>
        <div class="card">
          <a href="{{ url('graphic-design') }}"
            ><img
              src="{{ Vite::asset('resources/img/IGNITE@3x.png') }}"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">Graphic Design</h2>
            <p class="card-text">
              See criteria for all Graphic Design awards. Applicants must be
              Graphic Design Majors.
            </p>
          </div>
        </div>
        <div class="card">
          <a href="{{ url('user-experience') }}"
            ><img
              src="{{ Vite::asset('resources/img/UX@3x.png') }}"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">User Experience</h2>
            <p class="card-text">
              See criteria for all UX awards. Applicants must be UX Majors.
            </p>
          </div>
        </div>
        <div class="card">
          <a href="{{ url('web-development') }}"
            ><img
              src="{{ Vite::asset('resources/img/WEB@3x.png') }}"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">Web Development</h2>
            <p class="card-text">
              See criteria for all Web awards. Applicants must be Web Dev
              Majors.
            </p>
          </div>
        </div>
        <div class="card">
          <a href="{{ url('general-awards') }}"
            ><img
              src="{{ Vite::asset('resources/img/GEN@3x.png') }}"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">General</h2>
            <p class="card-text">
              See criteria for general awards. Open to all applicants!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
  </body>
</html>
