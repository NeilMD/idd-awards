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
    <?php if (isset($component)) { $__componentOriginal5caa43e57eb10ef851fb3545bb508994 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5caa43e57eb10ef851fb3545bb508994 = $attributes; } ?>
<?php $component = App\View\Components\Section\NavHeader::resolve(['active' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Section\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5caa43e57eb10ef851fb3545bb508994)): ?>
<?php $attributes = $__attributesOriginal5caa43e57eb10ef851fb3545bb508994; ?>
<?php unset($__attributesOriginal5caa43e57eb10ef851fb3545bb508994); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5caa43e57eb10ef851fb3545bb508994)): ?>
<?php $component = $__componentOriginal5caa43e57eb10ef851fb3545bb508994; ?>
<?php unset($__componentOriginal5caa43e57eb10ef851fb3545bb508994); ?>
<?php endif; ?>

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
    <?php if (isset($component)) { $__componentOriginal9e680dc6fad0fb46d3de6c315af2d7f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e680dc6fad0fb46d3de6c315af2d7f0 = $attributes; } ?>
<?php $component = App\View\Components\Section\CardSection::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section.cards-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Section\CardSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e680dc6fad0fb46d3de6c315af2d7f0)): ?>
<?php $attributes = $__attributesOriginal9e680dc6fad0fb46d3de6c315af2d7f0; ?>
<?php unset($__attributesOriginal9e680dc6fad0fb46d3de6c315af2d7f0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e680dc6fad0fb46d3de6c315af2d7f0)): ?>
<?php $component = $__componentOriginal9e680dc6fad0fb46d3de6c315af2d7f0; ?>
<?php unset($__componentOriginal9e680dc6fad0fb46d3de6c315af2d7f0); ?>
<?php endif; ?>
    
    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/scripts.js'); ?>
  </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/idd/awards/resources/views/index.blade.php ENDPATH**/ ?>