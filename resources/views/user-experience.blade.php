<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNITE Awards</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css">
    @vite('resources/css/styles.css')
    @vite('resources/css/award-categories.css')
    @vite('resources/css/ux.css')
</head>
<body>
    <!-- nav -->
    <x-section.nav-header active="awards" />
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
              <ul class="award-details">
                  <li>A visually refined and functional high-fidelity UI Design.</li>
                  <li>Demonstrates strong attention to detail and intuitive usability.</li>
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
              <ul class="award-details">
                  <li>Creatively tackles a unique UX challenge.</li>
                  <li>Demonstrates user centred design principles, and strong research.</li>
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
              <ul class="award-details">
                  <li>A well organized and scalable design system.</li>
                  <li>Strong collection of UI components, typography, and colour guidelines.</li>
                  <li>Documentation that supports a cohesive digital experience.</li>
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
              <ul class="award-details">
                  <li>Submissions should include no more than 5 user flows.</li>
                  <li>Showcases clear interaction patterns and logical design decisions, creating a seamless user experience.</li>
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
              <ul class="award-details">
                  <li>The most well-designed and engaging micro-interaction.</li>
                  <li>Submissions can be hover states, button animations, loading effects, or any small 
                    interactive UI elements that enhance user experience.</li>
            </div>
          </div>
    </div>

    <div class="cta">
      <button class="cta-btn" href="https://www.showpass.com/sait-ignite-awards-2025/">Submit your work!</button>
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