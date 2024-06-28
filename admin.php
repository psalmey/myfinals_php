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
        <a href="#" class="logo d-flex align-items-center justify-content-center">
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
                    <a href="#" class="active"><i class="bi bi-person navicon"></i> Personal Information</a>
                </li>
                <li>
                    <a href="education.php"><i class="bi bi-file-earmark-text navicon"></i> Education</a>
                </li>
                <li>
                    <a href="skills.php"><i class="bi bi-gear-wide-connected navicon"></i> Skills</a>
                </li>
                <li>
                    <a href="achievements.php"><i class="bi bi-trophy-fill navicon"></i> Achievements</a>
                </li>
                <li><a href="phpscripts/user-logout.php"><i class="bi bi-power navicon"></i> Logout</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="admin section bg-primary-subtle">
            <div class="container section-title aos-init aos-animate pb-2" data-aos="fade-up">
                <h2>Personal Information</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row mb-4">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" placeholder="">
                            <label for="floatingName">Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingCourse" placeholder="">
                            <label for="floatingCourse">Course</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingAddress" placeholder="">
                            <label for="floatingAddress">Address</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingEmail" placeholder="example@email.com">
                            <label for="floatingEmail">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingNumber" placeholder="">
                            <label for="floatingNumber">Phone Number</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-floating">
                            <textarea rows="3" class="form-control mb-3" placeholder="Leave a comment here"
                                id="floatingAbout" style="height: 150px;"></textarea>
                            <label for="floatingAbout">About Yourself</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <textarea rows="3" class="form-control mb-3" placeholder="Leave a comment here"
                                id="floatingObjective" style="height: 150px;"></textarea>
                            <label for="floatingObjective">Objective</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-3">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingBirthdate" placeholder="">
                            <label for="floatingBirthdate">Birth Date</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingAge" placeholder="">
                            <label for="floatingAge">Age</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary update-pi" style="width: 150px">Update</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast text-white bg-light" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body text-center">
                <p class="mb-0 fw-bold"></p>
            </div>
        </div>
    </div>
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
    <script src="assets/js/custom-script/admin-script.js"></script>

</body>

</html>