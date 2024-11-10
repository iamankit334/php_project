<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <style>
        .footer {
            background-color: #FFFFFF;
            padding: 40px 0;
            color: black;
            border-top: 3px solid #FFE7FA;
            border:none;
        }

        .footer h5 {
            color: #000;
            font-weight: bold;
        }

        .footer a {
            color: #000;
            text-decoration: none;
        }

        .footer a:hover {
            color: #2A91E7;
            text-decoration: none;
        }

        .footer p {
            color: #000;
            font-size: 14px;
        }

        .footer ul {
            padding-left: 0;
            list-style-type: none;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer .social-icons a {
            color: #000;
            margin: 0 10px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .footer .social-icons a:hover {
            color: #2A91E7;
        }
    </style>
</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>We are a leading ecommerce platform providing a wide range of products to our customers.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Shop</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="about.php">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: support@ecommerce.com</p>
                    <p>Phone: +91 234 567 890</p>
                    <p>Address: Punjab , India</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="social-icons">
                        <!-- Add social media icons here -->
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p>&copy; <?php echo date("Y"); ?> Ecommerce. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
