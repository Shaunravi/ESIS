<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>echocraft</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@300;400;500;700&family=Oswald:wght@600&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="#" class="logo">EchoCrafts</a>
      </h1>

      <select name="language" class="lang-switch">

        <option value="english">English</option>
        <option value="french">French</option>
        <option value="spanish">Spanish</option>

      </select>

      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">Wildvine</a>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>
              <span>Home</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>
              <span>About</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#service" class="navbar-link" data-nav-link>
              <span>Service</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#donate" class="navbar-link" data-nav-link>
              <span>Donate</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#event" class="navbar-link" data-nav-link>
              <span>Event</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>
              <span>Contact</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <div class="header-action">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>
        <a href="../auth/logout.php">
        <button class="btn btn-primary">
          <span>Logout</span>

          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
        </button>
        </a>
      </div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <p class="section-subtitle">
            <img src="./assets/images/subtitle-img-white.png" width="32" height="7" alt="Wavy line">

            <span>Crafting Marketplace</span>
          </p>

          <h2 class="h1 hero-title">
            Echocrafting's Online Bazaar <strong>Handmade Treasures</strong>
          </h2>

          <p class="hero-text">
            Echocrafting: An online platform to buy and sell unique, handmade crafts, connecting artisans and enthusiasts worldwide
          </p>

          <button class="btn btn-primary">
            <span>Donation</span>

            <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features">
        <div class="container">

          <ul class="features-list">

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="shield-checkmark-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Safe Shelter</h3>

                <p class="item-text">
                  Sit amet consecte adiscine
                  eiusm temor ultrices.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="water-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Safe Water</h3>

                <p class="item-text">
                  Sit amet consecte adiscine
                  eiusm temor ultrices.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="leaf-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Ecology Save</h3>

                <p class="item-text">
                  Sit amet consecte adiscine
                  eiusm temor ultrices.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="snow-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Environment</h3>

                <p class="item-text">
                  Sit amet consecte adiscine
                  eiusm temor ultrices.
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">

          <div class="about-banner">

            <h2 class="deco-title">About Us</h2>

            <img src="./assets/images/deco-img.png" width="58" height="261" alt="" class="deco-img">

            <div class="banner-row">

              <div class="banner-col">
                <img src="./assets/images/about-banner-1.jpg" width="315" height="380" loading="lazy" alt="Tiger"
                  class="about-img w-100">

                <img src="./assets/images/about-banner-2.jpg" width="386" height="250" loading="lazy" alt="Panda"
                  class="about-img about-img-2 w-100">
              </div>

              <div class="banner-col">
                <img src="./assets/images/about-banner-3.jpg" width="250" height="277" loading="lazy" alt="Elephant"
                  class="about-img about-img-3 w-100">

                <img src="./assets/images/about-banner-4.jpg" width="315" height="380" loading="lazy" alt="Deer"
                  class="about-img w-100">
              </div>

            </div>

          </div>

          <div class="about-content">

            <p class="section-subtitle">
              <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

              <span>Why Choose Us</span>
            </p>

            <h2 class="h2 section-title">
              Rise Your Hand to Save <strong>World Handcraftmens</strong>
            </h2>

            <ul class="tab-nav">

              <li>
                <button class="tab-btn active">Our Mission</button>
              </li>

              <li>
                <button class="tab-btn">Our Vision</button>
              </li>

              <li>
                <button class="tab-btn">Next Plan</button>
              </li>

            </ul>

            <div class="tab-content">

              <p class="section-text">
                Join us and raise your hand to support world artisans. Explore and purchase handcrafted treasures while empowering craftsmen worldwide
              </p>

              <ul class="tab-list">

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Empower Artisans Worldwide</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Promote Sustainable Crafts</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Celebrate Handmade Treasures</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Support Local Artisans</p>
                </li>

              </ul>

              <button class="btn btn-secondary">
                <span>Learn More Us</span>

                <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
              </button>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="section cta">
        <div class="container">

          <div class="cta-content">
            <h2 class="h2 section-title">324+ Trusted Global Partners</h2>

            <a href="../partner/auth/register.php">
            <button class="btn btn-outline">
              <span>Become a Partner</span>
            </a>

              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <figure class="cta-banner">
            <img src="./assets/images/cta-banner.jpg" width="520" height="228" loading="lazy" alt="Fox"
              class="img-cover">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" style="background-image: url('./assets/images/service-map.png')">
        <div class="container">

          <p class="section-subtitle">
            <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

            <span>What We Do</span>
          </p>

          <h2 class="h2 section-title">
            We Work Differently to <strong>keep The World Safe</strong>
          </h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="leaf-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Save Nature</h3>

                <p class="card-text">
                  Tempor incididunt ut labores
                  dolore magna suspene
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="earth-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Save Ecology</h3>

                <p class="card-text">
                  Tempor incididunt ut labores
                  dolore magna suspene
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="flower-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Tree Plantation</h3>

                <p class="card-text">
                  Tempor incididunt ut labores
                  dolore magna suspene
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Clear Ocean</h3>

                <p class="card-text">
                  Tempor incididunt ut labores
                  dolore magna suspene
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #DONATE
      -->

      <section class="section donate" id="donate">
        <div class="container">

          <ul class="donate-list">

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./assets/images/donate-1.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Diamond Pandend</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>

                  <a href="../cart">
                  <button class="btn btn-secondary">
                    <span>Donation</span>


                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./assets/images/donate-2.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Pan Palet</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>
                  <a href="../cart">
                  <button class="btn btn-secondary">
                    <span>Donation</span>

                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>
</a>
                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./assets/images/donate-3.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">80%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Pan Buckets</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>
                  <a href="../cart">
                  <button class="btn btn-secondary">
                    <span>Donation</span>

                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>
</a>
                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./assets/images/donate-4.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Creative Wrapper</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>
                  <a href="../cart">
                  <button class="btn btn-secondary">
                    <span>Donation</span>

                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>
</a>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="testi">

        <div class="testi-content">

          <p class="section-subtitle">
            <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

            <span>Our Testimonials</span>
          </p>

          <h2 class="h2 section-title">
            What People Say About <strong>Our Marketplace</strong>
          </h2>

          <div class="testi-card">

            <figure class="card-avatar">
              <img src="./assets/images/testi-avatar.png" width="60" height="60" loading="lazy" alt="David S. Neuman">
            </figure>

            <div>
              <blockquote class="testi-text">
                Discover unique handcrafted treasures and support artisans worldwide. Sell your creations, connect with a global audience, and promote sustainable, personalized, and quality craftsmanship. Join our platform today!
              </blockquote>

              <h3 class="testi-name">David S. Neuman</h3>

              <p class="testi-title">Business Manager</p>
            </div>

          </div>

        </div>

        <figure class="testi-banner">
          <img src="./assets/images/testi-banner.jpg" width="960" height="846" loading="lazy" alt="Rhinoceros"
            class="img-cover">
        </figure>

      </section>





      <!-- 
        - #PARTNER
      -->

      <section class="section partner">
        <div class="container">

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-1.png" width="157" height="55" loading="lazy" alt="Children Fund"
              class="gray">

            <img src="./assets/images/partner-1-active.png" width="157" height="55" loading="lazy" alt="Children Fund"
              class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-2.png" width="163" height="55" loading="lazy" alt="Non Profit Agency"
              class="gray">

            <img src="./assets/images/partner-2-active.png" width="163" height="55" loading="lazy"
              alt="Non Profit Agency" class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-3.png" width="149" height="55" loading="lazy" alt="Rise Hand Help Us"
              class="gray">

            <img src="./assets/images/partner-3-active.png" width="149" height="55" loading="lazy"
              alt="Rise Hand Help Us" class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-4.png" width="169" height="58" loading="lazy" alt="Helping" class="gray">

            <img src="./assets/images/partner-4-active.png" width="169" height="58" loading="lazy" alt="Helping"
              class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./assets/images/partner-5.png" width="211" height="55" loading="lazy" alt="Poor Fund Organization"
              class="gray">

            <img src="./assets/images/partner-5-active.png" width="211" height="55" loading="lazy"
              alt="Poor Fund Organization" class="color">
          </a>

        </div>
      </section>

      <!-- 
        - #INSTA POST
      -->

      <section class="insta-post">

        <ul class="insta-post-list">

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-1.jpg" width="320" height="300" loading="lazy" alt="Lion"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-2.jpg" width="320" height="300" loading="lazy" alt="Deer"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-3.jpg" width="320" height="300" loading="lazy" alt="Wild Bear"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-4.jpg" width="320" height="300" loading="lazy" alt="Deer"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-5.jpg" width="320" height="300" loading="lazy" alt="Horses"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <ul class="footer-list">

        <li>
          <a href="#" class="footer-link">Terms of use</a>
        </li>

        <li>
          <a href="#" class="footer-link">Privacy & Policy</a>
        </li>

      </ul>

      <p class="copyright">
        Copyright 2023. All Rights Reserved.
      </p>

    </div>
  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>