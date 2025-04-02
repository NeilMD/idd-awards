<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Time Capsule</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/styles.css')
    @vite('resources/css/time-capsule.css')
  </head>
  <body>
 
    <!-- nav -->
    <x-section.nav-header active="time-capsule" />

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
   
        <form method="POST" enctype="multipart/form-data" data-attr-submit="{{ url('/time-capsule/submit') }}" id="submission-form" class="memory-form">
          
          <div class="form-group">
            <label for="memory-title">Design Title</label>
            <input type="text" id="memory-title" name="memory-title"
            placeholder="Give your masterpiece a name!" required />
          </div>

          <div class="form-group">
              <label for="category">Design Category</label>
              <select id="category" name="category" required>
                  <option value="" disabled selected>Pick a Category</option>
                  <option value="graphic">Graphic</option>
                  <option value="ux">UX</option>
                  <option value="web">Web</option>
              </select>
          </div>

          <div class="form-group">
            <label for="memory-description">Description</label>
            <textarea
              id="memory-description"
              name="memory-description"
              required
              placeholder="Describe the inspiration, process, and key elements of your masterpiece."
              rows="3"
            ></textarea>
          </div>

         
          <div class="form-group">
            <label for="submitter-name">Designer's Name</label>
            <input
              type="text"
              id="submitter-name"
              name="submitter-name"
              placeholder="Declare your name, trailblazer!"
              required
            />
          </div>
          

          <div id="link-container" class="form-group">
          <label for="link">Related Link (Figma, Website, etc.)</label>
            <input type="url" id="link" name="link" placeholder="Share your link (don’t forget the http:// or https://)!" />
          </div>
          
          

          <div class="form-group">
            <label for="email">SAIT Email Address</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="@edu.sait.ca or @sait.ca only 😤"
              required
            />
          
          </div>

          <div class="form-group file-upload-container">
            <span class="upload-label">Add Your Design</span>
            <label for="memory-image" class="file-upload-label">
              <object type="image/svg+xml" data="{{ Vite::asset('resources/img/arrow_up.svg') }}"></object>
              <span>Upload the Design here</span>
              <sub>Max 2MB • 1 image only</sub>
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


          <button id="submit-memory" type="submit" class="submit-btn">Submit Memory</button>
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
          <button id="all" class="filter-btn active" data-filter="all">All</button>
          <button id="graphic" class="filter-btn" data-filter="graphic">Graphic</button>
          <button id="ux" class="filter-btn" data-filter="ux">UX</button>
          <button id="web" class="filter-btn" data-filter="web">Web</button>
        </div>

        <div id="gallery-section" class="gallery-grid tab-content">
          <x-section.memories :submissions="$submissions"/>
        </div>
        <div id="load-more"></div>
        <input type="hidden" id="next-page-category" value="all">
      <input type="hidden" id="next-page-url" value="{{$submissions->nextPageUrl()}}">
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
          <h4 id="modal-category"></h4>
          <h3 id="modal-title"></h3>
          <p id="modal-submitter"></p>
          <p id="modal-description"></p>
        </div>
      </div>
    </div>

    <!-- modal -->
    <div id="submit-modal" class="memory-modal">
      <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-info">
          <h3 id="submit-title">
            Please Read the Following
          </h3>
          <div id="modal-notes">
          <br/>
          <br/>
            <span><strong>Before your submission is posted, please verify it via the email you will receive.</strong></span>
            <span><strong>If you've submitted previously, your prior submission will be replaced.</strong></span>
            <br/>
            <br/>
            <span>
              Please wait <a href="https://outlook.office.com/mail/" class="note-time" target="_blank">3-5mins</a> for the verification email to arrived. It may arrived on your junk/spam folder! 
            </span>
            <br/>
            <span>
              <small>(dev notes: Please be patient, we dont have dedicated email server. Sorry! 🙇)</small>
            </span>

            <p id="modal-description"></p>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    <script src="{{ Vite::asset('resources/js/time-capsule.js') }}" defer></script>
  </body>
</html>
