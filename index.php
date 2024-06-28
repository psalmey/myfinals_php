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
                <li>
                    <a href="#home" class="active">
                        <i class="bi bi-house navicon"></i>Home</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">
                        <i class="bi bi-person navicon"></i>
                        About</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">
                        <i class="bi bi-file-earmark-text navicon"></i> Resume</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">
                        <i class="bi bi-images navicon"></i>
                        Portfolio</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">
                        <i class="bi bi-envelope navicon"></i> Contact</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">
                        <i class="bi bi-box-arrow-in-right navicon"></i> Login</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section id="hero" class="hero section">
            <img src="assets/img/bg.png" alt="" data-aos="fade-in" class="">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2 class="data-username"></h2>
                <p>I'm <span class="typed" data-typed-items="a Designer, a Student, an Athlete, a Photographer">Designer</span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
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
    <!-- Modal Registration -->
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content modal-registration">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body login">
                    <form id="loginAccount">
                        <div class="row mb-3">
                            <div class="col">
                                <h4 class="text-center mb-0 fw-bold">Login Your Account</h4>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="userEmail"
                                        placeholder="name@example.com">
                                    <label for="userEmail">Email address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="userPassword"
                                        placeholder="Password">
                                    <label for="userPassword">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <button type="submit" role="button" class="btn btn-success w-100">Login</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <p>Don't have an account?
                                    <span>
                                        <button type="button" class="btn-signup" data-bs-toggle="modal"
                                            data-bs-target="#modalSignup">
                                            Signup here.
                                        </button>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalSignup" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content modal-registration">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body login">
                    <form id="signupAccount">
                        <div class="row mb-3">
                            <div class="col">
                                <h4 class="text-center mb-0">Create Your Account</h4>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                    <label for="email">Email address</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="confirmPassword"
                                        placeholder="Confirm Password">
                                    <label for="confirmPassword">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" role="button" class="btn btn-success">Create
                                    Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    <script src="assets/js/custom-script/registration-script.js"></script>

</body>

</html>