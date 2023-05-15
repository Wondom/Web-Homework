<?php
    @include 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/altalanos.css" />
    <title>Gróf3DNyomda - Kezdőlap </title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-sm">
        <ul class="navbar-nav col-sm">
            <li class="nav-item"><a class="nav-link" href="homePage.php"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                    </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="printerPage.php">Printers</a></li>
            <li class="nav-item"><a class="nav-link" href="galeryPage.php">Galery</a></li>
            <li class="nav-item"><a class="nav-link" href="shopPage.php">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="aboutus.php">About us</a></li>
            <?php
            if (isset($_SESSION['logged']) and $_SESSION['logged'] == true and $_SESSION['user_name'] == "admin") {
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Admin Panel</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="productUploadPage.php">Product Upload</a></li>
                        <li><a class="dropdown-item" href="orderPage.php">Orders</a></li>

                    </ul>
                </li>
                <?php
            }
            if (!(isset($_SESSION['logged']) and $_SESSION['logged'] == true)) {
                echo '<li class="nav-item"><a class="nav-link" href="registryPage.php">Registry</li></a>';
            }
            ?>
        </ul>
        <a href="chartPage.php" class="btrap-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-basket-fill"
                viewBox="0 0 16 16">
                <path
                    d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
            </svg>
        </a>
        <?php
        if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {
            echo '<a href="accountPage.php" class="btrap-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg></li></a>';
            echo '
        <a href="php/logoff.php" class="btrap-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </a>';
        }
        ?>
    </nav>
    <div class="row">
        <div id="aboutus" class="col-sm-12 col-md-7 col-lg-8">
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

            <section class="balra">
                <h2>

                    Stereolithography (SLA)

                </h2>
                <img src="img/FDM.jpg" class="img-fluid">
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
                <img src="img/SLA.png" class="mainimg">
            </section>
        </div>

        <?php
        if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {

            echo '<script> 
            document.getElementById("aboutus").className = "justme";
           </script>';
        } else {
            echo '<div class="col-sm-12 col-md-5 col-lg-4">
            <h1> LOGIN </h1>
            <form id="loginForm" action="php/login.php" method="post">
                
                <input class="form-control" type="text" name="userName" id="userName" placeholder="Type username"><br />
                
                <input class="form-control" type="password" name="passWord" id="passWord" placeholder="Type password"><br />
                <input class="btn" type="submit" name="submit" id="submit" value="Login">
            </form>';
        }
        ?>
    </div>
    </div>
</body>

</html>