<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Awards</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    <!-- Load Compiled CSS -->
    @vite(['resources/css/styles.css'])
  </head>
  <body>
    <x-section.nav-header active="" />

    <!-- hero -->
    <section class="hero">
        <video class="video-bg" autoplay muted loop>
            <source src="{{ Vite::asset('resources/video/index_hero.webm') }}" type="video/webm">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="title-wrap">
          <div class="title-abs">
            <h1 class="title-home">IGNITE</h1>
          </div>
          
          <h1 class="year">2025</h1>
        </div>
        
        <h2 class="subtitle">STUDENT AWARDS SHOW</h2>
        <div class="hero-buttons">
            <a href="https://www.showpass.com/sait-ignite-awards-2025/"><button class="hero-btn" >Get Tickets</button></a>
        </div>
       
        <a href="#event-info" class="arrow-down">
          <i class="fa-solid fa-arrow-down"></i>
        </a>
    </section>

    <div id="event-info" class="event-details">
      <div class="event-image">
          <img src="{{ Vite::asset('resources/img/index_about.webp')}}" alt="Event Image">
      </div> 
      <div  class="event-info-container">
            <h1 class="bigger">IGNITE AWARDS</h1>
            <p>CELEBRATING INTERACTIVE DESIGN STUDENTS</b></p>
            <p>A torch lit, a future ignitied. </p>
            <p>Join us in commemorating our inaugural SAIT Interactive Design grads: one night filled with inspiration
            and awards that will launch their legacy.</p>
            <p>Celebrate the future of industry as we recognize student excellence and achievement through a collection 
            of awards honouring our students, followed by the opportunity to connect with the brilliant minds behind the work.</p>
            <p>It only takes a spark of imagination for the impossible to take flight.</p>
            <b><p>Date:</b> April 24th, 2025<br>
                <b>Time:</b> 4:30 PM - 8:30 PM<br>
                <b>Location:</b> Senator Burns Building | NK013</p>
      </div>
    </div>
    <!-- cta -->            
    <x-section.cta-section page="home"/>
    
    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
  </body>
</html>
