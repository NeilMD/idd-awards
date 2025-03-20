<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/styles.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/time-capsule.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/award-categories.css'); ?>
    <link rel="stylesheet" href="./assets/css/gd.css">
</head>
<body>
    <!-- nav -->
    <nav>
      <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(Vite::asset('resources/img/Asset 8.png')); ?>" class="logo" id="logo" data-hover-logo="<?php echo e(Vite::asset('resources/img/logo-hover.png')); ?>"
      /></a>
        <div class="nav-links">
            <a href="<?php echo e(url('/')); ?>">Home</a>
            <a href="<?php echo e(url('awards')); ?>">Awards</a>
            <!-- <a href="#">Nominees</a> -->
            <a href="<?php echo e(url('time-capsule')); ?>">Time Capsule</a>
        </div>
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <button class="contact-btn">Contact</button>
    </nav>
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
        <h3>The Print Isn't Dead! Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST PRINTED MATERIALS</h4>
        <p>A.K.A the "Brian's favourite" Award.
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
        <h3>The Motion Graphics G.O.A.T. Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST MOTION GRAPHICS</h4>
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
        <h3>The Hierarchical Harmony Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>EXCELLENT LAYOUT DESIGN</h4>
        <p>Description</p>
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
        <h3>The DIGI Pro Award</h3>
        <div class="accordion-icon">
          <span class="arrow"></span>
        </div>
      </div>
      <div class="accordion-content">
        <h4>BEST DIGITAL IMAGE</h4>
        <p>Description</p>
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
  <section class="cards-section">
      <div class="cards-container">
          <div class="card">
              <a href="<?php echo e(url('ignite-awards')); ?>"><img src="<?php echo e(Vite::asset('resources/img/IGNITE@3x.png')); ?>" alt="Award Category" class="card-img"></a>
              <div class="card-content">
                  <h2 class="card-title">The IGNITE Award</h2>
                  <p class="card-text">See criteria for the IGNITE award. Student and Instructor voted!</p>
              </div>
          </div>
          <div class="card">
              <a href="<?php echo e(url('user-experience')); ?>"><img src="<?php echo e(Vite::asset('resources/img/UX@3x.png')); ?>" alt="Award Category" class="card-img"></a>
              <div class="card-content">
                  <h2 class="card-title">User Experience</h2>
                  <p class="card-text">See criteria for all UX awards. Applicants must be UX Majors.</p>
              </div>
          </div>
          <div class="card">
              <a href="<?php echo e(url('web-development')); ?>"><img src="<?php echo e(Vite::asset('resources/img/WEB@3x.png')); ?>" alt="Award Category" class="card-img"></a>
              <div class="card-content">
                  <h2 class="card-title">Web Development</h2>
                  <p class="card-text">See criteria for all Web awards. Applicants must be Web Dev Majors.</p>
              </div>
          </div>
          <div class="card">
              <a href="<?php echo e(url('general-awards')); ?>"><img src="<?php echo e(Vite::asset('resources/img/GEN@3x.png')); ?>" alt="Award Category" class="card-img"></a>
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

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/scripts.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/award-categories.js'); ?>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/idd/awards/resources/views/graphic-design.blade.php ENDPATH**/ ?>