<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    <!-- Load Compiled CSS -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/styles.css']); ?>
  </head>
  <body>
    <!-- nav -->
    <nav>
      <a href="<?php echo e(url('/')); ?>"
        ><img src="<?php echo e(Vite::asset('resources/img/Asset 8.png')); ?>" class="logo" id="logo" data-hover-logo="<?php echo e(Vite::asset('resources/img/logo-hover.png')); ?>"
      /></a>
      <div class="nav-links">
        <a href="<?php echo e(url('/')); ?>" class="active">Home</a>
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

    <!-- hero -->
    <section class="hero">
      <video class="video-bg" autoplay muted loop>
        <source src="<?php echo e(Vite::asset('resources/video/Website Gradient.mp4')); ?>" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <div class="overlay"></div>
      <h1 class="title">IGNITE</h1>
      <h1 class="year">2025</h1>
      <div class="hero-buttons">
        <button class="hero-btn">Get Tickets</button>
        <button class="hero-btn">Learn More</button>
      </div>
    </section>

    <!-- cards -->
    <h2 class="section-title">Award Categories</h2>
    <section class="cards-section">
      <div class="cards-container">
        <div class="card">
          <a href="<?php echo e(url('ignite-awards')); ?>"
            ><img
              src="<?php echo e(Vite::asset('resources/img/IGNITE@3x.png')); ?>"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">The IGNITE Award</h2>
            <p class="card-text">
              See criteria for the IGNITE award. Student and Instructor voted!
            </p>
          </div>
        </div>
        <div class="card">
          <a href="<?php echo e(url('graphic-design')); ?>"
            ><img
              src="<?php echo e(Vite::asset('resources/img/IGNITE@3x.png')); ?>"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">Graphic Design</h2>
            <p class="card-text">
              See criteria for all Graphic Design awards. Applicants must be
              Graphic Design Majors.
            </p>
          </div>
        </div>
        <div class="card">
          <a href="<?php echo e(url('user-experience')); ?>"
            ><img
              src="<?php echo e(Vite::asset('resources/img/UX@3x.png')); ?>"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">User Experience</h2>
            <p class="card-text">
              See criteria for all UX awards. Applicants must be UX Majors.
            </p>
          </div>
        </div>
        <div class="card">
          <a href="<?php echo e(url('web-development')); ?>"
            ><img
              src="<?php echo e(Vite::asset('resources/img/WEB@3x.png')); ?>"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">Web Development</h2>
            <p class="card-text">
              See criteria for all Web awards. Applicants must be Web Dev
              Majors.
            </p>
          </div>
        </div>
        <div class="card">
          <a href="<?php echo e(url('general-awards')); ?>"
            ><img
              src="<?php echo e(Vite::asset('resources/img/GEN@3x.png')); ?>"
              alt="Award Category"
              class="card-img"
          /></a>
          <div class="card-content">
            <h2 class="card-title">General</h2>
            <p class="card-text">
              See criteria for general awards. Open to all applicants!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/scripts.js'); ?>
  </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/idd/awards/resources/views/index.blade.php ENDPATH**/ ?>