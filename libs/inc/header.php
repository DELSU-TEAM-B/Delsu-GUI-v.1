<?php 
    if(isset($_GET['pgname'])){
        $pgname = $_GET['pgname'];
    }else{
        $pgname = "Home";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pgname; ?> | Delta State University</title>
    
    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="libs/css/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="libs/css/style.css">
    <link rel="stylesheet" href="libs/css/mobile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/a27c25cf2f.js" crossorigin="anonymous"></script>
    <style>
        .wow:first-child {
            visibility: hidden;
        }
        @media(min-width:790px) {
            .nav-item:hover .dropdown-menu{ display: block; }
        }
    </style>
</head>
<body>
    <div class="header sticky-top">
        <!-- <div class="container-fluid"> -->
            <div class="float-start logo-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10">
                            <img src="libs/img/delsub.png" alt="delsu logo" class="img-fluid">
                        </div>
                        <div class="col-2 d-flex">
                            <div class="my-auto menu-tog show-mob">
                                <i class="fas fa-sliders-h"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-end">
                <div class="container-fluid">
                    <div class="top-nav">
                        <ul class="nav" id="">
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://calendar.google.com/calendar/u/6/r">Email</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="oer.php?pgname=Open Education Resources">OER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news.php?pgname=News and Events">News &amp; Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php?pgname=Contact us">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-group">
                        <div class="row justify-content-between">
                            <div class="col-7">
                                <form class="">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                            <div class="col-5">
                                <a href="https://portal.delsu.edu.ng/" target="_blank" class="btn btn-outline-primary w-100" >Portal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <div class="clearfix mb-3"></div>
        <div class="main-nav">
            <!-- <div class="container"> -->
                <ul class="nav nav-fill" id="nav-mr">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pgname=Home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="vision-mission.php?pgname=Vision and Mission">Mission &amp; Vision</a></li>
                            <li><a class="dropdown-item" href="history.php?pgname=History">History</a></li>
                            <li><a class="dropdown-item" href="delsu-anthem.php?pgname=Delsu anthem">Delsu Anthem and Logos</a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="academic.php?pgname=Academics">Academic</a></li>
                            <li><a class="dropdown-item" href="non-academic.php?pgname=Non-Academics">Non academic</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Academics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="academic-calender.php?pgname=Academic Calender">Academic calender</a></li>
                            <li><a class="dropdown-item" href="faculties.php?pgname=Faculties and Department">Faculties &amp; Departments</a></li>
                            <li><a class="dropdown-item" href="elearning.php?pgname=E-Learning">E-learning Platforms</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Programmes</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="undergraduate.php?pgname=Undergraduates">Undergraduate</a></li>
                            <li><a class="dropdown-item" href="postgraduate.php?pgname=Postgraduate">Postgraduate</a></li>
                            <!-- <li><a class="dropdown-item" href="other-programmes.php?pgname=Other programmes">Other programmes</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inaugural.php?pgname=Inaugural lectures">Inaugural lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.researchgate.net/institution/Delta-State-University-Abraka">Researchgate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="journals.php?pgname=Journals">Journals</a>
                    </li>
                </ul>
            <!-- </div> -->
        </div>
    </div>