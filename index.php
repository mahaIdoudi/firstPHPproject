<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>internmatch</title>

    <!-- slider stylesheet -->
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap"
          rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="responsive.css" rel="stylesheet"/>
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand" href="index.php">
            <span>
             internmatch
            </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="do.html"> What we do </a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact us</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="">
                                <img src="images/user.png" alt="">
                            </a>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="detail-box">
                                    <div>
                                        <h2>
                                            welcome to

                                        </h2>
                                        <h1>
                                            Internmatch
                                        </h1>
                                        <p>
                                            Glad you're here! At Internmatch, we're all about helping you find the
                                            perfect internship. Explore opportunities, get career advice, and take the
                                            first step towards your dream job. Let's get started!
                                        </p>
                                        <div class="">
                                            <a href="">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
    <!-- end slider section -->
</div>


<!-- do section -->

<section class="do_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                What we do
            </h2>
            <p>
                At Internmatch, we help students and graduates find the perfect internships
            </p>
        </div>
        <div class="do_container">
            <label for="categorie-select">Choose a categorie :</label>


            <form method="POST" action="selection.php">

                <select name="categories" id="categorie-select">
                    <option value="">--all categories--</option>
                    <option value="2"> developement web</option>
                    <option value="6"> santé</option>
                    <option value="5">banque</option>
                    <option value="4">centre d'appel</option>
                    <option value="3">agriculture</option>
                    <option value="1">animation</option>
                </select>



            <label for="categorie-select">Choose a type :</label>



                <select name="categories" id="categorie-select">
                    <option value="">--all categories--</option>
                    <option value="2"> developement web</option>
                    <option value="6"> santé</option>
                    <option value="5">banque</option>
                    <option value="4">centre d'appel</option>
                    <option value="3">agriculture</option>
                    <option value="1">animation</option>
                </select>

                <label for="categorie-select">Choose a place :</label>



                    <select name="categories" id="categorie-select">
                        <option value="">--all categories--</option>
                        <option value="2"> developement web</option>
                        <option value="6"> santé</option>
                        <option value="5">banque</option>
                        <option value="4">centre d'appel</option>
                        <option value="3">agriculture</option>
                        <option value="1">animation</option>
                    </select>
                <input type="submit" name="submit"/>
            </form>

        </div>
    </div>
</section>





<!-- end do section -->
<div>
<?php
// Database credentials
$servername = "localhost";
$username = "amine";
$password = "amine3349E";
$dbname = "internships";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to fetch data from 'internship' table
$sql_internship = "SELECT id_categorie, name, ville, numtel ,type FROM internship";
$result_internship = $conn->query($sql_internship);
// SQL query to fetch data from 'company' table

?>

<!DOCTYPE html>
<html>
<head>
    <title>Internship and Company Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<h2>internships</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Ville</th>
        <th>Numtel</th>


    </tr>
    <?php
    if ($result_internship->num_rows > 0) {
        while ($row = $result_internship->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row["id_categorie"]) . "</td><td>" . htmlspecialchars($row["name"]) . "</td><td>" . htmlspecialchars($row["ville"]) . "</td><td>" . htmlspecialchars($row["numtel"]) . "</td></tr>"."<tr><td>" . htmlspecialchars($row["type"]);
        }
    } else {
        echo "<tr><td colspan='4'>No results found</td></tr>";
    }
    ?>
</table>




</div>
<!-- info section -->
<section class="info_section ">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_contact">
                    <h5>
                        About us
                    </h5>
                    <div>


                        <div>
                            <div class="img-box">
                                <img src="images/telephone-white.png" width="12px" alt="">
                            </div>
                            <p>
                                +21620304914
                            </p <br> <br><br><br><br><br><br>>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="images/envelope-white.png" width="18px" alt="">
                            </div>
                            <p>
                                maha.idoudi@isimg.tn
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- end info_section -->


<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        &copy; 2020 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
        Distrubuted By <a href="https://themewagon.com">ThemeWagon</a>
    </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- owl carousel script
  -->
<script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        navText: [],
        center: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });
</script>

<!-- end owl carousel script -->


</body>

</html>
