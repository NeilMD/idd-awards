<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css">
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    @vite('resources/css/styles.css')
    @vite('resources/css/award-categories.css')
    @vite('resources/css/gen.css')
</head>
<body>
    <!-- nav -->
    <x-section.nav-header active="awards" />
       <!--hero-->
       <section class="hero gen-hero">
        <div class="overlay"></div>
        <h1 class="title"> IMPACT AWARDS</h1>
    </section>

    <!-- Accordion Categories -->
    <div class="accordion-container">
        <div class="accordion-item">
          <div class="accordion-header">
            <h3>The Inclusivity Champion Award</h3>
            <div class="accordion-icon">
              <span class="arrow"></span>
            </div>
          </div>
          <div class="accordion-content">
            <h4>MOST INCLUSIVE DESIGN</h4>
            <ul class="award-details">
                <li>A project that prioritizes accessibility and inclusivity, ensuring that all users, regardless 
                  of background or disability, can engage with and use the design effectively.
                </li>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-header">
            <h3>The A11Y All-Star Award</h3>
            <div class="accordion-icon">
              <span class="arrow"></span>
            </div>
          </div>
          <div class="accordion-content">
            <h4>MOST ACCESSIBLE DESIGN</h4>
            <ul class="award-details">
                <li>A project that demonstrates oustanding accessibility considerations, ensuring inclusivity
                  for users with disabilities.
                </li>
                <li>Showcases outstanding contrast, readability, keyboard navigation, assistive technology compatibility,
                  and overall usability for diverse audiences.
                </li>
          </div>
        </div>
    </div>

    <div class="cta">
      <button class="cta-btn" href="https://www.showpass.com/sait-ignite-awards-2025/">Submit your work!</button>
    </div>

    <!-- redirection -->
    <h2 class="section-title">See Also:</h2>
    <x-section.cards-section hiddenAward="impact" />

    <!-- Footer -->
    <footer>
        <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    @vite('resources/js/award-categories.js')
</body>
</html>