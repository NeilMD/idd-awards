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
    @vite('resources/css/gen.css')
</head>
<body>
    <!-- nav -->
    <x-section.nav-header active="awards" />
       <!--hero-->
       <section class="hero gen-hero">
        <div class="overlay"></div>
        <h1 class="title"> GENERAL AWARDS</h1>
    </section>

    <!-- Accordion Categories -->
    <div class="accordion-container">
      <div class="accordion-item">
        <div class="accordion-header">
          <h3>The Inslusivity Champion Award</h3>
          <div class="accordion-icon">
            <span class="arrow"></span>
          </div>
        </div>
        <div class="accordion-content">
          <h4>MOST INCLUSIVE DESIGN</h4>
          <p>Do you run your designs through millions of accessibility checkers before passoff? This might just be the award for you.
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
          <h3>The Future Instructor Award</h3>
          <div class="accordion-icon">
            <span class="arrow"></span>
          </div>
        </div>
        <div class="accordion-content">
          <h4>MOST LIKELY TO RETURN TO TEACH</h4>
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
          <h3>The Project Management Hero Award</h3>
          <div class="accordion-icon">
            <span class="arrow"></span>
          </div>
        </div>
        <div class="accordion-content">
          <h4>OUTSTANDING PROJECT MANAGEMENT</h4>
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
          <h3>The Async Warrior Award</h3>
          <div class="accordion-icon">
            <span class="arrow"></span>
          </div>
        </div>
        <div class="accordion-content">
          <h4>MOST ASYNCH COMPLETED</h4>
          <p>description</p>
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
          <h3>The Team Player Award</h3>
          <div class="accordion-icon">
            <span class="arrow"></span>
          </div>
        </div>
        <div class="accordion-content">
          <h4>BEST TEAMMATE</h4>
          <p>If you've worked on a team with osmeone who checks all the boxes below, please nominate them for this award!</p>
          <ul class="award-details">
              <li>criteria</li>
              <li>criteria</li>
              <li>criteria</li>
              <li>criteria</li>
              <li>criterias</li>
        </div>
      </div>
    </di>

    <!-- redirection -->
    <h2 class="section-title">See Also:</h2>
    <x-section.cards-section hiddenAward="general" />

    <!-- Footer -->
    <footer>
        <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    @vite('resources/js/award-categories.js')
</body>
</html>