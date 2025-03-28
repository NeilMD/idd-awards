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
      <x-awards-item 
        :pageUrl="url('ignite-awards')" 
        :imageUrl="Vite::asset('resources/img/IGNITE@3x.png')" 
        :awardTitle="'The IGNITE Award'" 
        :awardText="'See criteria for the IGNITE award. Student and Instructor voted!'" />

        <x-awards-item 
        :pageUrl="url('graphic-design')" 
        :imageUrl="Vite::asset('resources/img/IGNITE@3x.png')" 
        :awardTitle="'Graphic Design'" 
        :awardText="'See criteria for all Graphic Design awards. Applicants must be
                Graphic Design Majors.'" />

        <x-awards-item 
        :pageUrl="url('user-experience')" 
        :imageUrl="Vite::asset('resources/img/UX@3x.png')" 
        :awardTitle="'User Experience'" 
        :awardText="'See criteria for all UX awards. Applicants must be UX Majors.'" />

        <x-awards-item 
        :pageUrl="url('web-development')" 
        :imageUrl="Vite::asset('resources/img/WEB@3x.png')" 
        :awardTitle="'Web Development'" 
        :awardText="'See criteria for all Web awards. Applicants must be Web Dev
                Majors.'" />

        <x-awards-item 
        :pageUrl="url('general-awards')" 
        :imageUrl="Vite::asset('resources/img/GEN@3x.png')" 
        :awardTitle="'General'" 
        :awardText="'See criteria for general awards. Open to all applicants!'" />
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
  </body>
</html>
