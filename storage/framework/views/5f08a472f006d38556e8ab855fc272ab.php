<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Time Capsule</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />


    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/styles.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/time-capsule.css'); ?>
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
        <a href="<?php echo e(url('time-capsule')); ?>" class="active">Time Capsule</a>
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
      <h1 class="title">TIME CAPSULE</h1>
      <p class="hero-subtitle">
        Submit your favourite design to be preserved in the IGNITE digital time
        capsule.
      </p>
    </section>

    <!--submissions-->
    <section class="submission-section">
      <div class="container">
        <h2 class="section-title">Add Your Design</h2>
        <p class="section-description">
          Share a photo of your proudest design. It will be displayed in the
          gallery below.
        </p>

        <form enctype="multipart/form-data" data-attr-submit="<?php echo e(url('/time-capsule/submit')); ?>" id="submission-form" class="memory-form">
          <div class="form-group">
            <label for="submitter-name">Your Name</label>
            <input
              type="text"
              id="submitter-name"
              name="submitter-name"
              required
            />
          </div>

          <div class="form-group">
            <label for="memory-title">Design Title</label>
            <input type="text" id="memory-title" name="memory-title" required />
          </div>

          <div class="form-group">
            <label for="memory-description">Description</label>
            <textarea
              id="memory-description"
              name="memory-description"
              rows="3"
            ></textarea>
          </div>

          <div class="form-group file-upload-container">
            <label for="memory-image" class="file-upload-label">
              <div class="upload-icon">+</div>
              <span>Choose an image</span>
            </label>
            <input
              type="file"
              id="memory-image"
              name="memory-image"
              accept="image/*"
              required
            />
            <div id="image-preview" class="image-preview">
              <img id="preview-img" src="#" alt="Preview" />
              <button type="button" id="remove-image" class="remove-image-btn">
                ×
              </button>
            </div>
          </div>

          <button type="submit" class="submit-btn">Submit Memory</button>
        </form>
      </div>
    </section>

    <!-- gallery -->
    <section class="gallery-section">
      <div class="container">
        <h2 class="section-title">Our Virtual Gallery</h2>
        <p class="section-description">
          Explore designs submitted by fellow students!
        </p>

        <div class="filter-container">
          <button class="filter-btn active" data-filter="all">All</button>
          <button class="filter-btn" data-filter="latest">Latest</button>
          <button class="filter-btn" data-filter="featured">Featured</button>
        </div>

        <div id="gallery-grid" class="gallery-grid">
          <?php $__currentLoopData = $memories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if (isset($component)) { $__componentOriginald05dd3bfc32d1f0c6c3ddd10d9ace994 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald05dd3bfc32d1f0c6c3ddd10d9ace994 = $attributes; } ?>
<?php $component = App\View\Components\MemoriesItem::resolve(['memory' => $memory] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('memories-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MemoriesItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald05dd3bfc32d1f0c6c3ddd10d9ace994)): ?>
<?php $attributes = $__attributesOriginald05dd3bfc32d1f0c6c3ddd10d9ace994; ?>
<?php unset($__attributesOriginald05dd3bfc32d1f0c6c3ddd10d9ace994); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald05dd3bfc32d1f0c6c3ddd10d9ace994)): ?>
<?php $component = $__componentOriginald05dd3bfc32d1f0c6c3ddd10d9ace994; ?>
<?php unset($__componentOriginald05dd3bfc32d1f0c6c3ddd10d9ace994); ?>
<?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>

    <!-- modal -->
    <div id="memory-modal" class="memory-modal">
      <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-image-container">
          <img id="modal-image" src="" alt="Memory" />
        </div>
        <div class="modal-info">
          <h3 id="modal-title"></h3>
          <p id="modal-submitter"></p>
          <p id="modal-description"></p>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/scripts.js'); ?>
    <script src="<?php echo e(Vite::asset('resources/js/time-capsule.js')); ?>" defer></script>
  </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/idd/awards/resources/views/time-capsule.blade.php ENDPATH**/ ?>