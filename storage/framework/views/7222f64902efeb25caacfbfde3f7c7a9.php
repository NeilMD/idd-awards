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
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/ignite.css'); ?>
  </head>
  <body>
    <!-- nav -->
    <nav>
      <a href="<?php echo e(url('/')); ?>"
        ><img src="<?php echo e(Vite::asset('resources/img/Asset 8.png')); ?>" class="logo" id="logo" data-hover-logo="<?php echo e(Vite::asset('resources/img/logo-hover.png')); ?>"
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
    <section class="hero ignite-award-hero">
      <div class="overlay"></div>
      <h1 class="title">THE IGNITE AWARD</h1>
    </section>

    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/scripts.js'); ?>
  </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/idd/awards/resources/views/ignite-awards.blade.php ENDPATH**/ ?>