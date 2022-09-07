<?php
include_once 'dbconnection.php';
session_start();

if (isset($_SESSION['user']) && strcmp($_SESSION['user'], "admin") == 0) {
    header("Location:admin");
}

if (isset($_SESSION['user']) && strcmp($_SESSION['user'], "lawyer") == 0) {
    header("Location:lawyer");
}

if (isset($_SESSION['user']) && strcmp($_SESSION['user'], "client") == 0) {
    header("Location:client");
}


?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <!--For responsive	-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Firm</title>

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
    <link rel="stylesheet" href="css/style.css" type="text/css">

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

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="position-absolute top-0 start-0"  height='150px' width='150px'></a>

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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Register
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#lawyerregistermodel">Lawyer</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#clientregistermodel">Client</a></li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Login
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#adminloginmodel">Admin</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#lawyerloginmodel">Lawyer</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#clientloginmodel">Client</a></li>

                                </ul>
                            </li>


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
    <section class="banner-section" style="background: url(images/banner-bg.jpg) no-repeat">
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





    <!--All modeal start-->
    <div class="modal fade" id="adminloginmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Admin login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="adminlogincore.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="lawyerloginmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lawyer login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="lawyerlogincore.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="clientloginmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">client login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="clientlogincore.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="lawyerregistermodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lawyer Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="lawyerregister.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Name</label>
                            <input required name="name" type="text" class="form-control" id="exampleInputName">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Select Category</label>
                            <select required name="category" class="form-select" aria-label="Default select example" id="category">
                                <?php
                                $query = "select * from lawyercategories;";
                                $result = $conn->query($query);

                                if ($result->num_rows > 0) {

                                    while ($row = $result->fetch_assoc()) {

                                        $id = $row['id'];
                                        $category = $row['category'];

                                ?>
                                        <option value="<?php echo $id ?>"><?php echo $category ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputRate" class="form-label">Rate</label>
                            <input required name="rate" type="number" class="form-control" id="exampleInputRate">
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                <textarea name="description" required class="form-control rounded-0" id="exampleFormControlTextarea" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputLocation" class="form-label">Location</label>
                            <input required name="location" type="text" class="form-control" id="exampleInputLocation">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPhoneNumber" class="form-label">Phone Number</label>
                            <input name="phonenumber" required type="text" class="form-control" id="exampleInputPhoneNumber">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPhoneNumber" class="form-label">Bkash Number</label>
                            <input name="bkashnumber" required type="text" class="form-control" id="exampleInputPhoneNumber">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Picture</label>
                            <input name="picture" required class="form-control" type="file" id="formFile">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <div class="modal fade" id="clientregistermodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Client Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="clientregister.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Name</label>
                            <input required name="name" type="text" class="form-control" id="exampleInputName">
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPhoneNumber" class="form-label">Phone Number</label>
                            <input name="phonenumber" required type="text" class="form-control" id="exampleInputPhoneNumber">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Picture</label>
                            <input name="picture" required class="form-control" type="file" id="formFile">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--All modeals End-->