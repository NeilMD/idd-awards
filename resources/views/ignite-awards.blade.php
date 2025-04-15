<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/styles.css')
    @vite('resources/css/award-categories.css')
    @vite('resources/css/ignite.css')
  </head>
  <body>
    <!-- nav -->
    <x-section.nav-header active="awards" />
    <!--hero-->
    <section class="hero ignite-award-hero">
      <div class="overlay"></div>
      <h1 class="title">THE IGNITE AWARD</h1>
      <h2 class="title"> NOMINEES</h2>
    </section>

    <div class="student-votes">
      <h1>Student Voted Awards</h1>
    </div>
    <h2 class="nom-section-title">Coming Soon!</h2>

    <!-- REMOVE 04/15 For Nominees -->
<!-- 
    <div class="student-votes">
           <h1>Student Voted Awards</h1>
    </div>
    <div class="accordion-container">

    <div class="accordion-item">
        <div class="accordion-header">
          <h3>IGNITE - Graphic Design & Digital Media</h3>
          <div class="accordion-icon">
            <span class="arrow"></span>
          </div>
        </div>
        <div class="accordion-content">
          <h4>IGNITE AWARD FOR BEST OVERALL GRAPHIC DESIGN & DIGITAL MEDIA</h4>
          <ul class="award-details">
              <li>Who do you think consistently produces outstanding work in branding, print,
                digital design, or multimedia?
              </li>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <h3>IGNITE - UI & UX</h3>
          <div class="accordion-icon">
            <span class="arrow"></span>
          </div>
        </div>
        <div class="accordion-content">
          <h4>IGNITE AWARD FOR BEST OVERALL USER INTERFACE AND EXPERIENCE DESIGN</h4>
          <ul class="award-details">
              <li>Who have you seen demonstrate exceptional UI & UX skills- from research, to
                wireframing, to high-fidelity prototyping and user testing?
              </li>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <h3>IGNITE - Web Design & Development</h3>
          <div class="accordion-icon">
            <span class="arrow"></span>
          </div>
        </div>
        <div class="accordion-content">
          <h4>IGNITE AWARD FOR BEST WEB DESIGN AND DEVELOPMENT</h4>
          <ul class="award-details">
              <li>Who do you thing has showcased the strongest skills in web design, 
                front-end development, or back-end development?</li>
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
      <ul class="award-details">
          <li>Which student has the patience, leadership, 
            and expertise that would make them an amazing future Instructor?</li>
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
      <ul class="award-details">
          <li>Who has shown excellent leadership and organizational skills 
            when managing projects and teams?</li>
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
      <ul class="award-details">
          <li>Who has been the most supportive, collaborative, and positive contributor in group work?</li>
    </div>
  </div>
    </div> -->

    <!-- <x-section.cta-section page="ignite"/> -->

    <!-- redirection -->
    <h2 class="section-title">See Also:</h2>
    <x-section.cards-section hiddenAward="ignite" />

    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    @vite('resources/js/award-categories.js')
  </body>
</html>
