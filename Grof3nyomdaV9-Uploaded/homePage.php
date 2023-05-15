<?php
    @include 'php/config.php';
?>
<!DOCTYPE html>
<html id="html" lang="en" data-bs-theme="<?php echo $_SESSION['color'] ;?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/altalanos.css">
    <script src="darkorlight.js"></script>
    <title>Gróf 3D nyomda</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            Gróf 3D Nyomda
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="homePage.php"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path fill="black"
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="printersPage.php">Printers</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeryPage.php">Galery</a></li>
                    <li class="nav-item"><a class="nav-link" href="shopPage.php">Shop</a></li>
                    <?php
                    if (isset($_SESSION['logged']) and $_SESSION['logged'] == true and $_SESSION['user_name'] == "admin") {

                        echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Admin panel
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="productsUpload.php">Product upload</a></li>
                            <li><a class="dropdown-item" href="orderPage.php">Orders</a></li>
                        </ul>
                    </li>';
                    }
                    if (!(isset($_SESSION['logged']) and $_SESSION['logged'] == true)) {
                        echo '<li class="nav-item"><a class="nav-link" href="registryPage.php">Registry</li></a>';
                    }
                    ?>
                </ul>
                <span class="navbar-text">
                    <a href="chartPage.php" class="btrap-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-basket-fill"
                            viewBox="0 0 16 16">
                            <path fill="black"
                                d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
                        </svg>
                    </a>
                    <?php
                    if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {
                        echo '<a href="accountPage.php" class="btrap-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-person-circle" viewBox="0 0 16 16">
                <path fill="black" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg></li></a>';
                        echo '
        <a href="php/logoff.php" class="btrap-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill="black" fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path  fill="black" fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </a>';
                    }
                    ?>
                    <button id="buttonLight"  style="border:none">
                    <a href="php/darktolight.php">    
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-circle-half"
                            viewBox="0 0 16 16">
                            <path fill="black" fill="black"
                                d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                        </svg>
                </a>
                    </button>
                </span>
            </div>
        </div>
    </nav>
    <!--A weboldal tartalma! -->
    <div class="row">
        <div id="aboutus" class="col-sm-12 col-md-7 col-lg-8">
            <h1 class="fs-1 text text-center font-monospace shadow p-3 mb-5 bg-body-tertiary rounded"
                style="margin-top:10px">About us</h1>
            <p>Our Gróf-3Dnyomda startup company was formed in the fall of 2019 from a small idea from a common
                hobby.
                Our team has 3 members who have engineering and IT degrees by profession.</p>
            <h2 class="text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="margin-top:10px">Our
                profile covers 3
                things:</h2>
            <ul class="list-group">
                <li class="list-group-item"> We're working on 3D modeling </li>
                <li class="list-group-item"> Replace missing parts for household appliances </li>
                <li class="list-group-item"> Create custom designs </li>
            </ul>
            <h2 class="text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="margin-top:10px">
                Our future plans: </h2>
            <ul class="list-group">
                <li class="list-group-item"> 3D Scanning </li>
                <li class="list-group-item"> Usage Device Printing </li>
                <li class="list-group-item"> Use powder-based technology </li>
            </ul>
            <h2 class="text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="margin-top:10px">
                Our technologies </h2>
            <h3> Threaded 3D printing (FDM) </h3>
            <img src="img/FDM.jpg" width="40%" class="img-thumbnail rounded float-start">
            <p> Functional and cost-effective. </p>
            <p> This is one of the most well-known printing methods. In this process, the polymer fiber is melted
                through an extruder to create a layer-by-layer model. </p>
            <h2 class="text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="margin-top:10px">
                Ingredients: </h2>
            <ul class="list-group">
                <li class="list-group-item"> PLA </li>
                <li class="list-group-item"> PETG </li>
                <li class="list-group-item"> ABS </li>
                <li class="list-group-item"> Special filaments by prior arrangement </li>
            </ul>
            <h2 class="text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="margin-top:10px">
                FDM printing cost:
            </h2>
            <ul class="list-group">
                <li class="list-group-item"> PLA 750 HUF / hour </li>
                <li class="list-group-item"> PETG 850 HUF / hour </li>
                <li class="list-group-item"> ABS 850 HUF / hour </li>
            </ul>
            <h2 class="text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="margin-top:10px">
                Stereolithography (SLA)
            </h2>
            <img src="img/SLA.png" width="40%" class="img-thumbnail rounded float-start">
            <p> Detail-rich, smooth-surfaced models </p>
            <p> This technology allows you to print extremely precise and detailed models with a perfectly smooth
                surface </p>
            <h3> Benefit: </h3>
            <ul class="list-group">
                <li class="list-group-item">Very fast and relatively cost-effective printing.</li>
            </ul>
            <h3> Disadvantage: </h3>
            <ul class="list-group">
                <li class="list-group-item"> Toxic raw material </li>
                <li class="list-group-item"> Aftercare is required </li>
            </ul>
            <h3> Ingredients: </h3>
            <ul class="list-group">
                <li class="list-group-item"> Standard ingredients are available in colors (orange green white…)
                </li>
                <li class="list-group-item"> Technical materials (flexible elastic ...) </li>
            </ul>
        </div>
        <?php
        if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {

            echo '<script> 
            document.getElementById("aboutus").className = "col-sm-12 col-md-12 col-lg-12";
           </script>';
        } else {
            ?>
        <div class="col-sm-12 col-md-5 col-lg-4">
            <form id="loginForm" action="php/login.php" method="POST">
                <div class="row mb-3">
                    <h2 class="text-uppercase text-center fs-3 text shadow p-3 mb-5 bg-body-tertiary rounded"
                        style="margin-top:10px">Login</h2>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="userName" id="inputuserName"
                            placeholder="Username">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="password" name="passWord" class="form-control" id="inputPassword3"
                            placeholder="Password">
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" name="submit" type="submit">Login</button>
                </div>
            </form>
        </div>
        <?php }
        ?>
        <footer  class="fs-1 text text-center font-monospace shadow p-3 mb-5 bg-body-tertiary rounded"
                style="margin-top:10px">
        <div>
        <a href="https://www.instagram.com/grof3dnyomda/" target=_blank><img
                    src="img/instagram.png" alt="instagram" width="40px" height="40px"></a>
            <a href="https://www.facebook.com/" target=_blank><img
                    src="img/facebook.png" alt="facebook" width="40px" height="40px"></a>
            
            <a href="mailto:grof.3dnyomda@gmail.com">
				
			<img src="img/email.png" alt="email" width="40px" height="40px"></a>
        </div>
            
        <iframe
            src="https://www.google.hu/maps/place/Gyula,+Kast%C3%A9lykert+u.+16,+5711/@46.6461406,21.3392689,17z/data=!3m1!4b1!4m5!3m4!1s0x4745d70f7cfbe92f:0xa6d6cbe60d282f55!8m2!3d46.6461406!4d21.3414576?hl=hu&authuser=0"
            width="60%" height="500px">

        </footer>
    </div>
</body>

</html>