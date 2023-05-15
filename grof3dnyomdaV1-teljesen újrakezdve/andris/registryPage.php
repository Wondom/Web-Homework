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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Andris </title>
</head>

<body>
    <nav id="navangol" class="navbar sticky-top navbar-expand-sm">
        <ul class="navbar-nav col-sm">
            <li class="nav-item"><a class="nav-link" href="homaPage.php">Home</li></a>
            <li class="nav-item"><a class="nav-link" href="gépleírás.php">Printers</li></a>
            <li class="nav-item"><a class="nav-link" href="galéria.php">Galery</li></a>
            <li class="nav-item"><a class="nav-link" href="webshop.php">Shop</li></a>
            <li class="nav-item"><a class="nav-link" href="kapcsolat.php">About us</li></a>
            <?php
            if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {
                echo '<li class="nav-item"><a class="nav-link" href="registryPage.php">Fiók!</li></a>';
                echo '<li class="nav-item"><a class="nav-link" href="registryPage.php"><form action="php/logoff.php" method="post">
                <input type="submit" name="logsubmit" id="logsubmit" value="Kijelentkezés">
            </form></li></a>';

            } else {
                echo '<li class="nav-item"><a class="nav-link" href="registryPage.php">Registry</li></a>';
            }
            if (isset($_SESSION['logged']) and $_SESSION['logged'] == true and $_SESSION['user_name'] == "admin") {
                echo '<li class="nav-item"><a class="nav-link" href="productsUploadPage.php">Áru feltöltése</li></a>';
            }


            ?>

        </ul>
        <button id="gomb" onclick="csere('magyar')">Magyar</button>
    </nav>
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Odio euismod lacinia at quis risus sed. Id donec ultrices tincidunt arcu. Elit ut
                aliquam purus sit amet. Integer vitae justo eget magna fermentum. Ultricies tristique nulla aliquet enim
                tortor at auctor urna. Semper auctor neque vitae tempus quam pellentesque. Imperdiet proin fermentum leo
                vel orci porta. Viverra orci sagittis eu volutpat odio. Tempor commodo ullamcorper a lacus vestibulum
                sed arcu non odio. Ullamcorper sit amet risus nullam eget felis eget. Iaculis eu non diam phasellus
                vestibulum lorem sed. In arcu cursus euismod quis viverra nibh cras pulvinar. Aenean euismod elementum
                nisi quis eleifend quam.
            </p>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-6">
            <form action="php/registry.php" method="post">
                <label for="userName"> Username</label><br />
                <input type="text" name="userName" id="userName"><br />

                <label for="passWord"> passWord</label><br />
                <input type="password" name="passWord" id="passWord"><br />

                <label for="userName"> First Name</label><br />
                <input type="text" name="firstName" id="userName"><br />

                <label for="passWord"> LasName</label><br />
                <input type="text" name="LastName" id="text"><br />

                <label for="phoneNumber"> LasName</label><br />
                <input type="text" name="phoneNumber" id="phoneNumber">

                <label for="emailAddr"> LasName</label><br />
                <input type="email" name="emailAddr" id="emailAddr">

                <input type="submit" name="submit" id="submit">
            </form>

        </div>
    </div>
</body>

</html>