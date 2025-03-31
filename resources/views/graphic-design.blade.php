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
    @vite('resources/css/gd.css')
</head>
<body>
    <!-- nav -->
    <x-section.nav-header active="awards" />
      <!--hero-->
    <section class="hero gd-hero">
      <div class="overlay"></div>
      <h1 class="title"> GRAPHIC DESIGN AWARDS</h1>
    </section>

    <!-- Accordion Categories -->
    <div class="accordion-container">
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Brand Identity Icon Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST BRAND IDENTITY</h4>
        <ul class="award-details">
            <li>A strong and robust brand identity</li>
            <li>Demonstrates a clear understanding of branding principles.</li>
            <li>Easily translates across different applications.</li>
      </div>
    </div>
    
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Print Isn't Dead! Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST PRINTED MATERIALS</h4>
        <ul class="award-details">
            <li>Demonstrates layout and typography best practices for print.</li>
            <li>Document is set up to print in a way that is best fit to your choice of media.</li>
      </div>
    </div>
    
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Captivating Commercial Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST VIDEO COMMERCIAL</h4>
        <ul class="award-details">
            <li>An engaging and captivating short-form video commercial.</li>
            <li>Demonstrates strong storytelling, and alignment with the brand's messaging.</li>
      </div>
    </div>
    
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The Hierarchical Harmony Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>EXCELLENT LAYOUT DESIGN</h4>
        <ul class="award-details">
            <li>Files submitted can be digital or intended for print.</li>
            <li>Demonstrates excellent use of composition and visual hierachy.</li>
      </div>
    </div>
    
    <div class="accordion-item">
      <div class="accordion-header">
        <h3>The DIGI Pro Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST DIGITAL IMAGE</h4>
        <ul class="award-details">
            <li>Submissions can be: Photography, a composite image, or an AR/VR experience.</li>
            <li>Work showcases strong visual storytelling and technical execution.</li>
      </div>
    </div>
    </div>

    <x-section.cta-section page="awards"/>

    <!-- redirection -->
    <h2 class="section-title">See Also:</h2>
    <x-section.cards-section hiddenAward="graphic-design" />


    <!-- Footer -->
    <footer>
        <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    @vite('resources/js/award-categories.js')
</body>
</html>