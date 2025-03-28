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
    <link rel="stylesheet" href="./assets/css/ux.css">
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
       <section class="hero ux-hero">
        <div class="overlay"></div>
        <h1 class="title"> USER EXPERIENCE AWARDS</h1>
    </section>

        <!-- Accordion Categories -->
        <div class="accordion-container">
            <div class="accordion-item">
              <div class="accordion-header">
                <h3>The HI-FI High-Five Award</h3>
                <div class="accordion-icon">
                  <span class="arrow"></span>
                </div>
              </div>
              <div class="accordion-content">
                <h4>BEST HIGH FIDELITY MOCKUP</h4>
                <p>Description
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
                <h3>The Innovator Extraordinaire Award</h3>
                <div class="accordion-icon">
                  <span class="arrow"></span>
                </div>
              </div>
              <div class="accordion-content">
                <h4>MOST INNOVATIVE PROBLEM SOLVING</h4>
                <p>decription
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
                <h3>The Design System Vanguard Award</h3>
                <div class="accordion-icon">
                  <span class="arrow"></span>
                </div>
              </div>
              <div class="accordion-content">
                <h4>BEST DESIGN SYSTEM</h4>
                <p>Description</p>
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
                <h3>The Sick Flow Award</h3>
                <div class="accordion-icon">
                  <span class="arrow"></span>
                </div>
              </div>
              <div class="accordion-content">
                <h4>BEST USER FLOW</h4>
                <p>Think you've got sick flow, bro? Prove you're the best using a sequence of only 5
                    user flows. Submissions with more than 5 will not be accepted.
                </p>
                <ul class="award-details">
                    <li>criteria</li>
                    <li>criteria</li>
                    <li>criteria</li>
                    <li>criteria</li>
                    <li>criteria</li>
              </div>
            </div>
            
            <div class="accordion-item">
              <div class="accordion-header">
                <h3>The Little Big Deal Award</h3>
                <div class="accordion-icon">
                  <span class="arrow"></span>
                </div>
              </div>
              <div class="accordion-content">
                <h4>BEST MICRO INTERACTION</h4>
                <p>This is your chance to show off your favourite buttons!
                </p>
                <ul class="award-details">
                    <li>criteria</li>
                    <li>criteria</li>
                    <li>criteria</li>
                    <li>criteria</li>
                    <li>criteria</li>
              </div>
            </div>
          </div>

                <!-- redirection -->
          <h2 class="section-title">See Also:</h2>
          <x-section.cards-section hiddenAward="ux" />
      

    <!-- Footer -->
    <footer>
        <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    @vite('resources/js/award-categories.js')
</body>
</html>