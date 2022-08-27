<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>
<?php
$daycare = $people = $userlogged = "";
if (isset($_SESSION["daycare-name"])) {
    $daycare = $_SESSION['daycare-name'];
    $_SESSION['day_care']=TRUE;
}
if (isset($_SESSION["user-name"])) {
    $people = $_SESSION['user-name'];
    $_SESSION['user']=TRUE;
}

if ($daycare != "") {
    $userlogged = $daycare;
}
if ($people != "") {
    $userlogged = $people;
}
$path    = 'images/blogs';
$files = scandir($path);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap Link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Customize css link-->
    <link rel="stylesheet" href="css/style_new.css">
    <link rel="stylesheet" href="css/footer.css">

    <!--Swiper cdn-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/swiper.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!--comapny logo font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

    <title>Children-Cloud as user</title>
</head>

<body>


    <header class="header container-fluid">
        <section class="header-in fixed-top">
            <div class="header-1">
                <div id="company-logo"><img src="images/company-logo-removebg-preview.png" alt="">
                    <a href="#"> Cloud
                        Children </a>
                </div>
                <li class="user-drop nav-item dropdown ">
                    <a class="link nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user" id="login-btn"></i>
                    </a>
                    <div class="ms-auto p-1 user-name-top h4 text-success border border-2 border-success rounded">
                        <?php echo $userlogged ?>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="user-dropdown">

                    <li><a class="dropdown-item" href="user-regi-login/user_edit_profile.php"><i class="fa-solid fa-user"></i> My Profile</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="user-regi-login/user-edit.php"><i class="fa-solid fa-tags"></i> Edit Profile</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="booking/bookig_checklist_user.php"><i class="fa-solid fa-tags"></i> My booking</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Sign
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
                        <li><a href="#home" class="nav-link">Home</a></li>
                        <li><a href="#about" class="nav-link">About Us</a></li>
                        <li><a href="#services" class="nav-link">Services</a></li>
                        <li><a href="daycare_categorywise/daycare_categorywise.php" class="nav-link">Available Daycares</a></li>

                        <!-- <li class="nav-item dropdown">
                            <a class="link nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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


                        <li><a href="parenting_blogs/blogs_home.html" class="nav-link">Parenting-Guides</a></li>
                    </ul>

                </div>

            </nav>


        </section>
    </header>







    <!-- <div class="header-2">
            <nav class="nav-bar navigation-bar">
                <a class="nav-link" href="#home">Home</a>
                <a class="nav-link" href="#services">Services</a>
                <a class="nav-link" href="#about">About Us</a>
                <a class="nav-link" href="#parenting-blogs">Parenting Guide</a>
                <a class="nav-link" href="#">Day Care Categories</a>
                <a class="nav-link" href="#review">Review</a>
            </nav>
        </div> -->

    <div class="conatiner">
        <section class="home-sec container-fluid" id="home">
            <!-- Swiper -->
            <div class="swiper homeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="homepage-img img-fluid " src="images/banner/1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="homepage-img img-fluid" src="images/banner/2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="homepage-img img-fluid" src="images/banner/3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="homepage-img img-fluid" src="images/banner/4.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="homepage-img img-fluid" src="images/banner/autism1.jpg" alt="">
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>



        <br>
        <br>
        <!--About us -->
        <section class="container" id="about">
            <h1 class="heading"> <span>ABOUT US</span> </h1>
            <div class="row mt-5">
                <div class="col-lg-6 about">
                    <img src="images/about/My project.jpg" alt="">
                </div>
                <div class="col-lg-6 about-content">
                    <br>
                    <br>
                    <h3>Best Children Care services With Love</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repudiandae ab quasi, eius
                        deserunt, ratione voluptates tenetur ullam minima reiciendis, odit ea modi? Illo voluptate
                        magnam
                        voluptatum, ullam iusto excepturi!</p>
                </div>
            </div>
        </section>

        <!--ending about section-->

        <!--Services section-->
        <br><br><br><br>

        <section class="container my-5 service-sec" id="services">

            <div style="text-align:center">
                <h1 class="heading"> <span>OUR SERVICES</span></h1>

            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="service-card col">
                    <div class="card border-0  shadow-lg h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title">Toddler Day Care </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="service-card col">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title">Pre-School Day Care</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="service-card col">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title">School-Age Day Care</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>

                </div>


                <div class="service-card col">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title">Special-Child Day Care</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="service-card col">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title">Foreigner-Child Day Care </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="service-card col">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title">Parenting Guide</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Ending Services section-->

        <!--Parenting Guide section-->

        <section class="blogs" id="parenting-blogs">

            <h1 class="heading"> <span>Parenting Guides</span> </h1>
            <div class="container blogs">
                <div class="swiper blogs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide box">
                            <div class="image">
                                <img src="images/blogs/mother_baby.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>The first 90 days of motherhood</h3>
                                <p>Mother, the most beautiful and compassionate call in the world. And how
                                    much every mother has to suffer to hear this
                                    small but wonderful call. Today I will discuss some things to do in the...
                                </p>
                                <a href="#" class="btn">read more</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <div class="image">
                                <img src="images/blogs/development.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Learn about child development, create a better future for children</h3>
                                <p>A good relationship between the child and the parents helps in building
                                    a bright future for the
                                    child.</p>
                                <a href="#" class="btn">read more</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <div class="image">
                                <img src="images/blogs/diaper-change.jpeg" alt="">
                            </div>
                            <div class="content">
                                <h3>24 hrs Diaper</h3>
                                <p>Diapers are an essential product for babies these days. Parents want
                                    to keep babies in
                                    diapers
                                    for most of the day for their child's and their own convenience..</p>
                                <a href="#" class="btn">read more</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <div class="image">
                                <img src="images/blogs/child-breakfast.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Child's breakfast</h3>
                                <p>Mothers wake up every morning and panic about their child's breakfast
                                    or food. And if the
                                    child's age is between one and
                                    five, then there is no word. Because it is at this age that mothers have to
                                    suffer the
                                    most
                                    with baby food..</p>
                                <a href="#" class="btn">read more</a>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                            <div class="image">
                                <img src="images/blogs/guilt-mother.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Parenting and Guilt</h3>
                                <p>As a parent, we all have certain moments in our lives that we don't
                                    want to remember or can say if we had the power to
                                    go back and change the actions of those moments..</p>
                                <a href="#" class="btn">read more</a>
                            </div>
                        </div>
                        <div class="swiper-slide box">
                            <div class="image">
                                <img src="images/blogs/guilt-mother.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>14 Ways Newborn Fathers Can Help Mothers</h3>
                                <p>Breastfeeding the baby in the first few weeks is very difficult for the mother.
                                    At
                                    this time she may be busy
                                    breastfeeding most of the day. As a result...</p>
                                <a href="#" class="btn">read more</a>
                            </div>
                        </div>
                        <div class="swiper-slide box">
                            <div class="image">
                                <img src="images/blogs/guilt-mother.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5>10 foods that help children grow taller</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis a,
                                    voluptates autem perspiciatis facere accusamus dolores maiores sint delectus
                                    unde illo
                                    quisquam odit ad repellat nisi laudantium iure optio recusandae?</p>
                                <a href="" class="btn">read more</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

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
                    <li><a class="footer-link" href="https://www.linkedin.com/in/rowshon-akter-roshni-a547461a6/">Rowshon Akter Roshni</a>
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









    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>

    <!--Bootstrap js-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- custom js file link  -->
    <!--font awsome-->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</body>


</html>