<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/favicon.png">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>RAI Defence Academy</title>
</head>

<body>
    <!-- Loader -->
    <div class="loaderWrapper">
        <div class="loader">
            <div class="inner innerOne"></div>
            <div class="inner innerTwo"></div>
            <div class="inner innerThree"></div>
        </div>
    </div>

    <!-- Top Header -->
    <div class="topHeader">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="leftSec">
                        <p>
                            <em class="ri ri-map-2-line"></em> Uttar Pradesh, India
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="rightSec">
                        <li>
                            <a href="tel:+91-98765-43210">
                                <em class="ri ri-phone-line"></em> +91-98765-43210
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@raidefenceacademy.com">
                                <em class="ri ri-mail-line"></em> info@raidefenceacademy.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="navbarArea" id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logoW.png" alt="">
                </a>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="topBar"></span>
                        <span class="middleBar"></span>
                        <span class="bottomBar"></span>
                    </span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="mission.php" class="nav-link">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">Officer's Course</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="courseDetails.php" class="nav-link">NDA</a>
                                </li>
                                <li class="nav-item">
                                    <a href="courseDetails.php" class="nav-link">CDS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="courseDetails.php" class="nav-link">AFCAT</a>
                                </li>
                                <li class="nav-item">
                                    <a href="courseDetails.php" class="nav-link">CAPF</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="agniveer.php" class="nav-link">Agniveer Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="blog.php" class="nav-link">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="othersOption">
                        <a class="sidebarToggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                            aria-controls="navbarOffcanvas">
                            <em class="ri ri-menu-2-line"></em>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="responsiveNavbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <em class="ri-close-line"></em>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <a class="accordion-button without-icon active" href="index.php">Home</a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="mission.php">Mission</a>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseService" aria-expanded="false" aria-controls="collapseService">
                        Officer's Course
                    </button>
                    <div id="collapseService" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion7">
                                <div class="accordion-item">
                                    <a href="courseDetails.php" class="accordion-link">NDA</a>
                                </div>
                                <div class="accordion-item">
                                    <a href="courseDetails.php" class="accordion-link">CDS</a>
                                </div>
                                <div class="accordion-item">
                                    <a href="courseDetails.php" class="accordion-link">AFCAT</a>
                                </div>
                                <div class="accordion-item">
                                    <a href="courseDetails.php" class="accordion-link">CAPF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="agniveer.php">Agniveer Courses</a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="blog.php">Blogs</a>
                </div>
                <div class="accordion-item">
                    <a class="accordion-button without-icon" href="contact.php">Contact Us</a>
                </div>
            </div>
            <div class="offcanvas-contact-info">
                <div class="copyright">
                    © RAI Defence Academy 2024 All right reserved.
                </div>
            </div>
        </div>
    </div>