<!doctype html>
<html>

<head>
    <!--CSS linkek:-->
    <title>Gróf-3Dnyomda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <script src="script.js"></script>
    <!-- meta adatok-->
    <meta charset="UTF=8">
</head>

<body>
    <header id="fej" width="100%">
        <img class="img-fluid" src="képek/fejlec2.jpg" width="100%" height="90%">
    </header>
    <div class="hungaryDiv">
        <nav id="navmagyar" class="navbar sticky-top navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="kezdőlap.php">Kezdőlap</li></a>
                <li class="nav-item"><a class="nav-link" href="gépleírás.php">Nyomtatók</li></a>
                <li class="nav-item"><a class="nav-link" href="galéria.php">Galéria</li></a>
                <li class="nav-item"><a class="nav-link" href="webshop.php">Bolt</li></a>
                <li class="nav-item"><a class="nav-link" href="kapcsolat.php">Kapcsolat</li></a>
                <a href="rendeles.php"><button id="gomb" type="button">rendelés</button></a>
              
            </ul>
			<button id="gomb" onclick="csere()">English</button>
        </nav>
    </div>
    <!-- navigációs menü-->
    <div class="englishDiv">
        <nav id="navangol" class="navbar sticky-top navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="kezdőlap.php">Home</li></a>
                <li class="nav-item"><a class="nav-link" href="gépleírás.php">Printers</li></a>
                <li class="nav-item"><a class="nav-link" href="galéria.php">Galery</li></a>
                <li class="nav-item"><a class="nav-link" href="webshop.php">Shop</li></a>
                <button id="gomb" onclick="csere()">Magyar</button>
                <a href="rendeles.php"><button type="button">rendelés</button></a>
            </ul>
        </nav>
    </div>

    <div>
        <p Class="arup">Teszla töltő állomás telefonoknak</p>
        <a Class="aru" href="termek1.php"><img class="img-fluid" src="képek/termek1.png" width="30%"></a>
        <p Class="arup">Telefon tartó festőálvány</p>
        <a Class="aru" href="termek2.php"><img class="img-fluid" src="képek/termek2.png" width="30%"></a>
        <p Class="arup">Pillangókés alakű fésű</p>
        <a Class="aru" href="termek3.php"><img class="img-fluid" src="képek/termek3.png" width="30%"></a>
        <p Class="arup">Controller tartó bármilyen Consolehoz</p>
        <a Class="aru" href="termek4.php"><img class="img-fluid" src="képek/termek4.png" width="30%"></a>
        <p Class="arup">Virág váza művirűgoknak</p>
        <a Class="aru" href="termek5.php"><img class="img-fluid" src="képek/termek5.png" width="30%"></a>
    </div>
</body>

</html>