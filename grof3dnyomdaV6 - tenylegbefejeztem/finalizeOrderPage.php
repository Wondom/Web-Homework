<?php 
    @include 'php/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
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
    <form action="php/finalizeOrder.php" method="POST">
    <?php
        
        if (!(isset($_SESSION['logged']) and $_SESSION['logged'] == true)) {
            $userName = 'quest';
            echo '<h2>Enter your name to complete your order.</h2>
                <input type="text" name="firstNameQuest" placeholder="Firstname" required/>
                <input type="text" name="lastNameQuest" placeholder="Lastname" required/>      
                <input type="email" name="emailQuest" placeholder="Email-address" required />      
            ';
        }
        echo '<h2>Please specify which parcel shop you would like to receive your parcel to!</h3>
        <label> Choose:</label>
        <select name="packetChoose">';
        $sql = "SELECT package_point_id, postal_city,  package_point_address FROM package_points, postal_codes
        WHERE postal_code = package_point_postal_code "; 
        //echo $sql;
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo 'Jó ez a lekérdezés';
            while ($row = mysqli_fetch_array($result)) {
                echo '<option value="'.$row['package_point_id'].'"> '. $row['postal_city'].' -' .$row['package_point_address'].'</option>';
            }
        }
        echo '</select>';
    ?>
    <input type="submit" value="Megrendelem!"name="submit">
    </form>
</body>
</html>