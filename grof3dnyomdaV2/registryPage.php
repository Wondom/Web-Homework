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
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/registry.css">
    <link rel="stylesheet" href="css/form.css">
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
    <h1>Regisztráció!</h1>      
    <div class="row"> 
        
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form action="php/registry.php" method="post">
                <label class="form-label" for="userName"> Username</label><br />
                <input class="form-control" type="text" name="userName" id="userName" required><br />

                <label class="form-label" for="passWord"> passWord</label><br />
                <input class="form-control" type="password" name="passWord" id="passWord" required><br />

                <label class="form-label" for="userName"> First Name</label><br />
                <input class="form-control"  type="text" name="firstName" id="userName" required><br />

                <label class="form-label" for="passWord"> LasName</label><br />
                <input class="form-control" type="text" name="LastName" id="text" required><br />

                <label class="form-label" for="phoneNumber"> Phone Number</label><br />
                <input class="form-control" type="text" name="phoneNumber" id="phoneNumber">

                <label class="form-label" for="emailAddr"> Email address</label><br />
                <input class="form-control" type="email" name="emailAddr" id="emailAddr" required>

                <input class="btn btn-primary"" type="submit" name="submit" id="submit">
            </form>

        </div>
    </div>
</body>

</html>