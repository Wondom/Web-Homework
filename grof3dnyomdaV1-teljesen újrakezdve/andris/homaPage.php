<?php
@include 'php/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/homePage.css" />
    <title>Andris </title>
</head>

<body>
    <nav id="navangol" class="navbar sticky-top navbar-expand-sm">
        <ul class="navbar-nav col-sm">
            <li class="nav-item"><a class="nav-link" href="homaPage.php">Home</li></a>
            <li class="nav-item"><a class="nav-link" href="printerPage.php">Printers</li></a>
            <li class="nav-item"><a class="nav-link" href="galeryPage.php">Galery</li></a>
            <li class="nav-item"><a class="nav-link" href="shopPage.php">Shop</li></a>
            <li class="nav-item"><a class="nav-link" href="aboutus.php">About us</li></a>
            <?php
            if (isset($_SESSION['logged']) and $_SESSION['logged'] == true and $_SESSION['user_name'] == "admin") {
                echo '<li class="nav-item"><a class="nav-link" href="productsUploadPage.php">Áru feltöltése</li></a>';
            }
            if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {
                echo '<li class="nav-item"><a class="nav-link" href="accountPage.php">Fiók!</li></a>';
                echo '<li class="nav-item"><a class="nav-link" href="registryPage.php"><form action="php/logoff.php" method="post">
                <input type="submit" class="submitBtn" name="logsubmit" id="logsubmit" value="Kijelentkezés">
            </form></li></a>';

            } else {
                echo '<li class="nav-item"><a class="nav-link" href="registryPage.php">Registry</li></a>';
            }



            ?>

        </ul>
        <button id="gomb" onclick="csere('magyar')">Magyar</button>
    </nav>
    <div class="row">
        <div id="aboutus" class="col-sm-12 col-md-6 col-lg-8">
            <h1>About us</h1>
            <p>Our Gróf-3Dnyomda startup company was formed in the fall of 2019 from a small idea from a common
                hobby.
                Our team has 3 members who have engineering and IT degrees by profession.</p>

            <h2>Our profile covers 3 things:</h2>
            <ul>
                <li> We're working on 3D modeling </li>
                <li> Replace missing parts for household appliances </li>
                <li> Create custom designs </li>
            </ul>
            <h2> Our future plans: </h2>
            <ul>
                <li> 3D Scanning </li>
                <li> Usage Device Printing </li>
                <li> Use powder-based technology </li>
            </ul>
            <h2> Our technologies </h2>
            <section class="jobbra">
                <h3> Threaded 3D printing (FDM) </h3>
                <p> Functional and cost-effective. </p>
                <p> This is one of the most well-known printing methods. In this process, the polymer fiber is melted
                    through an extruder to create a layer-by-layer model. </p>
                <h2> Ingredients: </h2>
                <ul>
                    <li> PLA </li>
                    <li> PETG </li>
                    <li> ABS </li>
                    <li> Special filaments by prior arrangement </li>
                </ul>
                <h2> FDM printing cost: </h2>
                <ul>
                    <li> PLA 750 HUF / hour </li>
                    <li> PETG 850 HUF / hour </li>
                    <li> ABS 850 HUF / hour </li>
                </ul>
            </section>
            <img src="képek/FDM.jpg" class="mainimg" style="float:left">
            <section class="balra">
                <h2> Stereolithography (SLA) </h2>
                <p> Detail-rich, smooth-surfaced models </p>
                <p> This technology allows you to print extremely precise and detailed models with a perfectly smooth
                    surface </p>
                <h3> Benefit: </h3>
                <ul>
                    <li>Very fast and relatively cost-effective printing.</li>
                </ul>
                
                <h3> Disadvantage: </h3>
                <ul>
                    <li> Toxic raw material </li>
                    <li> Aftercare is required </li>
                </ul>
                <h3> Ingredients: </h3>
                <ul>
                    <li> Standard ingredients are available in colors (orange green white…) </li>
                    <li> Technical materials (flexible elastic ...) </li>
                </ul>
                <img src="képek/SLA.png" class="mainimg">
            </section>
        </div>
        
        <?php
        if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {

           echo '<script> 
            document.getElementById("aboutus").className = "col-sm-12 col-md-12 col-lg-12";
           </script>';
        }
        else{
            echo '<div class="col-sm-12 col-md-6 col-lg-4">

            <form action="php/login.php" method="post">
                <label for="userName"> Username</label><br />
                <input type="text" name="userName" id="userName"><br />
                <label for="passWord"> passWord</label><br />
                <input type="password" name="passWord" id="passWord"><br />
                <input type="submit" name="submit" id="submit">

            </form>';
        }
        ?>
        </div>
    </div>
</body>

</html>