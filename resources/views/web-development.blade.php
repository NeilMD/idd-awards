<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNITE Awards</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/styles.css')
    @vite('resources/css/award-categories.css')
    @vite('resources/css/wd.css')
</head>
<body>
    <!-- nav -->
    <x-section.nav-header active="awards" />
       <!--hero-->
       <section class="hero web-hero">
        <div class="overlay"></div>
        <h1 class="title"> WEB DEV AWARDS</h1>
        <h2 class="title"> NOMINEES</h2>
    </section>

   
    <!-- Accordion Categories-->
    <!-- REMOVE 04/15 For Nominees -->
     
    <!-- <div class="accordion-container">
        <div class="accordion-item">
          <div class="accordion-header">
            <h3>The Business Byte Brilliance Award</h3>
            <div class="accordion-icon">
              <span class="arrow"></span>
            </div>
          </div>
          <div class="accordion-content">
            <h4>BEST BUSINESS BASED WEBSITE</h4>
            <ul class="award-details">
              <li>A professionally designed and developed website for a business.</li>
              <li>Utilizes strong branding, usability, and technical execution.</li>
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
            <ul class="award-details">
              <li>Submissions can be a personal portfolio, blog, or other self-promotional website.</li>
              <li>Showcases outstanding storytelling, visual appeal, and UX.</li>
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
            <ul class="award-details">
              <li>A well structured and efficient database that supports an interactive web experience or application.</li>
              <li>Showcases a well-thought-out schema, security, and performance.</li>
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
            <ul class="award-details">
              <li>The most functional and user-friendly web application.</li>
              <li>Effectively integrates front-end and back-end development to create the tool or service.</li>
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
            <h4>MOST CONSISTENT CONTRIBUTIONS TO GITHUB</h4>
            <ul class="award-details">
              <li>Awarded to the student with the most active and consistent contributions to coding projects on GitHub.</li>
          </div>
        </div>
    </div> -->

    <h2 class="nom-section-title"><b>Fire Personal Site</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
        <div class="nom-card">
            <div class="card-content">
                <h3 class="card-title">Portfolio</h3>
                <h2 class="card-title">Neil Capistrano</h2>
            </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Yanny Cheng personal portfolio site</h3>
              <h2 class="card-title">Hoi Yan Cheng, Yanny</h2>
          </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
            <h3 class="card-title">Linspired - My portfolio website</h3>
              <h2 class="card-title">Austin Lin</h2>
          </div>
        </div>
      </div>
    </section>

    <h2 class="nom-section-title"><b>Business Byte Brilliance</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Bamboo TCMA Massage Clinic Website</h3>
              <h2 class="card-title">Austin Lin</h2>
          </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">BeatCurrent</h3>
              <h2 class="card-title">Neil Capistrano</h2>
              <h2 class="card-title">Sueun Choi</h2>
              <h2 class="card-title">Matthew Sperling</h2>
          </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Night Sparrow</h3>
              <h2 class="card-title">Neil Capistrano</h2>
              <h2 class="card-title">Sueun Choi</h2>
              <h2 class="card-title">Matthew Sperling</h2>
          </div>
        </div>
      </div>
    </section>

    <h2 class="nom-section-title"><b>Browser Breakthrough</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Academix</h3>
              <h2 class="card-title">Neil Capistrano</h2>
              <h2 class="card-title">Sueun Choi</h2>
              <h2 class="card-title">Milan Djordjevic</h2>
              <h2 class="card-title">Matthew Sperling</h2>
            </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">BeatCurrent</h3>
              <h2 class="card-title">Neil Capistrano</h2>
              <h2 class="card-title">Sueun Choi</h2>
              <h2 class="card-title">Matthew Sperling</h2>
          </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Portfolio Portal</h3>
              <h2 class="card-title">Neil Capistrano</h2>
              <h2 class="card-title">Sueun Choi</h2>
          </div>
        </div>
      </div>
    </section>

    <!-- <x-section.cta-section page="awards"/> -->

    <!-- redirection -->
    <h2 class="section-title">See Also:</h2>
    <x-section.cards-section hiddenAward="web" />

    <!-- Footer -->
    <footer>
        <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    @vite('resources/js/award-categories.js')
</body>
</html>