<?php
@include 'php/config.php';

?>
<!DOCTYPE html>
<html id="html" lang="en" data-bs-theme="light">

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
    <script>
    function lightordark() {
        var element = document.getElementById("html");
        var theme = element.getAttribute("data-bs-theme");
        if (theme == "light") {
            element.setAttribute("data-bs-theme", 'dark');
            var paths = document.getElementsByTagName("path");
            for (var i = 0; i < paths.length; i++) {
                paths[i].setAttribute('fill', "white")

            }
        } else {
            element.setAttribute("data-bs-theme", 'light');

            var paths = document.getElementsByTagName("path");
            for (var i = 0; i < paths.length; i++) {
                //   alert('Szia!')
                paths[i].setAttribute('fill', "dark")

            }
        }
    }
    </script>
    <title>Gróf 3D Nyomda - Registry</title>
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
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About us</a></li>
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
                    <button id="buttonLight" onclick="lightordark();" style="border:none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-circle-half"
                            viewBox="0 0 16 16">
                            <path fill="black" fill="black"
                                d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                        </svg>
                    </button>
                </span>
            </div>
        </div>
    </nav>

    <h1 class="fs-1 text text-center font-monospace shadow p-3 mb-5 bg-body-tertiary rounded" style="margin-top:10px">
        Registry!</h1>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <form action="php/registry.php" method="post" class="w-75 p-3" style="margin:auto">
                
                <input class="form-control form-control-lg" type="text" name="userName" id="userName" placeholder="Username" required><br />

                

                <input type="password" name="passWord" id="passWord" class="form-control form-control-lg" placeholder="Password" aria-labelledby="passwordHelpBlock" required><br />
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                    spaces, special characters, or emoji.
                </div>

                <div class="row g-3">
                    <div class="col">
                        <input type="text" class="form-control form-control-lg" name="firstName" id="firstName" placeholder="First name" aria-label="First name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-lg" placeholder="Last name"
                            aria-label="Last name" name="lastName" id="lastName" required>
                    </div>
                </div>

                <div class="col-12" style="margin-top:20px">
                    <label class="visually-hidden" for="phoneNumber">Email</label>
                    <div class="input-group">
                        <div class="input-group-text">+36 </div>
                        <input type="tel" class="form-control form-control-lg" id="phoneNumber" required placeholder="70 123 4567" name="phoneNumber" id="phoneNumber" pattern="[0-9]{2} [0-9]{3} [0-9]{4}" >
                    </div>
                </div>
                
                <div class="col-12" style="margin-top:20px">
                    <label class="visually-hidden" for="email">Email</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="email" class="form-control form-control-lg" id="email" name="emailAddr"
                            id="emailAddr" required placeholder="Email">
                    </div>
                </div>
                <div class="d-grid gap-2" style="margin-top:20px">
                <input class="btn btn-primary " type="submit" name="submit" id="submit">
                </div>
            </form>

        </div>
    </div>
</body>

</html>