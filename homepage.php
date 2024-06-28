<?php
session_start();
include ("phpscripts/database-connection.php");
include ("phpscripts/check-login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>My Web Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>
        <div class="profile-img">
            <img src="assets/img/1.png" alt=""
                class="rounded-circle object-fit-cover">
        </div>
        <a href="index.html" class="logo d-flex align-items-center justify-content-center">
            <h1 class="sitename data-username"></h1>
        </a>
        <div class="social-links text-center">
            <a href="https://x.com/psalmashleyy" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/chopatchie.ashley?_rdc=1&_rdr" target="_blank" class="facebook"><i
                    class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/psalmashlife/" target="_blank" class="instagram"><i
                    class="bi bi-instagram"></i></a>
            <a href="https://github.com/psalmey" target="_blank" class="github"><i class="bi bi-github"></i></a>
            <a href="https://web.whatsapp.com" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        </div>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
                <li><a href="phpscripts/user-logout.php"><i class="bi bi-power navicon"></i> Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section id="hero" class="hero section">
            <img src="assets/img/bg.png" alt="" data-aos="fade-in" class="">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2 class="data-username"></h2>
                <p>I'm <span class="typed" data-typed-items="Designer, Developer, Photographer">Designer</span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>
        </section>
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p id="aboutDesc"></p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center align-items-center">
                    <div class="col-lg-4 text-center">
                        <img src="assets/img/907ba029-2c58-493c-8215-3b519ed7503b.jpg" height="420px" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Course:</strong>
                                        <span id="course"></span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Email:</strong>
                                        <span class="emailData"></span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Phone:</strong>
                                        <span class="phoneNumberData"></span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Address:</strong>
                                        <span class="addressData"></span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Birthday:</strong>
                                        <span id="birthdate"></span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Age:</strong>
                                        <span id="age"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class="skills section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
            </div>
            <div class="container d-flex align-items-center justify-content-between flex-wrap" id="skills-container"
                data-aos="fade-up" data-aos-delay="100"></div>
        </section>
        <section id="resume" class="resume section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <p id="objectiveDesc"></p>
            </div>
            <div class="container d-flex justify-content-between align-items-center" id="education-container"></div>
        </section>
        <section id="achievements" class="achievements">
            <div class=" container section-title" data-aos="fade-up" style="padding: 1rem;">
                <h2>Achievements, Awards, and Certificates Received</h2>
            </div>
            <div class="container d-flex justify-content-between" id="achievements-container"></div>
        </section>
        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
            </div>
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-infographic">Infographic</li>
                        <li data-filter=".filter-magazine">Magazine</li>
                        <li data-filter=".filter-poster">Poster</li>
                    </ul>
                    <div class="row gy-4 isotope-container" id="isotope-container" data-aos="fade-up"
                        data-aos-delay="200">
                        <!-- Infographic -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-infographic">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/infographic/1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/infographic/1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-infographic">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/infographic/2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/infographic/2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Magazine -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-magazine">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/magazine/1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/magazine/1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-magazine">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/magazine/2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/magazine/2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-magazine">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/magazine/3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/magazine/3.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-magazine">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/magazine/4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/magazine/4.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-magazine">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/magazine/5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/magazine/5.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-magazine">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/magazine/6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/magazine/6.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-magazine">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/magazine/7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/magazine/7.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-magazine">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/magazine/8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/magazine/8.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Poster -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/3.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/4.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/5.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/6.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/7.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/8.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/3121.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poster">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/poster/3121.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/poster/3121.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p class="addressData"></p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p class="phoneNumberData"></p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p class="emailData"></p>
                                </div>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15496.98149327822!2d120.91136629928167!3d13.824299235200488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd08462acda339%3A0x1f0694b6c3c71d9b!2sBanoyo%2C%20Batangas!5e0!3m2!1sen!2sph!4v1719485662076!5m2!1sen!2sph"
                                style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field"
                                        required=""></textarea>
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
        </section>
    </main>
    <footer id="footer" class="footer position-relative">
        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Web Portfolio</strong> <span>All Rights
                        Reserved</span>
                </p>
            </div>
            <div class="credits">
                Designed by <span class="data-username"></span>
            </div>
        </div>
    </footer>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/custom-script/display-data-script.js"></script>

</body>

</html>