<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elearning Lingustics </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>FlexStart</span>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Unlock the World of Python Programming</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Learn Python with our comprehensive courses tailored for students</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#subscription" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Explore Courses</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid" alt="Learn Python Hero Image">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Our Mission</h3>
              <h2>Empowering Students with Python Programming Knowledge</h2>
              <p>
                Learn Python is dedicated to providing high-quality educational content for students. Our mission is to empower individuals with the skills and knowledge needed to excel in Python programming.
              </p>
              <div class="text-center text-lg-start">
                <a href="#courses" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center scrollto">
                  <span>Explore Courses</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="Learn Python About Image">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Our Values</h2>
          <p>Guiding principles that define our commitment to education</p>
        </header>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('assets/img/values-1.png') }}" class="img-fluid" alt="Value 1 Image">
              <h3>Empower through Education</h3>
              <p>We believe in empowering individuals through quality education. Our courses are designed to provide valuable knowledge and skills.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('assets/img/values-2.png') }}" class="img-fluid" alt="Value 2 Image">
              <h3>Accessibility for All</h3>
              <p>Education should be accessible to everyone. We strive to create an inclusive learning environment where anyone can thrive.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('assets/img/values-3.png') }}" class="img-fluid" alt="Value 3 Image">
              <h3>Continuous Learning Culture</h3>
              <p>We embrace a culture of continuous learning. Our commitment to staying updated ensures the relevance and quality of our content.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Values Section -->

    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="row feature-icons" data-aos="fade-up">
          <h3>Discover the Key Features of Learn Python Platform</h3>
          <div class="row">
            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ asset('assets/img/features-3.png') }}" class="img-fluid p-4" alt="Feature Image">
            </div>
            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bi bi-people"></i>
                  <div>
                    <h4>Interactive Learning</h4>
                    <p>Engage in interactive learning experiences with hands-on coding exercises and real-world projects.</p>
                  </div>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-book"></i>
                  <div>
                    <h4>Comprehensive Courses</h4>
                    <p>Access comprehensive courses covering a range of Python topics, from basics to advanced concepts.</p>
                  </div>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-code"></i>
                  <div>
                    <h4>Practical Coding Challenges</h4>
                    <p>Sharpen your coding skills with practical challenges designed to reinforce your learning.</p>
                  </div>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-award"></i>
                  <div>
                    <h4>Certification</h4>
                    <p>Earn certificates upon course completion, validating your proficiency in Python programming.</p>
                  </div>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-clock"></i>
                  <div>
                    <h4>Learn at Your Own Pace</h4>
                    <p>Flexible scheduling allows you to learn at your own pace, fitting into your busy lifestyle.</p>
                  </div>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bi bi-cloud-download"></i>
                  <div>
                    <h4>Accessible Resources</h4>
                    <p>Access course materials, resources, and projects from anywhere with cloud-based storage.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Feature Icons -->
      </div>
    </section><!-- End Features Section -->


    <!-- ======= Courses Section ======= -->
    <section id="courses" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Featured Courses</h2>
          <p>Explore our diverse range of courses designed for your learning journey</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Web Development Basics</h3>
              <p>Learn the fundamentals of web development, HTML, CSS, and JavaScript. Build your first website from scratch.</p>
              <a href="#" class="read-more"><span>Explore Course</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Python Programming</h3>
              <p>Master Python programming language. Dive into data structures, algorithms, and real-world applications.</p>
              <a href="#" class="read-more"><span>Explore Course</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Graphic Design Essentials</h3>
              <p>Unlock your creativity with graphic design. Learn essential tools and techniques for designing stunning visuals.</p>
              <a href="#" class="read-more"><span>Explore Course</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Full Stack Development</h3>
              <p>Become a full-stack developer. Explore frontend and backend technologies, databases, and create dynamic web applications.</p>
              <a href="#" class="read-more"><span>Explore Course</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Machine Learning Fundamentals</h3>
              <p>Dive into the world of machine learning. Understand algorithms, models, and their applications in real-world scenarios.</p>
              <a href="#" class="read-more"><span>Explore Course</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Effective Communication Skills</h3>
              <p>Enhance your communication skills. Learn the art of effective communication, public speaking, and interpersonal skills.</p>
              <a href="#" class="read-more"><span>Explore Course</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Courses Section -->



















































































































































    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Subscription Plans</h2>
          <p>Choose the plan that suits your learning needs</p>
        </header>
        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Free Package</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
              <ul>
                <li>Base topics 1 & 2</li>
                <li>Account not required</li>
                <li>Additional topics on registration</li>
                <li class="na">Unlock more features</li>
              </ul>
              <a href="#" class="btn-buy">Activate</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Standard Package</h3>
              <div class="price"><sup>$</sup>20<span> / mo</span></div>
              <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
              <ul>
                <li>Base topics 1 & 2 accessible</li>
                <li>Unlock topics 3 to 10 on subscription</li>
                <li>Subscribe for additional content</li>
                <li>Includes projects</li>
              </ul>
              <a href="#" class="btn-buy">Subscribe</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Premium Package</h3>
              <div class="price"><sup>$</sup>23<span> / mo</span></div>
              <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
              <ul>
                <li>Everything in the Standard Package</li>
                <li>Additional 4 projects at the end</li>
                <li>Enhanced learning experience</li>
                <li>Special features included</li>
              </ul>
              <a href="#" class="btn-buy">Upgrade</a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Pricing Section -->
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Frequently Asked Questions</h2>
          <p>Explore the answers to common queries</p>
        </header>
        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question"></i> How do I access the free package?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    The free package can be accessed without login. Topics 1 and 2 are available without registration.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question"></i> How can I subscribe to the Standard Package?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    To subscribe to the Standard Package, you need to register/login. After that, you can subscribe for $20 per month.
                  </div>
                </div>
              </div>
              <!-- Add more questions as needed -->
            </div>
          </div>
          <div class="col-lg-6">
            <!-- F.A.Q List 2-->
            <div class="accordion" id="faqlist2">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    <i class="bi bi-question"></i> How much does the Premium Package cost?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    The Premium Package is priced at $23 per month and includes everything in the Standard Package plus 4 additional projects.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    <i class="bi bi-question"></i> How can I reset my lost/forgotten passcode?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    You can reset your passcode by using the 'Forgot Password' link on the login page and following the instructions.
                  </div>
                </div>
              </div>
              <!-- Add more questions as needed -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>












</body>

</html>