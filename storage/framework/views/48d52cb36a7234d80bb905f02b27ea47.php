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

      <?php if (isset($component)) { $__componentOriginale6ac1e2f6d29663be186c7ee15898f86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86 = $attributes; } ?>
<?php $component = App\View\Components\AwardsItem::resolve(['pageUrl' => url('ignite-awards'),'imageUrl' => Vite::asset('resources/img/IGNITE@3x.png'),'awardTitle' => 'The IGNITE Award','awardText' => 'See criteria for the IGNITE award. Student and Instructor voted!'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('awards-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AwardsItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $attributes = $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $component = $__componentOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>

      <?php if (isset($component)) { $__componentOriginale6ac1e2f6d29663be186c7ee15898f86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86 = $attributes; } ?>
<?php $component = App\View\Components\AwardsItem::resolve(['pageUrl' => url('graphic-design'),'imageUrl' => Vite::asset('resources/img/IGNITE@3x.png'),'awardTitle' => 'Graphic Design','awardText' => 'See criteria for all Graphic Design awards. Applicants must be
              Graphic Design Majors.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('awards-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AwardsItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $attributes = $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $component = $__componentOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>

      <?php if (isset($component)) { $__componentOriginale6ac1e2f6d29663be186c7ee15898f86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86 = $attributes; } ?>
<?php $component = App\View\Components\AwardsItem::resolve(['pageUrl' => url('user-experience'),'imageUrl' => Vite::asset('resources/img/UX@3x.png'),'awardTitle' => 'User Experience','awardText' => 'See criteria for all UX awards. Applicants must be UX Majors.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('awards-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AwardsItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $attributes = $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $component = $__componentOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>

      <?php if (isset($component)) { $__componentOriginale6ac1e2f6d29663be186c7ee15898f86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86 = $attributes; } ?>
<?php $component = App\View\Components\AwardsItem::resolve(['pageUrl' => url('web-development'),'imageUrl' => Vite::asset('resources/img/WEB@3x.png'),'awardTitle' => 'Web Development','awardText' => 'See criteria for all Web awards. Applicants must be Web Dev
              Majors.'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('awards-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AwardsItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $attributes = $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $component = $__componentOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>

      <?php if (isset($component)) { $__componentOriginale6ac1e2f6d29663be186c7ee15898f86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86 = $attributes; } ?>
<?php $component = App\View\Components\AwardsItem::resolve(['pageUrl' => url('general-awards'),'imageUrl' => Vite::asset('resources/img/GEN@3x.png'),'awardTitle' => 'General','awardText' => 'See criteria for general awards. Open to all applicants!'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('awards-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AwardsItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $attributes = $__attributesOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__attributesOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86)): ?>
<?php $component = $__componentOriginale6ac1e2f6d29663be186c7ee15898f86; ?>
<?php unset($__componentOriginale6ac1e2f6d29663be186c7ee15898f86); ?>
<?php endif; ?>
        
              
      
       
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