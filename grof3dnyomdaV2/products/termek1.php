
        <?php
            @include '../php/config.php';
            session_start();
            $SESSION['productName'] = 'termek1';
        ?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
                    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="../css/nav.css" />
                <link rel="stylesheet" href="../css/products.css" />
                <title>Gróf3dNyomda - <?php
                    echo $SESSION['productName'];
                ?></title>
                
            </head>
            <body>
                <nav id="navangol" class="navbar sticky-top navbar-expand-sm">
                    <ul class="navbar-nav col-sm">
                        <li class="nav-item"><a class="nav-link" href="../homaPage.php">Home</li></a>
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
                                </li>';
                            }else {
                                echo '<li class="nav-item"><a class="nav-link" href="registryPage.php">Registry</li></a>';
                            }
                        ?>

                    </ul>
                    <button id="gomb" onclick="csere('magyar')">Magyar</button>
                </nav>

   
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img src="../img/termek1.png" alt="">
                            <h2>A termék adatai: </h2>
                            <ul>
                                <li><b>Termék megnevezése:</b>termek1 </li>
                                <li><b>Termék ára (1 darab):</b> 121</li>
                                <li><b>Termék alapanyaga:</b>  alma</li>
                                <li><b>Termék színe: </b>alma</li>
                                <li><b>Termék szélessége: </b>12</li>
                                <li><b> termék hosszúság</b>12</li>
                                <li><b>Termék magasság: </b>12</li>
                            </ul>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <h1>termek1</h1>
                        <H2>Rendeld meg most!</H2>
                        
                        <form action="order.php">
                            <label for="productCount">Darabszám: </label>
                            <input class="form-control" type="number" onchange="priceChange()" name="productCount" id="productCount" value="1">
                            <input class="btn" type="submit" name="submit">
                        </form>
                        <p> Összesen: <span id="productPrize">121</span> Ft</P>
                    </div>
                    <div class=" col-sm-12 col-md-12 col-lg-12 messageDiv">
                    <form action="newMessage.php">
                        <textarea class="form-control"name="messagesTA" id="messagesTA" cols="1" rows="10" readonly>
                    <?php 
                        @include '../php/config.php';
                        $sql = 'SELECT * FROM message WHERE message_product LIKE \''.$_SESSION["productName"].'\'';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                            echo $row["message_username"].': '.$row["message_message"]; }
                        } else {
                            $error[] = 'Hiba a lekérdezés végrehajtásában! próbálja újra később!';
                            echo $error[0];
                        }
                    ?>
            </textarea>
            <input class="form-control" type="text" name="messageInput" id="messageInput" required>
            <input class="form-control"  type="submit" name="submit" id="submit">
        </form>
    </div>
    </div>
    <script>
        var element  = document.getElementById("productPrize");
            var prize = parseInt(element.innerHTML);
            
        function priceChange(){
            console.log(productCount.value)
            element.innerHTML = prize*productCount.value;
        }
    </script>
</body>
</html>
    