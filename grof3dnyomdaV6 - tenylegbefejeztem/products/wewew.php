
        <?php
            @include '../php/config.php';
            $_SESSION['productName'] = 'wewew';
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
                <link rel="stylesheet" href="../css/navbar.css" />
                <link rel="stylesheet" href="../css/altalanos.css" />
                <link rel="stylesheet" href="../css/products.css" />
                <title>Gróf3dNyomda</title>
                
            </head>
            <body>
            <nav class="navbar sticky-top navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="../homePage.php"><svg  xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path 
                                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="../printerPage.php">Printers</a></li>
                <li class="nav-item"><a class="nav-link" href="../galeryPage.php">Galery</a></li>
                <li class="nav-item"><a class="nav-link" href="../shopPage.php">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="../aboutus.php">About us</a></li>
                <?php
                if (isset($_SESSION['logged']) and $_SESSION['logged'] == true and $_SESSION['user_name'] == "admin") {
                    ?>    
                    <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Admin Panel</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../productUploadPage.php">Product Upload</a></li>
                <li><a class="dropdown-item" href="../orderPage.php">Orders</a></li>
                
              </ul>
            </li>
                        <?php
                }            
                if (!(isset($_SESSION['logged']) and $_SESSION['logged'] == true)) {
                    echo '<li class="nav-item"><a class="nav-link" href="../registryPage.php">Registry</li></a>';
                }
                ?>
            </ul>
            <a href="../chartPage.php" class="btrap-icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-basket-fill"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
                </svg>
            </a>
            <?php
            if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {
                echo '<a href="../accountPage.php" class="btrap-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg></li></a>';
                echo '
            <a href="../php/logoff.php" class="btrap-icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
            </a>';
            }
            ?>
        </nav>

   
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img src="../img/wewew.png" alt="">
                            <h2>A termék adatai: </h2>
                            <ul>
                                <li><b>Termék megnevezése:</b>wewew </li>
                                <li><b>Termék ára (1 darab):</b> 120Ft-</li>
                                <li><b>Termék alapanyaga:</b>  Lala</li>
                                <li><b>Termék színe: </b>lila</li>
                                <li><b>Termék szélessége: </b>cm</li>
                                <li><b> termék hosszúság</b>cm</li>
                                <li><b>Termék magasság: </b>cm</li>
                            </ul>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <h1>wewew</h1>
                        <H2>Rendeld meg most!</H2>
                        
                        <form action="../php/order.php" method="POST">
                            <label for="productCount">Darabszám: </label>
                            <input class="form-control" type="number" onchange="priceChange()" name="productCount" id="productCount" value="1">
                            <label> Összesen: </lable>
                            <input name="productPrize" id="productPrize" value="120" readonly>
                            <input class="btn" type="submit" name="submit">
                        </form>
                       
                    </div>
                    <div class=" col-sm-12 col-md-12 col-lg-12 messageDiv">
                    <form action="../php/newMessage.php" method="POST">
                        <textarea class="form-control"name="messagesTA" id="messagesTA" cols="1" rows="10" readonly>
                    <?php 
                        @include '../php/config.php';
                        $sql = 'SELECT * FROM messages WHERE message_product LIKE \''.$_SESSION["productName"].'\'';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                            echo $row["message_username"].': '.$row["message_message"]; 
                        echo "\n";}
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
            var prize = parseInt(element.value);
            
        function priceChange(){
            console.log(productCount.value)
            element.value= prize*productCount.value;
        }
    </script>
</body>
</html>
    