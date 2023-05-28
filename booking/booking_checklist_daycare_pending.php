<!DOCTYPE html>
<html lang="en">
<?php
//Starting Session
session_start();
?>
<?php
//logged-User Checking
$daycare = $people = $userlogged = "";
if (isset($_SESSION["daycare-name"])) {
    $daycare = $_SESSION['daycare-name'];
}
if (isset($_SESSION["user-name"])) {
    $people = $_SESSION['user-name'];
}

if ($daycare != "") {
    $userlogged = $daycare;
}
if ($people != "") {
    $userlogged = $people;
}
require_once "../config.php";
$booking_id = array();
$k = -1;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap Link-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--Customize css link-->
    <link rel="stylesheet" href="../css/booking.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/footer.css">


    <!--Swiper cdn-->
    <link rel=" stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/swiper.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--comapny logo font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

    <title>Booking Checklist Pending</title>
</head>

<body>


    <header class="header container-fluid">
        <section class="header-in fixed-top">
            <div class="header-1">
                <div id="company-logo"><img src="../images/company-logo-removebg-preview.png" alt="">
                    <a href="#"> Cloud
                        Children </a>
                </div>
                <div class="ms-auto p-1 user-name-top h4 text-success border border-2 border-success rounded">
                    <?php echo $userlogged ?>
                </div>
                <li class="user-drop nav-item dropdown ">
                    <a class="link nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user" id="login-btn"></i>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="user-dropdown">

                        <li><a class="dropdown-item" href="../day-care-regi-login/daycare_edit_profile.php"><i class="fa-solid fa-user"></i> My Profile</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="../day-care-regi-login/daycare-edit.php"><i class="fa-solid fa-tags"></i> Edit Profile</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="./booking_checklist_daycare_pending.php"><i class="fa-solid fa-tags"></i>Pending Booking</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="./confirm.php"><i class="fa-solid fa-tags"></i>Confirmed Booking</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i> Sign
                                out</a></li>


                    </ul>
                </li>
            </div>

            <!--navigation Bar-->

            <nav class="header-2 navigation-bar navbar navbar-expand-lg">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="font-weight: 900"><img src="images/menu-burger.png" style="height: 2rem;" alt=""></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto  ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <?php if (isset($_SESSION['user'])) {
                        ?>

                            <li><a href="../index_user.php" class="nav-link">Home</a></li>
                        <?php

                        } elseif (isset($_SESSION['day_care'])) {
                        ?>

                            <li><a href="../index_daycare.php" class="nav-link">Home</a></li>
                        <?php

                        } else {
                        ?>

                            <li><a href="../index.html" class="nav-link">Home</a></li>
                        <?php

                        } ?>
                        <li><a href="../daycare_categorywise/daycare_categorywise.php" class="nav-link">Available daycares</a></li>
                        <!-- <li><a href="#about" class="nav-link">About Us</a></li>
                        <li><a href="#services" class="nav-link">Services</a></li> -->

                        <!-- <li class="nav-item dropdown">
                            <a class="link nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Child-Care Categories
                            </a>
                            <ul class="dropdown-menu" id="dropmenu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="#">Toddler</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Pre-School</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">School-Age</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Special-Child</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Foreigner-Child</a></li>
                            </ul>
                        </li> -->


                        <li><a href="../parenting_blogs/blogs_home.html" class="nav-link">Parenting-Guides</a></li>
                    </ul>

                </div>

            </nav>


        </section>
    </header>
    <main>

        <div class="container home-sec">
            <h5 class="h1 book-state"><span>Pending Bookings
                </span></h5>

            <?php

            $confirm = "No";
            $query = $mysqli->prepare("SELECT booking_id FROM booking_info WHERE demail=? AND confirmed=?");
            $query->bind_param("ss", $_SESSION['daycare-email'], $confirm);
            $query->execute();
            $result_prev = $query->get_result();
            $query->close();
            ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <?php
                while ($row_prev = $result_prev->fetch_assoc()) {
                    $k++;
                    $booking_id[$k] = $row_prev['booking_id'];
                ?>

                    <div class="row g-4 ms-auto me-auto mb-5 book-state-detail mb-5 ">

                        <div class="col-lg-6 col-6 booking-detail"> <span class="h3 id">Booking Id</span> <span class="info"><?php echo $row_prev['booking_id'] ?></span></div>
                        <?php

                        $m = (string)$row_prev['booking_id'] . '_' . "details";
                        ?>

                        <div class="col-lg-2 col-2"><button class=" see-details" type="submit" name="<?php echo $m; ?>">See details</button></div>
                        <!-- </form> -->
                        <?php
                        $n = (string)$row_prev['booking_id'] . '_' . "confirm";
                        ?>
                        <!-- <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> -->
                        <div class="col-lg-2 col-2"><button class=" confirm-details" type="submit" name="<?php echo $n; ?>">Confirm</button></div>
                        <!-- </form> -->
                        <?php
                        $o = (string)$row_prev['booking_id'] . '_' . "unconfirm";
                        ?>
                        <!-- <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> -->
                        <div class="col-lg-2 col-2"><button class=" deny-details" type="submit" name="<?php echo $o; ?>">Deny</button></div>
                        <br>
                        <br>
                    </div>

                <?php
                }
                ?>
            </form>
            <?php
            for ($i = 0; $i < sizeof($booking_id); $i++) {
                if (isset($_POST[(string)$booking_id[$i] . "_" . "confirm"])) {
                    $confirm = "Yes";
                    $query = $mysqli->prepare("UPDATE  booking_info SET confirmed=?  WHERE booking_id=?");
                    $query->bind_param("si", $confirm, $booking_id[$i]);
                    $query->execute();

                    $query->close();
                }
            }
            for ($i = 0; $i < sizeof($booking_id); $i++) {
                if (isset($_POST[(string)$booking_id[$i] . "_" . "unconfirm"])) {
                    $confirm = "No";
                    $query = $mysqli->prepare("UPDATE  booking_info SET confirmed=?  WHERE booking_id=?");
                    $query->bind_param("si", $confirm, $booking_id[$i]);
                    $query->execute();

                    $query->close();
                }
            }
            for ($i = 0; $i < sizeof($booking_id); $i++) {
                if (isset($_POST[(string)$booking_id[$i] . "_" . "details"])) {
                    $_SESSION['booking_id'] = $booking_id[$i];
                    echo '<script>window.location.href = "book_details_design.php"</script>';
                }
            }

            ?>

        </div>



    </main>
    <footer class="footer-basic ">
        <div class="row d-flex">
            <div class="col-2 company-name">Children Cloud</div>
            <div class="col-1">
                <ul>
                    <li class="list-head">Customers</li>
                    <li class="cust">Day care center</li>
                    <li class="cust">Public</li>
                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li class="list-head">Quick Links</li>
                    <li><a class="footer-link" href="#about">
                            Home</a>
                    </li>
                    <li>
                        <a href="" class="footer-link"></a>
                    </li>
                    <li>
                        <a class="footer-link" href="parenting_blogs/blogs_home.html">Parenting Blog</a>
                    </li>
                    <li>
                        <a href="daycare_categorywise\daycare_categorywise.php" class="footer-link">Day Care
                            Categories</a>
                    </li>

                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li class="list-head">Contributor</li>
                    <li><a class="footer-link" href="https://www.linkedin.com/in/nidita-roy-0537b31b0/"></i>Nidita
                            Roy</a>
                    </li>
                    <li><a class="footer-link" href="https://www.linkedin.com/in/zannatul-fardaush-tripty-8481241b2/">Zannatul Fardaush
                            Tripty</a></li>
                    <li><a class="footer-link" href="https://www.linkedin.com/in/rowshon-akter-roshni-a547461a6/">Rowshon
                            Akter Roshni</a>
                    </li>

                </ul>
            </div>
            <div class="col-3">
                <div class="list-head">Contact Info
                    <ul>
                        <li class="footer-link"><span><i class="fa-solid fa-envelope"></i>
                                u1804018@student.cuet.ac.bd</span>
                        </li>
                        <li class="footer-link"><i class="fa-solid fa-envelope"></i> u1804030@student.cuet.ac.bd
                        </li>
                        <li class="footer-link"><i class="fa-solid fa-envelope"></i> u1804003@student.cuet.ac.bd
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-2">
                <div class="list-head">Follow Us</div>

                <div class="row row-cols-lg-3 row-cols-3 row-cols-md-3">
                    <div class="col"><i class="footer-link fa-brands fa-facebook-square"></i></div>
                    <div class="col"><i class="footer-link fa-solid fa-paper-plane"></i></div>
                    <div class="col"><i class="footer-link fa-brands fa-instagram-square"></i></div>


                </div>
            </div>

        </div>

    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>