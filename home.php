<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png" />

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="stuff/css/swiper-bundle.min.css" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="stuff/css/styles.css" />

  <title>MEDIFLOW</title>
</head>

<body>
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav__logo"><img src="/stuff/img/hospital-logo-design-vector-medical-cross_53876-136743-removebg-preview.png" alt="">MEDIFLOW</a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link active-link">Home</a>
          </li>
          <li class="nav__item">
            <a href="#about" class="nav__link">About</a>
          </li>
          <li class="nav__item">
            <a href="contact.html" class="nav__link">Contact</a>
          </li>
          <li class="nav__item">
            <a href="#place" class="nav__link">More</a>
          </li>
        </ul>
        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-function-line"></i>
        </div>
    </nav>
  </header>
  <main class="main">
    <!--==================== HOME ====================-->
    <section class="home" id="home">
      <img src="stuff/img/HEALTHCORE (1).png" alt="" class="home__img" />

      <div class="home__container container grid">
        <div class="home__data">
          <h1 class="home__data-title">
            Healthcare<br />
            now
            <b>
              on Your <br />
              Fingertips</b>
          </h1>
          <div class="dropdown">
            <button class="dropbtn">Sign Up</button>
            <div class="dropdown-content">
              <a href="index.php">Patient</a>
              <a href="index3.php">Doctor</a>
              <a href="index4.php">Admin</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
      <div class="about__container container grid">
        <div class="about__data">
          <h2 class="section__title about__title">
            About <br />
            MEDIFLOW
          </h2>
          <p class="about__description">
            Making yur life for cheerful by taking care of your health and
            wellness. we are here 24x7 at your service with our specialised
            team of doctors.
          </p>
          <a href="#" class="button">Reserve a place</a>
        </div>

        <div class="about__img">
          <div class="about__img-overlay">
            <img src="stuff/img/intro 3.jpg" alt="" class="about__img-one" />
          </div>

          <div class="about__img-overlay">
            <img src="stuff/img/intro 4.jpg" alt="" class="about__img-two" />
          </div>
        </div>
      </div>
    </section>

    <!--==================== DISCOVER ====================-->
    <section class="discover section" id="discover">
      <h2 class="section__title">
        Discover<br />
        Our Services
      </h2>

      <div class="discover__container container swiper-container">
        <div class="swiper-wrapper">
          <!--==================== DISCOVER 1 ====================-->
          <div class="discover__card swiper-slide">
            <img src="stuff/img/appointment.jpg" alt="" class="discover__img" />
            <div class="discover__data">
              <h2 class="discover__title">Book appointment</h2>
            </div>
          </div>

          <!--==================== DISCOVER 2 ====================-->
          <div class="discover__card swiper-slide">
            <img src="stuff/img/healthcare packages.jpg" alt="" class="discover__img" />
            <div class="discover__data">
              <h2 class="discover__title">Packages</h2>
            </div>
          </div>

          <!--==================== DISCOVER 3 ====================-->
          <div class="discover__card swiper-slide">
            <img src="stuff/img/diagnostic.jpg" alt="" class="discover__img" />
            <div class="discover__data">
              <h2 class="discover__title">Diagnostic services</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== EXPERIENCE ====================-->
    <section class="experience section">
      <h2 class="section__title">
        With Our Experience <br />
        We Will Serve You
      </h2>

      <div class="experience__container container grid">
        <div class="experience__content grid">
          <div class="experience__data">
            <h2 class="experience__number">10</h2>
            <span class="experience__description">Expert <br />
              doctors</span>
          </div>

          <div class="experience__data">
            <h2 class="experience__number">2</h2>
            <span class="experience__description">Year <br />
              Experience</span>
          </div>

          <div class="experience__data">
            <h2 class="experience__number">650+</h2>
            <span class="experience__description">Happy <br />
              Clients</span>
          </div>
        </div>

        <div class="experience__img grid">
          <div class="experience__overlay">
            <img src="stuff/img/INTRO 5.jpg" alt="" class="experience__img-one" />
          </div>

          <div class="experience__overlay">
            <img src="stuff/img/INTRO 6.jpg" alt="" class="experience__img-two" />
          </div>
        </div>
      </div>
    </section>


    <!--==================== PLACES ====================-->
    <section class="place section" id="place">
      <h2 class="section__title">Choose Your Doctor</h2>

      <div class="place__container container grid">
        <!--==================== PLACES CARD 1 ====================-->
        <div class="place__card">
          <img src="stuff/img/dr 1.jpg" alt="" class="place__img" />

          <div class="place__content">
            <span class="place__rating">
              <i class="ri-star-line place__rating-icon"></i>
              <span class="place__rating-number">4,8</span>
            </span>

            <div class="place__data">
              <h3 class="place__title">Dr. Amit</h3>
              <span class="place__subtitle">Cardiologist</span>
            </div>
          </div>

          <button class="button button--flex place__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>

        <!--==================== PLACES CARD 2 ====================-->
        <div class="place__card">
          <img src="stuff/img/dr 2.jpg" alt="" class="place__img" />

          <div class="place__content">
            <span class="place__rating">
              <i class="ri-star-line place__rating-icon"></i>
              <span class="place__rating-number">5,0</span>
            </span>

            <div class="place__data">
              <h3 class="place__title">Dr. Abbis</h3>
              <span class="place__subtitle">Neurologist</span>
            </div>
          </div>

          <button class="button button--flex place__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>

        <!--==================== PLACES CARD 3 ====================-->
        <div class="place__card">
          <img src="stuff/img/dr 3.jpg" alt="" class="place__img" />

          <div class="place__content">
            <span class="place__rating">
              <i class="ri-star-line place__rating-icon"></i>
              <span class="place__rating-number">4,9</span>
            </span>

            <div class="place__data">
              <h3 class="place__title">Dr. Ganesh</h3>
              <span class="place__subtitle">Pediatrician</span>
            </div>
          </div>

          <button class="button button--flex place__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>

        <!--==================== PLACES CARD 4 ====================-->
        <div class="place__card">
          <img src="stuff/img/dr 4.webp" alt="" class="place__img" />

          <div class="place__content">
            <span class="place__rating">
              <i class="ri-star-line place__rating-icon"></i>
              <span class="place__rating-number">4,8</span>
            </span>

            <div class="place__data">
              <h3 class="place__title">Dr. Ashok</h3>
              <span? class="place__subtitle">General</span>
            </div>
          </div>

          <button class="button button--flex place__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>

        <!--==================== PLACES CARD 5 ====================-->
        <div class="place__card">
          <img src="stuff/img/dr 5.png" alt="" class="place__img" />

          <div class="place__content">
            <span class="place__rating">
              <i class="ri-star-line place__rating-icon"></i>
              <span class="place__rating-number">4,8</span>
            </span>

            <div class="place__data">
              <h3 class="place__title">Dr. Dinesh</h3>
              <span class="place__subtitle">General</span>
            </div>
          </div>

          <button class="button button--flex place__button">
            <i class="ri-arrow-right-line"></i>
          </button>
        </div>
      </div>
    </section>

    <!--==================== SPONSORS ====================-->
    <section class="sponsor section">
      <div class="sponsor__container container grid">
        <div class="sponsor__content">
          <img src="assets/img/sponsors1.png" alt="" class="sponsor__img" />
        </div>
        <div class="sponsor__content">
          <img src="assets/img/sponsors2.png" alt="" class="sponsor__img" />
        </div>
        <div class="sponsor__content">
          <img src="assets/img/sponsors3.png" alt="" class="sponsor__img" />
        </div>
        <div class="sponsor__content">
          <img src="assets/img/sponsors4.png" alt="" class="sponsor__img" />
        </div>
        <div class="sponsor__content">
          <img src="assets/img/sponsors5.png" alt="" class="sponsor__img" />
        </div>
      </div>
    </section>
  </main>

  <!--==================== FOOTER ====================-->
  <footer class="footer section">
    <div class="footer__container container grid">
      <div class="footer__content grid">
        <div class="footer__data">
          <h3 class="footer__title">MEDIFLOW</h3>
          <p class="footer__description">
            We care for you <br />
            and your future, join us<br />
            today.
          </p>
          <div>
            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
              <i class="ri-facebook-box-fill"></i>
            </a>
            <a href="https://twitter.com/" target="_blank" class="footer__social">
              <i class="ri-twitter-fill"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
              <i class="ri-instagram-fill"></i>
            </a>
            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
              <i class="ri-youtube-fill"></i>
            </a>
          </div>
        </div>

        <div class="footer__data">
          <h3 class="footer__subtitle">About</h3>
          <ul>
            <li class="footer__item">
              <a href="" class="footer__link">About Us</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Features</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">New & Blog</a>
            </li>
          </ul>
        </div>

        <div class="footer__data">
          <h3 class="footer__subtitle">Company</h3>
          <ul>
            <li class="footer__item">
              <a href="" class="footer__link">Team</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Plan y Pricing</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Become a member</a>
            </li>
          </ul>
        </div>

        <div class="footer__data">
          <h3 class="footer__subtitle">Support</h3>
          <ul>
            <li class="footer__item">
              <a href="" class="footer__link">FAQs</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Support Center</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>


  </footer>

  <!--========== SCROLL UP ==========-->
  <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line scrollup__icon"></i>
  </a>

  <!--=============== SCROLL REVEAL===============-->
  <script src="stuff/js/scrollreveal.min.js"></script>

  <!--=============== SWIPER JS ===============-->
  <script src="stuff/js/swiper-bundle.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="stuff/js/main.js"></script>
</body>

</html>