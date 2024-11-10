<?php
include './includes/connect.php';
include './functions/common_functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Home Page</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
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
  <nav class="navbar navbar-expand-lg border-0 navbar-light  shadow-sm py-3">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="#">A1</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <!-- PHP-based conditional links for logged-in users -->
          <?php if (isset($_SESSION['username'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="./users_area/profile.php">My Account</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="./users_area/user_registration.php">Register</a>
            </li>
          <?php endif; ?>
        </ul>

        <!-- Search form -->
        <form class="d-flex me-3">
          <input class="form-control me-2" type="search" placeholder="Type.." style="color:white" aria-label="Search">
          <button class="btn btn-outline-primary" style="background-color: #2A91E7;" type="submit">Search</button>
        </form>

        <ul class="navbar-nav mb-2 mb-lg-0">
          <!-- Cart link -->
          <li class="nav-item">
            <a class="nav-link position-relative" href="./cart.php">
              <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 27C11.5523 27 12 26.5523 12 26C12 25.4477 11.5523 25 11 25C10.4477 25 10 25.4477 10 26C10 26.5523 10.4477 27 11 27Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M25 27C25.5523 27 26 26.5523 26 26C26 25.4477 25.5523 25 25 25C24.4477 25 24 25.4477 24 26C24 26.5523 24.4477 27 25 27Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 5H7L10 22H26" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M10 16.6667H25.59C25.7056 16.6667 25.8177 16.6267 25.9072 16.5535C25.9966 16.4802 26.0579 16.3782 26.0806 16.2648L27.8806 7.26479C27.8951 7.19222 27.8934 7.11733 27.8755 7.04552C27.8575 6.97371 27.8239 6.90678 27.7769 6.84956C27.73 6.79234 27.6709 6.74625 27.604 6.71462C27.5371 6.68299 27.464 6.66661 27.39 6.66666H8" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <sup class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php cart_item(); ?>
              </sup>
            </a>
          </li>

          <!-- User greeting and login/logout -->
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-1" href="#">
              <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 27V24.3333C24 22.9188 23.5224 21.5623 22.6722 20.5621C21.8221 19.5619 20.669 19 19.4667 19H11.5333C10.331 19 9.17795 19.5619 8.32778 20.5621C7.47762 21.5623 7 22.9188 7 24.3333V27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16.5 14C18.9853 14 21 11.9853 21 9.5C21 7.01472 18.9853 5 16.5 5C14.0147 5 12 7.01472 12 9.5C12 11.9853 14.0147 14 16.5 14Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <?php
              if (!isset($_SESSION['username'])) {
                echo "<span>Welcome guest</span>";
              } else {
                echo "<span>Welcome " . $_SESSION['username'] . "</span>";
              }
              ?>
            </a>
          </li>

          <!-- Login/Logout links -->
          <?php if (!isset($_SESSION['username'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="./users_area/user_login.php">Login</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="./users_area/logout.php">Logout</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- End NavBar -->

  <!-- Start Landing Section -->

  <div class="landing py-5 bg-light border-0">
    <div class="container">
      <div class="row g-4">
        <!-- Categories Sidebar -->
        <div class="col-lg-3 col-md-4 col-sm-12">
          <h5 class="fw-bold mb-2" style="color:#001F54">Top Brands</h5>
          <div class="d-grid gap-3">
            <a href="#" class="btn btn-outline-primary  btn-md shadow-lg border-0"
              style="background-color: white; color: black;"
              onmouseover="this.style.backgroundColor='#2A91E7'; this.style.color='white';"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
              Apple
            </a>

            <a href="#" class="btn btn-outline-primary btn-md shadow-lg border-0"
              style="background-color: white; color: black;"
              onmouseover="this.style.backgroundColor='#2A91E7'; this.style.color='white';"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
              Samsung
            </a>
            <a href="#" class="btn btn-outline-primary btn-md shadow-lg border-0"
              style="background-color: white; color: black;"
              onmouseover="this.style.backgroundColor='#2A91E7'; this.style.color='white';"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
              Xiaomi
            </a>
            <a href="#" class="btn btn-outline-primary btn-md shadow-lg border-0"
              style="background-color: white; color: black;"
              onmouseover="this.style.backgroundColor='#2A91E7'; this.style.color='white';"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
              Vivo
            </a>
            <a href="#" class="btn btn-outline-primary btn-md shadow-lg border-0"
              style="background-color: white; color: black;"
              onmouseover="this.style.backgroundColor='#2A91E7'; this.style.color='white';"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
              Motorola
            </a>
            <a href="#" class="btn btn-outline-primary btn-md shadow-lg border-0"
              style="background-color: white; color: black;"
              onmouseover="this.style.backgroundColor='#2A91E7'; this.style.color='white';"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
              Realme
            </a>
            <a href="#" class="btn btn-outline-primary btn-md shadow-lg border-0"
              style="background-color: white; color: black;"
              onmouseover="this.style.backgroundColor='#2A91E7'; this.style.color='white';"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
              Boat
            </a>
            <a href="#" class="btn btn-outline-primary btn-md shadow-lg border-0"
              style="background-color: white; color: black;"
              onmouseover="this.style.backgroundColor='#2A91E7'; this.style.color='white';"
              onmouseout="this.style.backgroundColor='white'; this.style.color='black';">
              OnePlus
            </a>
          </div>
        </div>

        <!-- Promo Banner -->
        <div class="col-lg-9 col-md-8">
          <div class="card bg-dark text-white shadow-lg h-100 border-0">
            <img src="assets/images/bg.jpg" class="card-img border-0" alt="Promo Banner">
            <div class="card-img-overlay d-flex flex-column justify-content-end" style="color: #001F54;">
              <h2 class="card-title display-3 fw-bold" style="text-shadow: 1px 1px 5px rgba(255, 255, 255, 0.8); letter-spacing: 1px;">
                iPhone 16 Series
              </h2>
              <p class="card-text fs-3" style="text-shadow: 1px 1px 5px rgba(255, 255, 255, 0.5); line-height: 1.5;">
                Up to 10% Off Voucher
              </p>
              <a href="./products.php"
                class="btn border-0 w-30 fw-bold text-center ms-auto"
                style="background-color:#2A91E7; color: #fff; padding: 10px 20px; border-radius: 50px; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);">
                Shop now &rarr;
              </a>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>

  <!-- End Landing Section -->
  <!-- Start Category  -->
  <div class="category">
    <div class="container">
      <div class="categ-header">
        <div class="sub-title">
          <span class="shape" style="background-color:#001F54"></span>
          <span class="title" style="color:#2A91E7">Categories</span>
        </div>
        <h2 style="color:#001F54">Browse By Category</h2>
      </div>
      <div class="cards">
        <div class="card"
          style="background-color: white; padding: 16px; border-radius: 10px; transition: background-color 0.3s ease;"
          onmouseover="this.style.backgroundColor='#2A91E7';"
          onmouseout="this.style.backgroundColor='white';">
          <span>
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_822_6314)">
                <path d="M38.9375 6.125H17.0625C15.5523 6.125 14.3281 7.34922 14.3281 8.85938V47.1406C14.3281 48.6508 15.5523 49.875 17.0625 49.875H38.9375C40.4477 49.875 41.6719 48.6508 41.6719 47.1406V8.85938C41.6719 7.34922 40.4477 6.125 38.9375 6.125Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M25.6667 7H31.1354" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M28 44.0052V44.0305" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                <line x1="15.1667" y1="39.8334" x2="40.8333" y2="39.8334" stroke="black" stroke-width="2" />
              </g>
              <defs>
                <clipPath id="clip0_822_6314">
                  <rect width="56" height="56" fill="white" />
                </clipPath>
              </defs>
            </svg>

          </span>
          <span>Phones</span>
        </div>
        <div class="card"
          style="background-color: white; padding: 16px; border-radius: 10px; transition: background-color 0.3s ease;"
          onmouseover="this.style.backgroundColor='#2A91E7';"
          onmouseout="this.style.backgroundColor='white';">
          <span>
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_822_6345)">
                <path d="M46.6667 9.33337H9.33333C8.04467 9.33337 7 10.378 7 11.6667V35C7 36.2887 8.04467 37.3334 9.33333 37.3334H46.6667C47.9553 37.3334 49 36.2887 49 35V11.6667C49 10.378 47.9553 9.33337 46.6667 9.33337Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16.3333 46.6666H39.6667" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 37.3334V46.6667" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M35 37.3334V46.6667" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8 32H48" stroke="black" stroke-width="2" stroke-linecap="round" />
              </g>
              <defs>
                <clipPath id="clip0_822_6345">
                  <rect width="56" height="56" fill="white" />
                </clipPath>
              </defs>
            </svg>


          </span>
          <span>Computers</span>
        </div>
        <div class="card"
          style="background-color: white; padding: 16px; border-radius: 10px; transition: background-color 0.3s ease;"
          onmouseover="this.style.backgroundColor='#2A91E7';"
          onmouseout="this.style.backgroundColor='white';">
          <span>
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_822_6335)">
                <path d="M35 14H21C17.134 14 14 17.134 14 21V35C14 38.866 17.134 42 21 42H35C38.866 42 42 38.866 42 35V21C42 17.134 38.866 14 35 14Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 42V49H35V42" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 14V7H35V14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <line x1="24" y1="23" x2="24" y2="34" stroke="black" stroke-width="2" stroke-linecap="round" />
                <line x1="28" y1="28" x2="28" y2="34" stroke="black" stroke-width="2" stroke-linecap="round" />
                <line x1="32" y1="26" x2="32" y2="34" stroke="black" stroke-width="2" stroke-linecap="round" />
              </g>
              <defs>
                <clipPath id="clip0_822_6335">
                  <rect width="56" height="56" fill="white" />
                </clipPath>
              </defs>
            </svg>

          </span>
          <span>SmartWatch</span>
        </div>
        <div class="card"
          style="background-color: white; padding: 16px; border-radius: 10px; transition: background-color 0.3s ease;"
          onmouseover="this.style.backgroundColor='#2A91E7';"
          onmouseout="this.style.backgroundColor='white';">
          <span>
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_822_1222)">
                <path d="M11.6667 16.3334H14C15.2377 16.3334 16.4247 15.8417 17.2998 14.9665C18.175 14.0914 18.6667 12.9044 18.6667 11.6667C18.6667 11.0479 18.9125 10.4544 19.3501 10.0168C19.7877 9.57921 20.3812 9.33337 21 9.33337H35C35.6188 9.33337 36.2123 9.57921 36.6499 10.0168C37.0875 10.4544 37.3333 11.0479 37.3333 11.6667C37.3333 12.9044 37.825 14.0914 38.7002 14.9665C39.5753 15.8417 40.7623 16.3334 42 16.3334H44.3333C45.571 16.3334 46.758 16.825 47.6332 17.7002C48.5083 18.5754 49 19.7624 49 21V42C49 43.2377 48.5083 44.4247 47.6332 45.2999C46.758 46.175 45.571 46.6667 44.3333 46.6667H11.6667C10.429 46.6667 9.242 46.175 8.36683 45.2999C7.49167 44.4247 7 43.2377 7 42V21C7 19.7624 7.49167 18.5754 8.36683 17.7002C9.242 16.825 10.429 16.3334 11.6667 16.3334" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M28 37.3334C31.866 37.3334 35 34.1994 35 30.3334C35 26.4674 31.866 23.3334 28 23.3334C24.134 23.3334 21 26.4674 21 30.3334C21 34.1994 24.134 37.3334 28 37.3334Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_822_1222">
                  <rect width="56" height="56" fill="#000000" />
                </clipPath>
              </defs>
            </svg>


          </span>
          <span>Camera</span>
        </div>
        <div class="card"
          style="background-color: white; padding: 16px; border-radius: 10px; transition: background-color 0.3s ease;"
          onmouseover="this.style.backgroundColor='#2A91E7';"
          onmouseout="this.style.backgroundColor='white';">
          <span>
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_822_4557)">
                <path d="M46.6666 14H9.33329C6.75596 14 4.66663 16.0893 4.66663 18.6667V37.3333C4.66663 39.9107 6.75596 42 9.33329 42H46.6666C49.244 42 51.3333 39.9107 51.3333 37.3333V18.6667C51.3333 16.0893 49.244 14 46.6666 14Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M14 28H23.3333M18.6667 23.3334V32.6667" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M35 25.6666V25.6908" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M42 30.3333V30.3574" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_822_4557">
                  <rect width="56" height="56" fill="white" />
                </clipPath>
              </defs>
            </svg>

          </span>
          <span>Gaming</span>
        </div>
        <div class="card"
          style="background-color: white; padding: 16px; border-radius: 10px; transition: background-color 0.3s ease;"
          onmouseover="this.style.backgroundColor='#2A91E7';"
          onmouseout="this.style.backgroundColor='white';">
          <span>
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_822_1758)">
                <path d="M16.3333 30.3334H14C11.4227 30.3334 9.33331 32.4227 9.33331 35V42C9.33331 44.5774 11.4227 46.6667 14 46.6667H16.3333C18.9106 46.6667 21 44.5774 21 42V35C21 32.4227 18.9106 30.3334 16.3333 30.3334Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M42 30.3334H39.6667C37.0893 30.3334 35 32.4227 35 35V42C35 44.5774 37.0893 46.6667 39.6667 46.6667H42C44.5773 46.6667 46.6667 44.5774 46.6667 42V35C46.6667 32.4227 44.5773 30.3334 42 30.3334Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M9.33331 35V28C9.33331 23.0493 11.3 18.3014 14.8007 14.8007C18.3013 11.3 23.0493 9.33337 28 9.33337C32.9507 9.33337 37.6986 11.3 41.1993 14.8007C44.7 18.3014 46.6666 23.0493 46.6666 28V35" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_822_1758">
                  <rect width="56" height="56" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <span>HeadPhones</span>
        </div>
      </div>
    </div>
  </div>
  <!-- End Category  -->
  <!-- Start Advertise  -->
  <div class="adver" style="padding-top: 20px; padding-bottom: 40px; margin-bottom: 20px;">
    <div class="container">
        <div class="cover"
            style="background-image: url('./assets/images/advertisement.jpg');
                   background-position: center;
                   background-size: cover;
                   height: 60vh;
                   display: flex;
                   flex-direction: column;
                   gap: 25px;
                   align-items: flex-start;
                   justify-content: center;
                   color: white;
                   padding: 70px;">
            <div class="title" style="color: #427ED6; font-weight: bold; font-size: 24px;">
            The convenience of mobile
            </div>
            <div class="desc" style="font-size: 50px;">
            it’s convenient for you.
            </div>
            <button style="background-color: #00FF66;
                           color: #ffffff;
                           padding: 8px 25px;
                           border: none;
                           border-radius: 4px;
                           cursor: pointer;">
                Click Here
            </button>
        </div>
    </div>
</div>

  <!-- End Advertise  -->
  <!-- Start Products  -->
  <div class="products py-5 bg-light">
  <div class="container">
    <!-- Category Header Section -->
    <div class="categ-header text-center mb-5">
      <div class="sub-title d-flex align-items-center justify-content-center mb-2">
        <span class="shape bg-primary rounded-circle d-inline-block me-2" style="width: 10px; height: 10px; background-color: #2A91E7;"></span>
        <span class="title fw-bold fs-5 text-uppercase" style="color: #2A91E7;">Our Products</span>
      </div>
      <h2 class="fw-bold display-6" style="color: #2A91E7;">Explore Our Products</h2>
    </div>

    <!-- Products Row Section -->
    <div class="row mb-5">
      <?php
        // Assuming getProduct function outputs cards with Bootstrap styling
        getProduct(3);
        getIPAddress();
      ?>
    </div>

    <!-- View All Products Button -->
    <div class="view d-flex justify-content-center mt-4">
      <button class="btn btn-lg px-5 py-2 rounded-pill shadow-sm" style="background-color: #2A91E7; color: #ffffff; border: none;" onclick="location.href='./products.php'">
        View All Products
      </button>
    </div>
  </div>
</div>


  <!-- End Products  -->



  <!-- divider  -->
  <!-- <div class="container">
        <div class="divider"></div>
    </div> -->
  <!-- divider  -->




  <!-- Start Footer -->
  <?php include './includes/footer.php'; ?>
  <!-- End Footer -->

  <script src="./assets/js/bootstrap.bundle.js"></script>
</body>

</html>