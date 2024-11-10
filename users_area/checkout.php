<?php
include('../includes/connect.php');
// include('../functions/common_functions.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Checkout Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <style>
        body {
            background-color: #f8f8f8;
        }

        .upper-nav {
            background-color: #FFE7FA;
        }

        .navbar {
            background-color: #2A91E7;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: #000;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #D7008E;
        }

        .landing {
            background-color: #FFE7FA;
            padding: 50px 0;
        }

        .nav-link {
            font-size: 1.1rem;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #D7008E;
        }

        .btn-outline-primary {
            border-color: #D7008E;
            color: #D7008E;
        }

        .btn-outline-primary:hover {
            background-color: #D7008E;
            color: #fff;
        }

        .navbar-nav .nav-item {
            padding: 0 10px;
        }

        .divider {
            height: 1px;
            background-color: #D7008E;
            margin-top: 30px;
        }

        .text-highlight {
            color: #D7008E;
        }

        .container {
            max-width: 1200px;
        }

        .welcome-message {
            font-size: 1.2rem;
            font-weight: 600;
            color: #D7008E;
        }

    </style>
</head>

<body>
    <!-- upper-nav -->
    <div class="upper-nav p-2 px-3 bg-light border-0 text-center text-black text-truncate" ">
    <span class=" text-black p-2 rounded" style="background-color: #FFE6F9 ">Winter Sale For All Swim Suits And Free Express Delivery - OFF 50%!
    <a href="#" class="text-blue  fw-bold">Shop Now</a>
    </span>
  </div>
    <!-- upper-nav -->

    <!-- Start NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">A1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria -current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./users_area/user_registration.php">Register</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 27V24.3333C24 22.9188 23.5224 21.5623 22.6722 20.5621C21.8221 19.5619 20.669 19 19.4667 19H11.5333C10.331 19 9.17795 19.5619 8.32778 20.5621C7.47762 21.5623 7 22.9188 7 24.3333V27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.5 14C18.9853 14 21 11.9853 21 9.5C21 7.01472 18.9853 5 16.5 5C14.0147 5 12 7.01472 12 9.5C12 11.9853 14.0147 14 16.5 14Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>
                                Welcome guest
                            </span>
                        </a>
                    </li>
                    <?php
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/user_login.php'>
                            Login
                        </a>
                    </li>";
                }else{
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/logout.php'>
                            Logout
                        </a>
                    </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End NavBar -->

    <!-- Start Landing Section -->
    <div class="landing">
        <div class="container">
            <div class="row m-0">
                <?php
                    if(!isset($_SESSION['username'])){
                        include('user_login.php');
                    }else{
                        include('payment.php');
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- End Landing Section -->

    <!-- Divider -->
    <div class="container">
        <div class="divider"></div>
    </div>

    <!-- Start Footer -->
    <div class="upper-nav primary-bg p-2 px-3 text-center text-break" style="background-color: #2A91E7;">
        <span>All CopyRight &copy;2024</span>
    </div>
    <!-- End Footer -->

    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>
