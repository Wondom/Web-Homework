<?php
    @include 'config.php';
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
    <title>Document</title>
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
            if(isset($_SESSION['logged']) and $_SESSION['logged'] == true and $_SESSION['user_name'] == "admin"){
                echo '<li class="nav-item"><a class="nav-link" href="productsUploadPage.php">Áru feltöltése</li></a>';
            }
            

            ?>

        </ul>
        <button id="gomb" onclick="csere('magyar')">Magyar</button>
    </nav>

    <form action="php/productsUpload.php" method="POST">
        <label for="product_name">Product name</label> <br />
        <input type="text" name="product_name" id="product_name" placeholder="Product name" required> <br/>
        <label for="product_price">Product price</label> <br />
        <input type="number" name="product_price" id="product_price" placeholder="Product price" required> <br/>
        <label for="product_name">Product material</label> <br />
        <input type="text" name="product_material" id="product_material" placeholder="Product material" required> <br/>
        <label for="pr_color">Product color</label> <br />
        <input type="text" name="product_color" id="product_color" placeholder="Product color" required> <br/>

        <label for="pr_width">Product width</label> <br />
        <input type="number" name="product_width" id="product_width" placeholder="Product width"> <br/>
        
        <label for="pr_height">Product width</label> <br />
        <input type="number" name="product_height" id="product_height" placeholder="Product pr_height"> <br/>
        
        <label for="pr_lenght">Product length</label> <br />
        <input type="number" name="product_length" id="product_lenght" placeholder="Product length"> <br/>
        <input type="submit" class="submitBtn" id="submit" name="submit" value="Beküldés!">
    </form>

</body>
</html>