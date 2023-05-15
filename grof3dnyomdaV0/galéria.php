<!doctype html>
<html>

<head>
    <!--CSS linkek:-->
    <title>Gróf-3Dnyomda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="gallery.css" />
    <script src="script.js"></script>
    <!-- meta adatok-->
    <meta charset="UTF=8">
</head>

<body>
    <header id="fej" width="100%">
        <img class="img-fluid" src="képek/fejlec2.jpg" width="100%" height="90%">
    </header>
    <div class="hungaryDiv">
        <nav id="navmagyar" class="navbar  navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="kezdőlap.php">Kezdőlap</li></a>
                <li class="nav-item"><a class="nav-link" href="gépleírás.php">Nyomtatók</li></a>
                <li class="nav-item"><a class="nav-link" href="galéria.php">Galéria</li></a>
                <li class="nav-item"><a class="nav-link" href="webshop.php">Bolt</li></a>
                <li class="nav-item"><a class="nav-link" href="kapcsolat.php">Kapcsolat</li></a>
                <li><button id="gomb" onclick="csere()">English</button></li>
            </ul>
        </nav>
    </div>
    <div class="englishDiv">
        <nav id="navangol" class="navbar  navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="kezdőlap.php">Home</li></a>
                <li class="nav-item"><a class="nav-link" href="gépleírás.php">Printers</li></a>
                <li class="nav-item"><a class="nav-link" href="galéria.php">Galery</li></a>
                <li class="nav-item"><a class="nav-link" href="webshop.php">Shop</li></a>
                <li><button id="gomb" onclick="csere()">Magyar</button></li>
            </ul>
        </nav>
    </div>

    <!-- navigációs menü-->


    <!-- Container for the image gallery -->
    <div class="container">

        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="képek/róka.png" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="képek/lo.png" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="képek/auto.png" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="képek/liba.png" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="képek/szobor.png" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="képek/vaza.png" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="képek/róka.png" style="width:100%" onclick="currentSlide(1)"
                    alt="Dobby szabad manó">
            </div>
            <div class="column">
                <img class="demo cursor" src="képek/lo.png" style="width:100%" onclick="currentSlide(2)"
                    alt="Festett ló szobor">
            </div>
            <div class="column">
                <img class="demo cursor" src="képek/auto.png" style="width:100%" onclick="currentSlide(3)"
                    alt="Auto oldalnézettben">
            </div>
            <div class="column">
                <img class="demo cursor" src="képek/liba.png" style="width:100%" onclick="currentSlide(4)"
                    alt="Peace was never an option">
            </div>
            <div class="column">
                <img class="demo cursor" src="képek/szobor.png" style="width:100%" onclick="currentSlide(5)"
                    alt="Mell szobor">
            </div>
            <div class="column">
                <img class="demo cursor" src="képek/vaza.png" style="width:100%" onclick="currentSlide(6)" alt="Váza">
            </div>
        </div>
    </div>
    <script src="gallery.js"></script>
</body>

</html>