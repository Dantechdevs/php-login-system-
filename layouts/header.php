<?php
define("APP_URL", "http://127.0.0.1:8000/");
define("APP_NAME", "Blogy");
define("APP_DEV", "Kinyuacodes");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo APP_NAME; ?> - Personal Blog Template
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>public/custom/all.min.css">
    <!-- Font Awesome 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">-->
    <link href="<?php echo APP_URL; ?>public/theme/custom/css/font-awesome.min.css">
    <link href="<?php echo APP_URL; ?>public/theme/custom/css/all.min.css">
    <link href="<?php echo APP_URL; ?>public/theme/custom/css/bootstrap-icons.min.css">
    <!---bootstrap-->
    <link rel="stylesheet" href="<?php echo APP_URL; ?>public/theme/custom/css/bootstrap.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo APP_URL; ?>public/theme/css/style.css" rel="stylesheet">
    <style>
        .error {
            color: red !important;
        }

        .success {
            color: green !important;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3"
                    src="<?php echo APP_URL; ?>public/auth/img_10.jpg " width="40%" alt="Image">
                <h1 class="font-weight-bold">
                    <?php echo APP_NAME; ?>
                </h1>
                <p class="mb-4">
                    Justo stet no accusam stet invidunt sanctus magna clita vero eirmod, sit sit labore dolores lorem.
                    Lorem at sit dolor dolores sed diam justo
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="bi-twitter"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fas fa-facebook"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Blog</a>
            </div>
            <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                <i class="fas fa-2x fa-angle-double-right text-primary"></i>
            </div>
        </div>
        <div class="content">
            <!-- Navbar Start -->
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                    <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="<?php echo APP_URL; ?>" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>



                            <?php if (isset($_SESSION["ID"])): ?>
                                <a href="<?php echo APP_URL; ?>dashboard/index.php" class="nav-item nav-link">dashboard</a>
                                <a href="<?php echo APP_URL; ?>auth/logout.php" class="nav-item nav-link">logout</a>
                            <?php else: ?>
                                <a href="<?php echo APP_URL; ?>auth/login.php" class="nav-item nav-link">Login</a>
                                <a href="<?php echo APP_URL; ?>auth/register.php" class="nav-item nav-link">Register</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->