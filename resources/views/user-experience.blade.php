<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGNITE Awards</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css">
    @vite('resources/css/styles.css')
    @vite('resources/css/award-categories.css')
    @vite('resources/css/ux.css')
</head>
<body>
    <!-- nav -->
    <x-section.nav-header active="awards" />
       <!--hero-->
       <section class="hero ux-hero">
        <div class="overlay"></div>
        <h1 class="title"> USER EXPERIENCE AWARDS</h1>
        <h2 class="title"> NOMINEES</h2>
    </section>

    <!-- Accordion Categories -->
    <!-- REMOVE 04/15 For Nominees -->
     
    <!-- <div class="accordion-container">
          <div class="accordion-item">
            <div class="accordion-header">
              <h3>The HI-FI High-Five Award</h3>
              <div class="accordion-icon">
                <span class="arrow"></span>
              </div>
            </div>
            <div class="accordion-content">
              <h4>BEST HIGH FIDELITY MOCKUP</h4>
              <ul class="award-details">
                  <li>A visually refined and functional high-fidelity UI Design.</li>
                  <li>Demonstrates strong attention to detail and intuitive usability.</li>
            </div>
          </div>
          
          <div class="accordion-item">
            <div class="accordion-header">
              <h3>The Innovator Extraordinaire Award</h3>
              <div class="accordion-icon">
                <span class="arrow"></span>
              </div>
            </div>
            <div class="accordion-content">
              <h4>MOST INNOVATIVE PROBLEM SOLVING</h4>
              <ul class="award-details">
                  <li>Creatively tackles a unique UX challenge.</li>
                  <li>Demonstrates user centred design principles, and strong research.</li>
            </div>
          </div>
          
          <div class="accordion-item">
            <div class="accordion-header">
              <h3>The Design System Vanguard Award</h3>
              <div class="accordion-icon">
                <span class="arrow"></span>
              </div>
            </div>
            <div class="accordion-content">
              <h4>BEST DESIGN SYSTEM</h4>
              <ul class="award-details">
                  <li>A well organized and scalable design system.</li>
                  <li>Strong collection of UI components, typography, and colour guidelines.</li>
                  <li>Documentation that supports a cohesive digital experience.</li>
            </div>
          </div>
          
          <div class="accordion-item">
            <div class="accordion-header">
              <h3>The Sick Flow Award</h3>
              <div class="accordion-icon">
                <span class="arrow"></span>
              </div>
            </div>
            <div class="accordion-content">
              <h4>BEST USER FLOW</h4>
              <ul class="award-details">
                  <li>Submissions should include no more than 5 user flows.</li>
                  <li>Showcases clear interaction patterns and logical design decisions, creating a seamless user experience.</li>
            </div>
          </div>
          
          <div class="accordion-item">
            <div class="accordion-header">
              <h3>The Little Big Deal Award</h3>
              <div class="accordion-icon">
                <span class="arrow"></span>
              </div>
            </div>
            <div class="accordion-content">
              <h4>BEST MICRO INTERACTION</h4>
              <ul class="award-details">
                  <li>The most well-designed and engaging micro-interaction.</li>
                  <li>Submissions can be hover states, button animations, loading effects, or any small 
                    interactive UI elements that enhance user experience.</li>
            </div>
          </div>
    </div> -->

    <h2 class="nom-section-title"><b>Design System Vanguard</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
          <div class="nom-card">
              <div class="card-content">
                  <h3 class="card-title">Jason's Sticker Club</h3>
                  <h2 class="card-title">Ronald Atutubo</h2>
                  <h2 class="card-title">Tina Le</h2>
                  <h2 class="card-title">Aleksandr Brudnyi</h2>
                  <h2 class="card-title">Aaron Nicor</h2>
                  <h2 class="card-title">Chris Nicdao</h2>
                  <h2 class="card-title">Briana Truong</h2>
                </div>
          </div>
          <div class="nom-card">
            <div class="card-content">
                <h3 class="card-title">Crypta: Designing an Intuitive Signup Flow for Crypto</h3>
                <h2 class="card-title">Hoi Yan Cheng, Yanny</h2>
            </div>
          </div>
          <div class="nom-card">
            <div class="card-content">
              <h3 class="card-title">Be Sober</h3>
                <h2 class="card-title">Elena Napolskikh</h2>
              </div>
          </div>
        </div>
    </section>
    
    <h2 class="nom-section-title"><b>Sick Flow!</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
        <div class="nom-card">
            <div class="card-content">
                <h3 class="card-title">Be Sober</h3>
                <h2 class="card-title">Elena Napolskikh</h2>
              </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Crypta</h3>
              <h2 class="card-title">Kayla Nikpour</h2>
          </div>
        </div>
      </div>
    </section>
    
    <h2 class="nom-section-title"><b>Hi-Fi High-Five</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Crypta: Designing an Intuitive Signup Flow for Crypto</h3>
              <h2 class="card-title">Hoi Yan Cheng, Yanny</h2>
            </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Jason's Sticker Club</h3>
              <h2 class="card-title">Ronald Atutubo</h2>
              <h2 class="card-title">Tina Le</h2>
              <h2 class="card-title">Aleksandr Brudnyi</h2>
              <h2 class="card-title">Aaron Nicor</h2>
              <h2 class="card-title">Chris Nicdao</h2>
              <h2 class="card-title">Briana Truong</h2>
          </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Find Fonts</h3>
              <h2 class="card-title">Irene Doan</h2>
              <h2 class="card-title">Sophie Tran</h2>
            </div>
        </div>
      </div>
    </section>
    
    <h2 class="nom-section-title"><b>Innovator Extraordinaire</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
        <div class="nom-card">
          <div class="card-content">
            <h3 class="card-title">On My Way!</h3>
              <h2 class="card-title">Briana Truong</h2>
              <h2 class="card-title">Tina Le</h2>
              <h2 class="card-title">Jason Ye</h2>
              <h2 class="card-title">Jinseop Kim</h2>
              <h2 class="card-title">Aaron Nicor</h2>
          </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
            <h3 class="card-title">Peek-a-Poop: The Ultimate Washroom Finding App</h3>
              <h2 class="card-title">Hoi Yan Cheng</h2>
              <h2 class="card-title">Yang Yang</h2>
              <h2 class="card-title">Minjeong Jeon</h2>
              <h2 class="card-title">Ka Man Lau</h2>
              <h2 class="card-title">Shubo Zhang</h2>
            </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
              <h3 class="card-title">Sayfe - Dietary Communication Tool</h3>
              <h2 class="card-title">Aaron Nicor</h2>
            </div>
        </div>
      </div>
    </section>
    
    <h2 class="nom-section-title"><b>Little Big Deal</b></h2>
    <section class="nom-cards-section">
      <div class="nom-cards-container">
        <div class="nom-card">
          <div class="card-content">
            <h3 class="card-title">Clothing Filter Menu</h3>
              <h2 class="card-title">Kayla Nikpour</h2>
            </div>
        </div>
        <div class="nom-card">
          <div class="card-content">
            <h3 class="card-title">Steady</h3>
              <h2 class="card-title">Ronald Atutubo</h2>
              <h2 class="card-title">Aleksandr Brudnyi</h2>
            </div>
        </div>
      </div>
    </section>

    <!-- <x-section.cta-section page="awards"/> -->

    <!-- redirection -->
    <h2 class="section-title">See Also:</h2>
    <x-section.cards-section hiddenAward="ux" />
      

    <!-- Footer -->
    <footer>
        <p>IGNITE 2025. All Rights Reserved.</p>
    </footer>

    @vite('resources/js/scripts.js')
    @vite('resources/js/award-categories.js')
</body>
</html>