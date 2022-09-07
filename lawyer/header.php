<?php

session_start();
require_once("../dbconnection.php");
if (!isset($_SESSION['user']) || !strcmp($_SESSION['user'], "lawyer") == 0) {
    header("Location:../index.php");
}
$email = $_SESSION['email'];
$query = "select * from lawyers where email='" . $email . "';";
$result = $conn->query($query);
$name = "";
$password = "";
$categoryid = "";
$rate = "";
$description = "";
$phonenumber = "";
$location = "";
$picture = "";
$joindate = "";
$bkashnumber = "";

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $name = $row['name'];
        $password = $row['password'];
        $categoryid = $row['categoryid'];
        $rate = $row['rate'];
        $description = $row['description'];
        $phonenumber = $row['phonenumber'];
        $bkashnumber = $row['bkashnumber'];
        $location = $row['location'];
        $picture = $row['picture'];
        $joindate = $row['joindate'];
    }
}
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <!--For responsive	-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer</title>

    <!--Bootstrap CSS	-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!--Google Font	-->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Fontawesome icon	-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />


    <!--OWl carousel	-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">

    <!--Style CSS	-->
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>



    </style>

</head>

<body>



    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="top-contact">
                        <ul>
                            <li><a href="tel:+62 800 9000 123"> <i class="fa fa-phone"></i> +880 1767 ** ** ***</a> </li>
                            <li><a href="mailto:mail@yoursite.com"> <i class="fa fa-envelope"></i> mail@gmail.com</a> </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="top-right-info">
                        <ul class="top-social">
                           
                        </ul>

                        <a href="lawyers.php?#lawyers" class="btn btn-primary">book an lowyer</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Top Header -->


    <!--Start Header	-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="../images/logo.png" alt=""  class="position-absolute top-0 start-0"  height='150px' width='150px'></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " href="index.php?">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?#about-section-id">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?#services-section-id">SERVICES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index.php?#contact-us-id">CONTACT</a>
                            </li>
                            <?php
                            $query5 = "select * from appoinments where status='unseen' and lawyer='" . $email . "';";

                            $result5 = $conn->query($query5);
                            $totalUnseen = $result5->num_rows;


                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="appointments.php">Appoinments<sup class="text-danger fs-5">
                                        <?php
                                        if ($totalUnseen != 0) {
                                            echo $totalUnseen;
                                        }

                                        ?>

                                    </sup></a>
                            </li>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $name ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="editprofile.php"> <i class="fa fa-edit"></i> Edit Profile</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="logout.php"> <i class="	fa fa-unlock-alt"></i> Log-Out</a></li>


                                </ul>
                            </div>



                        </ul>

                    </div>
                </div>
            </nav>
        </div>

        <div class="container-fluid">
            <div class="row">
                <form class="d-flex col-md-4 offset-md-8  " role="search" action="lawyers.php?#lawyers" method="get">
                    <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" name="search" required>
                    <button class="btn btn-outline-primary bg-warning" type="submit">Search</button>
                </form>
            </div>
        </div>


    </header>
    <!--End Header	-->




    <!--Start Banner Section	-->
    <section class="banner-section" style="background: url(../images/banner-bg.jpg) no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-text">
                        <h1>Welcome to Lawyer Firm</h1>
                        <p>Law is a set of rules that are created and are enforceable by social or governmental institutions to regulate behavior</p>
                        <div class="btn-main">
                            <a href="index.php?#team-section-id" class="btn btn-primary">Read More</a>
                            <a href="index.php?#quote-section-id" class="btn btn-outline-light">GET A QUOTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section	-->