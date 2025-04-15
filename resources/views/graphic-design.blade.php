<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css">
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <h2 class="title"> NOMINEES</h2>
    </section>

    <!-- Accordion Categories -->
     <!-- REMOVE 04/15 For Nominees -->
    <!-- <div class="accordion-container">
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
    </div> -->

    <h2 class="nom-section-title"><b>Brand Identity Icon</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
          <div class="nom-card">
              <div class="card-content">
                  <h3 class="card-title">Donut Disturb</h3>
                  <h2 class="card-title">Zaki Castillo</h2>
              </div>
          </div>
          <div class="nom-card">
          <div class="card-content">
                <h3 class="card-title">Hidden Corner Coffee Branding Design</h3>
                <h2 class="card-title">Shubo Zhang</h2>
            </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
            <h3 class="card-title">Luna Clara</h3>
              <h2 class="card-title">Brody Richards</h2>
          </div>
      </div>
      </div>
  </section>

  <h2 class="nom-section-title"><b>Print Isn't Dead!</b></h2>
  <section class="nom-cards-section">
    <div class="nom-cards-container">
      <div class="nom-card">
        <div class="card-content">
              <h3 class="card-title">Grooveyglide</h3>
              <h2 class="card-title">Shubo Zhang</h2>
          </div>
      </div>
      <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">PAPA Noodles Design and Marketing Campaign</h3>
              <h2 class="card-title">Becky Li</h2>
          </div>
      </div>
      <div class="nom-card">
        <div class="card-content">
            <h3 class="card-title">Taste of Seoul - Mama Seoul</h3>
            <h2 class="card-title">Jessabelle Lau Suba</h2>

        </div>
      </div>
    </div>
  </section>

  <h2 class="nom-section-title"><b>Captivating Commercial</b></h2>
  <section class="nom-cards-section">
    <div class="nom-cards-container">
      <div class="nom-card">
        <div class="card-content">
            <h3 class="card-title">Kooke Commercial</h3>
            <h1 class="card-title">Kooke Crew</h1>
            <h2 class="card-title">Rain Aclao</h2>
            <h2 class="card-title">Meriele Anne Aberca</h2>
              <h2 class="card-title">Emma Dirks</h2>
              <h2 class="card-title">Sajida Aboudaye</h2>
        </div>
      </div>
      <div class="nom-card">
        <div class="card-content">
            <h3 class="card-title">Valora</h3>
            <h2 class="card-title">Kayla Nikpour</h2>
            <h2 class="card-title">Jessabelle Lau Suba</h2>
            <h2 class="card-title">Olivia Baychu</h2>
            <h2 class="card-title">Maria Nefulda</h2>
        </div>
      </div>
      <div class="nom-card">
        <div class="card-content">
            <h3 class="card-title">Whoppee Waffles</h3>
            <h2 class="card-title">Ronald Atutubo</h2>
            <h2 class="card-title">Tina Le</h2>
            <h2 class="card-title">Chris Nicdao</h2>
            <h2 class="card-title">Briana Truong</h2>
        </div>
      </div>
    </div>
  </section>

  <h2 class="nom-section-title"><b>Hierarchical Harmony</b></h2>
  <section class="nom-cards-section">
    <div class="nom-cards-container">
      <div class="nom-card">
        <div class="card-content">
          <h3 class="card-title">Love and Thunder</h3>
            <h2 class="card-title">Zaki Castillo</h2>
        </div>
      </div>
      <div class="nom-card">
        <div class="card-content">
          <h3 class="card-title">Sabrina Carpenter Typographic Portrait</h3>
            <h2 class="card-title">Rain Aclao</h2>
        </div>
      </div>
      <div class="nom-card">
        <div class="card-content">
            <h3 class="card-title">Typography Caricature</h3>
            <h2 class="card-title">Leo Bitterman</h2>
        </div>
      </div>
    </div>
  </section>

  <h2 class="nom-section-title"><b>DIGI Pro</b></h2>
  <section class="nom-cards-section">
    <div class="nom-cards-container">
      <div class="nom-card">
        <div class="card-content">
          <h3 class="card-title">Eight Ball Series</h3>
            <h2 class="card-title">Kenny Robstad</h2>
        </div>
      </div>
      <div class="nom-card">
        <div class="card-content">
          <h3 class="card-title">Streamer Package - Character Thumbnail</h3>
            <h2 class="card-title">Jason Ye</h2>
        </div>
      </div>
      <div class="nom-card">
        <div class="card-content">
          <h3 class="card-title">The Planet of the Cyber </h3>
            <h2 class="card-title">Shubo Zhang</h2>
        </div>
      </div>
    </div>
  </section>

    <!-- <x-section.cta-section page="awards"/> -->

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