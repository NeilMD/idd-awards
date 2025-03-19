<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css">
    @vite('resources/css/styles.css')
    @vite('resources/css/time-capsule.css')
    @vite('resources/css/award-categories.css')
    @vite('resources/css/wd.css')
</head>
<body>
    <!-- nav -->
    <nav>
      <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/img/Asset 8.png') }}" class="logo" id="logo" data-hover-logo="{{ Vite::asset('resources/img/logo-hover.png') }}"
      /></a>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
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
       <!--hero-->
       <section class="hero web-hero">
        <div class="overlay"></div>
        <h1 class="title"> WEB DEV AWARDS</h1>
    </section>

<!-- Accordion Categories -->
<div class="accordion-container">
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Business Byte Brilliance Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST BUSINESS BASED WEBSITE</h4>
        <p>Awarded to the student with the best business based website, based on objectives met from the respective brief.</p>
        <ul class="award-details">
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criterias</li>
      </div>
    </div>
    
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Fire Personal Site Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST PERSONAL WEBSITE</h4>
        <p>Awarded to the student with the best personal website. Think your personal website is the epitome of YOU? This could be the award for you.
        </p>
        <ul class="award-details">
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criterias</li>
      </div>
    </div>
    
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Database Dynamo Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST DATABASE</h4>
        <p>Awarded to the student with the best and most functional database.</p>
        <ul class="award-details">
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criterias</li>
      </div>
    </div>
    
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Browser Breakthrough Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST WEB APP</h4>
        <p>Awarded to the student with the best Web App, based on objectives met from the respective brief.</p>
        <ul class="award-details">
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criterias</li>
      </div>
    </div>
    
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Most "Committed" Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>HIGHEST COMMIT COUNT TO GITHUB</h4>
        <p>Start adding up your commits on Github NOW... If you're the winner, this could take a while.</p>
        <ul class="award-details">
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criteria</li>
          <li>criterias</li>
      </div>
    </div>
  </div>

        <!-- redirection -->
  <h2 class="section-title">See Also:</h2>
  <section class="cards-section">
      <div class="cards-container">
          <div class="card">
              <a href="{{ url('ignite-awards') }}"><img src="{{ Vite::asset('resources/img/IGNITE@3x.png') }}" alt="Award Category" class="card-img"></a>
              <div class="card-content">
                  <h2 class="card-title">The IGNITE Award</h2>
                  <p class="card-text">See criteria for the IGNITE award. Student and Instructor voted!</p>
              </div>
          </div>
          <div class="card">
              <a href="{{ url('graphic-design') }}"><img src="{{ Vite::asset('resources/img/IGNITE@3x.png') }}" alt="Award Category" class="card-img"></a>
              <div class="card-content">
                  <h2 class="card-title">Graphic Design</h2>
                  <p class="card-text">See criteria for all Graphic Design awards. Applicants must be Graphic Design Majors.</p>
              </div>
          </div>
          <div class="card">
              <a href="{{ url('user-experience') }}"><img src="{{ Vite::asset('resources/img/UX@3x.png') }}" alt="Award Category" class="card-img"></a>
              <div class="card-content">
                  <h2 class="card-title">User Experience</h2>
                  <p class="card-text">See criteria for all UX awards. Applicants must be UX Majors.</p>
              </div>
          </div>
          <div class="card">
              <a href="{{ url('general-awards') }}"><img src="{{ Vite::asset('resources/img/GEN@3x.png') }}" alt="Award Category" class="card-img"></a>
              <div class="card-content">
                  <h2 class="card-title">General</h2>
                  <p class="card-text">See criteria for general awards. Open to all applicants!</p>
              </div>
          </div>
      </div>
  </section>

    <!-- Footer -->
    <footer>
        <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    @vite('resources/js/award-categories.js')
</body>
</html>