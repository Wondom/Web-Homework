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
    <title>Document</title>
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
                echo '
                <li class="nav-item" >
                    <a class="nav-link" href="homaPage.php">
                        <form class="logoff"action="php/logoff.php" method="post">
                            <input type="submit" class="logoff" name="logsubmit" id="logsubmit" value="Kijelentkezés">
                        </form>
                    </a>
                </li>'
                ;

            } else {
                echo '<li class="nav-item"><a class="nav-link" href="registryPage.php">Registry</li></a>';
            }
            ?>
        </ul>
        <button id="gomb" onclick="csere('magyar')">Magyar</button>
    </nav>

    <div class="row">
        <?php
        @include 'php/selectProducts.php';
        while ($row = mysqli_fetch_array($result)) {
            $pageName = $row['product_name'].".php";
            $pageName = str_replace(' ', '_', $pageName);
            $pageName = str_replace('-', '_', $pageName);
            echo '
            <div class="card col-sm-12 col-md-3 col-lg-3">
                <img class="card-img-top"  src="img/'.str_replace('.php','.png',$pageName).'" alt="termék" title="termékl"/>                    
                <div class="card-body">
                    <h3 class="card-title">'.$row['product_name'].'</h3>
                    
                     <a href="products/'.$pageName.'" class="btn btn-primary">Tovább a termékre</a>
                </div>
            </div>
                ';
        }
        ?>





    </div>
</body>

</html>