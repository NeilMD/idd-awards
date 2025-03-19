<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/styles.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/time-capsule.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/award-categories.css'); ?>
  </head>
  <body>
    <!-- nav -->
    <nav>
      <a href="<?php echo e(url('/')); ?>"
        ><img src="<?php echo e(Vite::asset('resources/img/Asset 8.png')); ?>" class="logo" id="logo"
      /></a>
      <div class="nav-links">
        <a href="<?php echo e(url('/')); ?>">Home</a>
        <a href="<?php echo e(url('awards')); ?>" class="active">Awards</a>
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
    <section class="hero time-capsule-hero">
      <div class="overlay"></div>
      <h1 class="title">AWARD CATEGORIES</h1>
    </section>

    <!-- cards -->
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
<?php /**PATH /Applications/MAMP/htdocs/idd/awards/resources/views/awards.blade.php ENDPATH**/ ?>