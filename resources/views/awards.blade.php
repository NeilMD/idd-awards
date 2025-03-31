<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGNITE Awards</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    @vite('resources/css/styles.css')
    @vite('resources/css/award-categories.css')
  </head>
  <body>
    <!-- nav -->
    <x-section.nav-header active="awards" />
    <!--hero-->
    <section class="hero time-capsule-hero">
      <div class="overlay"></div>
      <h1 class="title">AWARD CATEGORIES</h1>
    </section>

    <!-- cards -->
    <x-section.cards-section  />

    <!-- Footer -->
    <footer>
      <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
  </body>
</html>
