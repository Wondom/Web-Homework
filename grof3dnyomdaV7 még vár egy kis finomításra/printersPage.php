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
    <title>Grof 3D Nyomda - Printers</title>
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
    </div>
    </nav>
    <div class="row">
        <h1 class="fs-1 text text-center font-monospace shadow p-3 mb-5 bg-body-tertiary rounded"
            style="margin-top:10px"> About our machines: </h1>
        <div class="col-sm-12">
            <p> This site is for those who don't really know how a printer works and what price range they know. We
                currently have 4 machines, which are briefly explained here, what they know and what their benefits
                are.
            </p>
        </div>
        <div class="card-group">

            <div class="card">
                <img src="img/output-onlinepngtools.png" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded"
                        style="margin-top:10px"> Creality 3D Ender-3 </h2>
                    <p class="card-text"> The Ender 3 was the perfect starting printer for us, so we could safely try
                        our wings. Ideal for
                        value
                        for money, the printer is reliable and easy to install. It is no coincidence that most printer
                        farms
                        consist of Ender 3 Machines. </p>
                    <p class="card-text"> Ender 3 brings the models to the Cura program, it's a free program that's
                        perfect for most jobs. In
                        this
                        program, as in most such slicing programs, profiles can be created, which greatly facilitates
                        the
                        experimental work. To give an example, let's assume that one of your models is a small figurine
                        that
                        has
                        an internal filling, the next one is a ring or a seal press. In this case, it is ideal to use 2
                        profiles. / p>
                    <p class="card-text"> Making Ender a lot easier is because it's a fairly common printer, so you can
                        find a lot of help on
                        other sites and different video sharing portals. </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded"
                        style="margin-top:10px"> Creality 3D Ender-5 </h2>
                    <p class="card-text"> he same is true of how Ender 3 works in that the software has become more
                        reliable and handles it
                        much
                        better if it shuts down during printing due to a power outage. In addition, the Z axis has been
                        given
                        more stiffness so that many side movements will not shake the entire tray, allowing it to do
                        much
                        more
                        precise work.</p>
                    <p class="card-text"> The same is true of how Ender 3 works in that the software has become more
                        reliable and handles it
                        much
                        better if it shuts down during printing due to a power outage. In addition, the Z axis has been
                        given
                        more stiffness so that many side movements will not shake the entire tray, allowing it to do
                        much
                        more
                        precise work. </p>
                    <p class="card-text">Ender 5 is also treated with Cura, which I briefly described above. </p>
                    <img src="img/ender5.jpg" class="card-img-bottom ">
                </div>
            </div>
        </div>
        <div class="card-group">
                  <div class="card">
                <img src="img/craftbot3.jpg" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded"
                        style="margin-top:10px"> Craftbot 3 </h2>
                    <p class="card-text"> Craftbot was one of our biggest investments, but it was necessary because the
                        Enders are not able to
                        provide this quality and we are not bound by this printer, as this printer can work with PLA,
                        ABS,
                        TPU,
                        PETG and all kinds of polymers.</p>
                    <p class="card-text"> With its huge tray size and double head, the Craftbot can do the same in
                        series production.
                        The
                        best example of this was when we started making face shields and mask holders for nearby
                        hospitals at the beginning of the Covid situation. </p>
                    <p class="card-text">This printer can also be used with Cura, but it doesn't take full advantage of
                        the printer's
                        features, if you don't buy your printer second-hand, you'll get Craftbot's own slicing
                        program,
                        Craftware. this program is much more complex than you might see with Cura.</p>
                    <p class="card-text">Interesting about Craftbot is that it was primarily a Hungarian product. </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-uppercase fs-3 text shadow-sm p-3 mb-5 bg-body-tertiary rounded"
                        style="margin-top:10px">Anycubic Photon S </h2>
                    <p class="card-text">Well, this is one of our latest printers, and it's the latest technology we've
                        started working on.
                        This
                        printer does not work with molten plastic, but with a liquid called Resin, which it solidifies
                        with
                        UV
                        light. </p>
                    <p class="card-text"> There are many pros and cons to this printing technology, but I've detailed
                        this on the home page.</p>
                    <p class="card-text">The printer must be used with a completely new program called Photonworkshop,
                        the settings in this
                        program are completely different, as the exposure time must be set here and I will detail its
                        further
                        settings later when I can handle the program perfectly.</p>
                </div>
                <img src="img/photon.jpg" class="card-img-bottom">
            </div>
        </div>
    </div>
</body>
</html>