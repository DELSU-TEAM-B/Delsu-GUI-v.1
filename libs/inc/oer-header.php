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
                                <a class="nav-link" href="oer.php?pgname=Home">OER</a>
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
                   
                    <li class="nav-item">
                        <a class="nav-link" href="about-oer.php?pgname=About OER">About OER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="conference-papers.php?pgname=Conference Papers">Conference papers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="courseware.php?pgname=Courseware">Courseware</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="journal-articles.php?pgname=Journal Articles">Journal articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lecture-notes.php?pgname=Lecture Note">Lecture notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lecture-videos.php?pgname=Lecture Videos">Lecture videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects-thesis.php?pgname=Projects/Thesis">Projects/thesis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="other-oer.php?pgname=Other OER">Other OER</a>
                    </li>
                </ul>
            <!-- </div> -->
        </div>
    </div>