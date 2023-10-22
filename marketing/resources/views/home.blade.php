
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Growth - We're available for marketing</title>
  <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
  <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body id="top">
<!-- use header.blade.php decorative here -->
        @include('header')
        <!-- main menu -->
       <section class="section hero" id="home" aria-label="hero">
        <div class="container">
          <div class="hero-content">
            <p class="hero-subtitle">Digital Marketing</p>
            <h1 class="h1 hero-title">We are available for marketing</h1>
            <p class="hero-text">
              Digital Growth is a marketing agency that specializes in SEO, Social Media Marketing, Email Marketing,
                Lead Generation, and PR. We create custom marketing plans based on your business, sales, and marketing
            </p>
            <a href="#" class="btn btn-primary">Get Started</a>
          </div>
          <figure class="hero-banner">
          <img src="{{ asset('images/hero-banner.png') }}" width="720" height="673" alt="hero banner" class="w-100" >
          </figure>
        </div>
      </section>

      <!--- #SERVICE -->

      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <h2 class="h2 section-title">Services We Provided</h2>

          <p class="section-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #13c4a1">
                  <ion-icon name="chatbox"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">SEO Optimization</a>
                </h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque
                  ipsa quae.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #6610f2">
                  <ion-icon name="desktop"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Digital Marketing</a>
                </h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque
                  ipsa quae.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #ffb700">
                  <ion-icon name="bulb"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Market Research</a>
                </h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque
                  ipsa quae.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #fc3549">
                  <ion-icon name="phone-portrait"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Keyword Targeting</a>
                </h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque
                  ipsa quae.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #00d280">
                  <ion-icon name="archive"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Email Marketing</a>
                </h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque
                  ipsa quae.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #ff612f">
                  <ion-icon name="build"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Marketing & Reporting</a>
                </h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque
                  ipsa quae.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section> 

      <!-- project -->
      <section class="section project" id="project" aria-label="project">
        <div class="container">

          <h2 class="h2 section-title">Our Recent Projects</h2>

          <p class="section-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna
            aliqua.
          </p>

          <ul class="grid-list">

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                <img src="{{ asset('images/project-1.jpg') }}" width="510" height="700" loading="lazy"
                    alt="Designing a better cinema experience" class="img-cover">
                </figure>
                <div class="card-content">
                  <p class="card-subtitle">SEO Optimization</p>
                  <h3 class="h3">
                    <a href="#" class="card-title">Designing a better cinema experience</a>
                  </h3>
                  <a href="#" class="btn btn-primary">View Details</a>
                </div>
              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-2.jpg" width="510" height="700" loading="lazy"
                    alt="Building design process within teams" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Digital Marketing</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Building design process within teams</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-3.jpg" width="510" height="700" loading="lazy"
                    alt="How intercom brings play into their design process" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Keyword Targeting</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">How intercom brings play into their design process</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-4.jpg" width="510" height="700" loading="lazy"
                    alt="Stuck with to-do list, I created a new app for" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Email Marketing</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Stuck with to-do list, I created a new app for</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-5.jpg" width="510" height="700" loading="lazy"
                    alt="Examples of different types of sprints" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Marketing & Reporting</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Examples of different types of sprints</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="./assets/images/project-6.jpg" width="510" height="700" loading="lazy"
                    alt="Redesigning the New York times app" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Development</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Redesigning the Gujrat govermnet app</a>
                  </h3>

                  <a href="#" class="btn btn-primary">View Details</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
      <!-- - #CTA -->
      <section class="section cta" aria-label="cta" style="background-image: url('{{ asset('images/cta-bg.jpg') }}')">
        <div class="container">
          <p class="cta-subtitle">So What is Next?</p>
          <h2 class="h2 section-title">Are You Ready? Let's get to Work!</h2>
          <a href="#" class="btn btn-secondary">Get Started</a>
        </div>
      </section>
      
      <!--  - #BLOG -->
      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">
          <h2 class="h2 section-title">Latest Articles Updated Weekly</h2>
          <p class="section-text">
            Our company blog is a great resource for all things digital marketing. We cover everything from SEO to social
            media, and we're always adding new content. Check out our latest articles below!
          </p>
          <ul class="grid-list">
            <li>
              <div class="blog-card">
                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                <img src="{{ asset('images/blog-1.jpg') }}" width="860" height="646" loading="lazy"
                    alt="How to Become a Successful Entry Level UX Designer" class="img-cover">            
                </figure>
                <div class="card-content">
                  <time class="time" datetime="2022-06-16">October 18, 2023</time>
                  <h3 class="h3">
                    <a href="#" class="card-title">How to Become a Successful Entry Level UX Designer</a>
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card grid">
                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                <img src="{{ asset('images/blog-2.jpg') }}" width="860" height="646" loading="lazy"
                    alt="How to Become a Successful Entry Level UX Designer" class="img-cover">
                </figure>
                <div class="card-content">

                  <time class="time" datetime="2022-06-16">October 16, 2023</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">2022 Local SEO Success: The Year of Everywhere</a>
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card grid">
                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                <img src="{{ asset('images/blog-3.jpg') }}" width="860" height="646" loading="lazy"
                    alt="How to Become a Successful Entry Level UX Designer" class="img-cover">
                </figure>
                <div class="card-content">
                  <time class="time" datetime="2022-06-16">October 08, 2023</time>
                  <h3 class="h3">
                    <a href="#" class="card-title">The Guide to Running a Client Discovery Process</a>
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card grid">
                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                <img src="{{ asset('images/blog-4.jpg') }}" width="860" height="646" loading="lazy"
                    alt="How to Become a Successful Entry Level UX Designer" class="img-cover">
                </figure>
                <div class="card-content">
                  <time class="time" datetime="2022-06-16">October 10, 2023</time>
                  <h3 class="h3">
                    <a href="#" class="card-title">3 Ways to Get Client Approval for Scope Changes</a>
                  </h3>
                </div>
              </div>
            </li>
            
            <li>
              <div class="blog-card grid">
                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                <img src="{{ asset('images/blog-5.jpg') }}" width="860" height="646" loading="lazy"
                    alt="How to Become a Successful Entry Level UX Designer" class="img-cover">
                </figure>
                <div class="card-content">
                  <time class="time" datetime="2022-06-16">October 16, 2023</time>
                  <h3 class="h3">
                    <a href="#" class="card-title">Top 10 Must-Read Blogs For Creative Agencies</a>
                  </h3>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- - #CONTACT -->
             @include('contactus')
    </article>
  </main>
  <!-- use footer decorative -->
  <!-- @include('footer') -->
  <!--  - ionicon link   -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
