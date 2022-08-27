<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<?php
$daycare = $people = $userlogged = "";
if (isset($_SESSION["daycare-name"])) {
    $daycare = $_SESSION['daycare-name'];
}
if (isset($_SESSION["user-name"])) {
    $people = $_SESSION['user-name'];
}
//$daycare=$_SESSION['daycare-name'];
//$people=$_SESSION['user-name'];
if ($daycare != "") {
    $userlogged = $daycare;
}
if ($people != "") {
    $userlogged = $people;
}
?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../customize-styles/home.css">
    <link rel="stylesheet" href="../customize-styles/regi-form.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/bc867c7232.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Booking Details</title>
</head>

<body>
    <!-- navigation bar -->
    <div class="container mb-5">
        <nav class="navbar fixed-top navbar-expand-lg">

            <a class="link navbar-brand" href="#">Children-cloud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="link nav-link active" aria-current="page" href="../index.html">Home</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="link nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link" href="#services">Services</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="link nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Child-Care Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

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
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link" href="">Parenting-Guide</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="user-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="user-dropdown">
                            <li><a class="dropdown-item" href="../login-page.html">Log In</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="../register-page.html">Register</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
    </div>
    <!-- Ending navigation bar -->
    <br>
    <div class="outer-box container mt-5 mb-5">
        <div class="row d-flex align-items-center">
            <div class=" col-lg-6 p-3">
                <!-- <img id="form-img" src="images/form/form-todd.jpg" alt=""> -->
                <div class="container thumbnail">
                    <h1>Welcome to Children-cloud!!</h1>
                    <p>
                        Parenting Guide,Daycare, Preschool,School-age,Special-childcare everything in one place for
                        new
                        and young parents.
                    </p>
                </div>
            </div>
            <!----------------------------------Showing Contents--------------------->
            <?php
            $l = $firstname = $lastname = $email = $number = $adress = $nationality = $category = $specialneed = "";
            $firstnameErr = $emailErr = $numberErr = $adressErr = $nationalityErr = $categoryErr = "";
            require_once "../config.php";
            $demail = $_SESSION['daycare-email'];
            $email = $_SESSION['user-email'];
            if (isset($_POST["submit"])) {


                if (empty($_POST["firstname"])) {
                    $firstnameErr = "Please Give Email!";
                } else {
                    $firstname = $_POST["firstname"];
                    $firstnameErr = "";
                }
                $lastname = $_POST["lastname"];
                $adress = $_POST["adress"];

                if (empty($_POST["number"])) {
                    $numberErr = "Please Give Number!";
                } else {
                    $number = $_POST["number"];
                    $numberErr = "";
                }
                if (empty($_POST["nationality"])) {
                    $nationalityErr = "Please Give Nationality!";
                } else {
                    $nationality = $_POST["nationality"];
                    $nationalityErr = "";
                }
                if (empty($_POST["category"])) {
                    $categoryErr = "Please Give Number!";
                } else {
                    $category = $_POST["number"];
                    $categoryErr = "";
                }
                if (empty($_POST["number"])) {
                    $numberErr = "Please Give Number!";
                } else {
                    $number = $_POST["number"];
                    $numberErr = "";
                }
                $specialneed = $_POST["specialneed"];
                if ($firstnameErr == "" && $categoryErr == "" && $nationalityErr == "" && $numberErr == "" && $emailErr == "") {
                    $confirm = "Pending";
                    $query = $mysqli->prepare("INSERT INTO booking_info(demail,bemail,firstname,lastname,number,adress,category,specialneed,confirmed) VALUES (?,?,?,?,?,?,?,?,?)");
                    $query->bind_param("sssssssss", $demail, $email, $firstname, $lastname, $number, $adress, $category, $specialneed, $confirm);


                    if ($query->execute()) {

                        $query->close();
                        $query = $mysqli->prepare("SELECT MAX(booking_id) FROM booking_info  WHERE bemail=? AND demail=? ");
                        $query->bind_param("ss", $email, $demail);
                        $query->execute();
                        $result = $query->get_result();
                        $query->close();
                        $row = $result->fetch_array(MYSQLI_NUM);
                        $_SESSION['booking_id'] = $row[0];
                        $_SESSION['user-email'] = $email;
                        echo '<script>window.location.href = "booking_checklist_user.php"</script>';
                    } else {
                        echo '<p class="container" style="text-align:center" ><b style="color:red">OPPS!!!<b/>Something went wrong!</p>';
                    }
                }
            }




            ?>
            <!-------------------------------Starting Form--------------------------->

            <form class="user-form col-lg-6 pt-5 pb-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <p class="h3 mb-3">Fill up this form for booking </p>

                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" value="<?php echo $firstname; ?>" name="firstname" id="floating-user-fname" placeholder="First Name" required>
                            <label for="floating-user-fname">First Name</label><span style="color:red;font-size:1rem ;">*<?php echo $firstnameErr; ?></span></span>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" value="<?php echo $lastname; ?>" name="lastname" id="floating-user-lname" placeholder="Last Name">
                            <label for="floating-user-lname" required>Last Name</label><span style="color:red;font-size:1rem ;"></span></span>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" value="<?php echo $number; ?>" name="number" id="floating-user-email" placeholder="Phone Number">
                            <label for="floating-user-email" required>Phone Number</label><span style="color:red;font-size:1rem ;">*<?php echo $numberErr; ?></span></span>

                        </div>
                    </div>

                    <!-- <div class="col-lg-6">
                        <div class="form-floating mb-3"><input type="password" class="form-control" name="user-pass"
                                id="floating-user-pass" placeholder="Password" required>
                            <label for="floating-user-pass"><span style="color:red;font-size:1rem ;">*</span>
                                Password</label>
                        </div>
                    </div>-->
                    <div class="col-lg-12">
                        <div class="form-floating mb-3"><input type="text" class="form-control" value="<?php echo $adress; ?>" name="adress" id="floating-user-con-pass" placeholder="Address" required>
                            <label for="floating-user-con-pass">Address</label><span style="color:red;font-size:1rem ;">*<?php echo $adressErr; ?></span></span>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <select id="input-nationality" name="nationality" class="form-select p-3" required>
                            <option value=""><span style="color:red;font-size:1rem ;">*</span> Select your nationality
                            </option>
                            <option value="afghan">Afghan</option>
                            <option value="albanian">Albanian</option>
                            <option value="algerian">Algerian</option>
                            <option value="american">American</option>
                            <option value="andorran">Andorran</option>
                            <option value="angolan">Angolan</option>
                            <option value="antiguans">Antiguans</option>
                            <option value="argentinean">Argentinean</option>
                            <option value="armenian">Armenian</option>
                            <option value="australian">Australian</option>
                            <option value="austrian">Austrian</option>
                            <option value="azerbaijani">Azerbaijani</option>
                            <option value="bahamian">Bahamian</option>
                            <option value="bahraini">Bahraini</option>
                            <option value="bangladeshi">Bangladeshi</option>
                            <option value="barbadian">Barbadian</option>
                            <option value="barbudans">Barbudans</option>
                            <option value="batswana">Batswana</option>
                            <option value="belarusian">Belarusian</option>
                            <option value="belgian">Belgian</option>
                            <option value="belizean">Belizean</option>
                            <option value="beninese">Beninese</option>
                            <option value="bhutanese">Bhutanese</option>
                            <option value="bolivian">Bolivian</option>
                            <option value="bosnian">Bosnian</option>
                            <option value="brazilian">Brazilian</option>
                            <option value="british">British</option>
                            <option value="bruneian">Bruneian</option>
                            <option value="bulgarian">Bulgarian</option>
                            <option value="burkinabe">Burkinabe</option>
                            <option value="burmese">Burmese</option>
                            <option value="burundian">Burundian</option>
                            <option value="cambodian">Cambodian</option>
                            <option value="cameroonian">Cameroonian</option>
                            <option value="canadian">Canadian</option>
                            <option value="cape verdean">Cape Verdean</option>
                            <option value="central african">Central African</option>
                            <option value="chadian">Chadian</option>
                            <option value="chilean">Chilean</option>
                            <option value="chinese">Chinese</option>
                            <option value="colombian">Colombian</option>
                            <option value="comoran">Comoran</option>
                            <option value="congolese">Congolese</option>
                            <option value="costa rican">Costa Rican</option>
                            <option value="croatian">Croatian</option>
                            <option value="cuban">Cuban</option>
                            <option value="cypriot">Cypriot</option>
                            <option value="czech">Czech</option>
                            <option value="danish">Danish</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominican">Dominican</option>
                            <option value="dutch">Dutch</option>
                            <option value="east timorese">East Timorese</option>
                            <option value="ecuadorean">Ecuadorean</option>
                            <option value="egyptian">Egyptian</option>
                            <option value="emirian">Emirian</option>
                            <option value="equatorial guinean">Equatorial Guinean</option>
                            <option value="eritrean">Eritrean</option>
                            <option value="estonian">Estonian</option>
                            <option value="ethiopian">Ethiopian</option>
                            <option value="fijian">Fijian</option>
                            <option value="filipino">Filipino</option>
                            <option value="finnish">Finnish</option>
                            <option value="french">French</option>
                            <option value="gabonese">Gabonese</option>
                            <option value="gambian">Gambian</option>
                            <option value="georgian">Georgian</option>
                            <option value="german">German</option>
                            <option value="ghanaian">Ghanaian</option>
                            <option value="greek">Greek</option>
                            <option value="grenadian">Grenadian</option>
                            <option value="guatemalan">Guatemalan</option>
                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                            <option value="guinean">Guinean</option>
                            <option value="guyanese">Guyanese</option>
                            <option value="haitian">Haitian</option>
                            <option value="herzegovinian">Herzegovinian</option>
                            <option value="honduran">Honduran</option>
                            <option value="hungarian">Hungarian</option>
                            <option value="icelander">Icelander</option>
                            <option value="indian">Indian</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="iranian">Iranian</option>
                            <option value="iraqi">Iraqi</option>
                            <option value="irish">Irish</option>
                            <option value="israeli">Israeli</option>
                            <option value="italian">Italian</option>
                            <option value="ivorian">Ivorian</option>
                            <option value="jamaican">Jamaican</option>
                            <option value="japanese">Japanese</option>
                            <option value="jordanian">Jordanian</option>
                            <option value="kazakhstani">Kazakhstani</option>
                            <option value="kenyan">Kenyan</option>
                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                            <option value="kuwaiti">Kuwaiti</option>
                            <option value="kyrgyz">Kyrgyz</option>
                            <option value="laotian">Laotian</option>
                            <option value="latvian">Latvian</option>
                            <option value="lebanese">Lebanese</option>
                            <option value="liberian">Liberian</option>
                            <option value="libyan">Libyan</option>
                            <option value="liechtensteiner">Liechtensteiner</option>
                            <option value="lithuanian">Lithuanian</option>
                            <option value="luxembourger">Luxembourger</option>
                            <option value="macedonian">Macedonian</option>
                            <option value="malagasy">Malagasy</option>
                            <option value="malawian">Malawian</option>
                            <option value="malaysian">Malaysian</option>
                            <option value="maldivan">Maldivan</option>
                            <option value="malian">Malian</option>
                            <option value="maltese">Maltese</option>
                            <option value="marshallese">Marshallese</option>
                            <option value="mauritanian">Mauritanian</option>
                            <option value="mauritian">Mauritian</option>
                            <option value="mexican">Mexican</option>
                            <option value="micronesian">Micronesian</option>
                            <option value="moldovan">Moldovan</option>
                            <option value="monacan">Monacan</option>
                            <option value="mongolian">Mongolian</option>
                            <option value="moroccan">Moroccan</option>
                            <option value="mosotho">Mosotho</option>
                            <option value="motswana">Motswana</option>
                            <option value="mozambican">Mozambican</option>
                            <option value="namibian">Namibian</option>
                            <option value="nauruan">Nauruan</option>
                            <option value="nepalese">Nepalese</option>
                            <option value="new zealander">New Zealander</option>
                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                            <option value="nicaraguan">Nicaraguan</option>
                            <option value="nigerien">Nigerien</option>
                            <option value="north korean">North Korean</option>
                            <option value="northern irish">Northern Irish</option>
                            <option value="norwegian">Norwegian</option>
                            <option value="omani">Omani</option>
                            <option value="pakistani">Pakistani</option>
                            <option value="palauan">Palauan</option>
                            <option value="panamanian">Panamanian</option>
                            <option value="papua new guinean">Papua New Guinean</option>
                            <option value="paraguayan">Paraguayan</option>
                            <option value="peruvian">Peruvian</option>
                            <option value="polish">Polish</option>
                            <option value="portuguese">Portuguese</option>
                            <option value="qatari">Qatari</option>
                            <option value="romanian">Romanian</option>
                            <option value="russian">Russian</option>
                            <option value="rwandan">Rwandan</option>
                            <option value="saint lucian">Saint Lucian</option>
                            <option value="salvadoran">Salvadoran</option>
                            <option value="samoan">Samoan</option>
                            <option value="san marinese">San Marinese</option>
                            <option value="sao tomean">Sao Tomean</option>
                            <option value="saudi">Saudi</option>
                            <option value="scottish">Scottish</option>
                            <option value="senegalese">Senegalese</option>
                            <option value="serbian">Serbian</option>
                            <option value="seychellois">Seychellois</option>
                            <option value="sierra leonean">Sierra Leonean</option>
                            <option value="singaporean">Singaporean</option>
                            <option value="slovakian">Slovakian</option>
                            <option value="slovenian">Slovenian</option>
                            <option value="solomon islander">Solomon Islander</option>
                            <option value="somali">Somali</option>
                            <option value="south african">South African</option>
                            <option value="south korean">South Korean</option>
                            <option value="spanish">Spanish</option>
                            <option value="sri lankan">Sri Lankan</option>
                            <option value="sudanese">Sudanese</option>
                            <option value="surinamer">Surinamer</option>
                            <option value="swazi">Swazi</option>
                            <option value="swedish">Swedish</option>
                            <option value="swiss">Swiss</option>
                            <option value="syrian">Syrian</option>
                            <option value="taiwanese">Taiwanese</option>
                            <option value="tajik">Tajik</option>
                            <option value="tanzanian">Tanzanian</option>
                            <option value="thai">Thai</option>
                            <option value="togolese">Togolese</option>
                            <option value="tongan">Tongan</option>
                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                            <option value="tunisian">Tunisian</option>
                            <option value="turkish">Turkish</option>
                            <option value="tuvaluan">Tuvaluan</option>
                            <option value="ugandan">Ugandan</option>
                            <option value="ukrainian">Ukrainian</option>
                            <option value="uruguayan">Uruguayan</option>
                            <option value="uzbekistani">Uzbekistani</option>
                            <option value="venezuelan">Venezuelan</option>
                            <option value="vietnamese">Vietnamese</option>
                            <option value="welsh">Welsh</option>
                            <option value="yemenite">Yemenite</option>
                            <option value="zambian">Zambian</option>
                            <option value="zimbabwean">Zimbabwean</option>

                        </select>
                    </div>

                    <div class="cols-lg-12 my-2">
                        <h5>Choose Your Category</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="toddler" checked>
                            <label class="form-check-label" for="toddler">
                                Toddler
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="preschool">
                            <label class="form-check-label" for="preschool">
                                Pre-school
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="schoolage">
                            <label class="form-check-label" for="schoolage">
                                School-Age
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="specialchild">
                            <label class="form-check-label" for="specialchild">
                                Special-Child
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" id="nonbangladeshi">
                            <label class="form-check-label" for="nonbangladeshi">
                                Non-Bangladeshi
                            </label>
                        </div>

                    </div>
                    <div class="cols-lg-12">
                        <h5>Special Needs</h5>
                        <p>Please let us know if you have any special needs for your children</p>
                        <div class="form-floating">
                            <textarea class="form-control" value="<?php echo $specialneed; ?>" name="specialneed" placeholder="Give your special needs" id="specialneed"></textarea>
                            <label for="specialneed">Special needs</label>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100">
                    </div>
                </div>
            </form>
        </div>

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

</html>