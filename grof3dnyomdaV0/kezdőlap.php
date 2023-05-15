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

    <div class="englishDiv">
        <header id="fej" width="100%">
            <img class="img-fluid" src="képek/fejlec2.jpg" width="100%" height="90%">
        </header>
        <!-- navigációs menü-->
        <nav id="navangol" class="navbar sticky-top navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="kezdőlap.php">Home</li></a>
                <li class="nav-item"><a class="nav-link" href="gépleírás.php">Printers</li></a>
                <li class="nav-item"><a class="nav-link" href="galéria.php">Galery</li></a>
                <li class="nav-item"><a class="nav-link" href="webshop.php">Shop</li></a>
                <li class="nav-item"><a class="nav-link" href="kapcsolat.php">About us</li></a>

            </ul>
            <button id="gomb" onclick="csere('magyar')">Magyar</button>
        </nav>
        <article id="artangol">
            <h2>About us</h2>
            <img src="képek/Rólunk.jpg" class="mainimg">
            <section class="balra">
                <p>Our Gróf-3Dnyomda startup company was formed in the fall of 2019 from a small idea from a common
                    hobby.
                    Our team has 3 members who have engineering and IT degrees by profession.</p>
                <p>Our profile covers 3 things:</p>
                <ul>
                    <li> We're working on 3D modeling </li>
                    <li> Replace missing parts for household appliances </li>
                    <li> Create custom designs </li>
                </ul>
                <p> Our profile covers 3 things: </p>
                <ul>
                    <li> We're working on 3D modeling </li>
                    <li> Replace missing parts for household appliances </li>
                    <li> Create custom designs </li>
                </ul>

                <p> Our future plans: </p>
                <ul>
                    <li> 3D Scanning </li>
                    <li> Usage Device Printing </li>
                    <li> Use powder-based technology </li>
                </ul>
            </section>
            <h2> Our technologies </h2>
            <section class="jobbra">
                <h3> Threaded 3D printing (FDM) </h3>
                <p> Functional and cost-effective. </p>
                <p> This is one of the most well-known printing methods. In this process, the polymer fiber is melted
                    through an extruder to create a layer-by-layer model. </p>
                <p> Ingredients: </p>
                <ul>
                    <li> PLA </li>
                    <li> PETG </li>
                    <li> ABS </li>
                    <li> Special filaments by prior arrangement </li>
                </ul>
                <p> FDM printing cost: </p>
                <ul>
                    <li> PLA 750 HUF / hour </li>
                    <li> PETG 850 HUF / hour </li>
                    <li> ABS 850 HUF / hour </li>
                </ul>
            </section>
            <img src="képek/FDM.jpg" class="mainimg" style="float:left">
            <section class="balra">
                <h3> Stereolithography (SLA) </h3>
                <p> Detail-rich, smooth-surfaced models </p>
                <p> This technology allows you to print extremely precise and detailed models with a perfectly smooth
                    surface </p>
                <p> Benefit: </p>
                <p> Very fast and relatively cost-effective printing. </p>
                <p> Disadvantage: </p>
                <ul>
                    <li> Toxic raw material </li>
                    <li> Aftercare is required </li>
                </ul>
                <p> Ingredients: </p>
                <ul>
                    <li> Standard ingredients are available in colors (orange green white…) </li>
                    <li> Technical materials (flexible elastic ...) </li>
                </ul>
                <img src="képek/SLA.png" class="mainimg">
        </article>
    </div>
    <div class="hungaryDiv">
        <header id="fej" width="100%">
            <img class="img-fluid" src="képek/fejlec2.jpg" width="100%" height="90%">
        </header>
        <!-- navigációs menü-->
        <nav id="navmagyar" class="navbar sticky-top navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="kezdőlap.php">Kezdőlap</li></a>
                <li class="nav-item"><a class="nav-link" href="gépleírás.php">Nyomtatók</li></a>
                <li class="nav-item"><a class="nav-link" href="galéria.php">Galéria</li></a>
                <li class="nav-item"><a class="nav-link" href="webshop.php">Bolt</li></a>
                <li class="nav-item"><a class="nav-link" href="kapcsolat.php">Kapcsolat</li></a>

            </ul>
            <button id="gomb" onclick="csere('angol')">English</button>
        </nav>
        <article id="artmagyar">
            <h2>Rólunk</h2>
            <img src="képek/Rólunk.jpg" class="mainimg">

            <section class="balra">
                <!-- Rólunk-->

                <p>A Gróf-3Dnyomda startup vállalkozásunk 2019 őszén alakult meg egy aprócska ötletből egy közös
                    hobby-ból.
                    Csapatunk 3 taggal rendelkezik akik foglalkozás szerint mérnöki, valamint informatikai végzettséggel
                    rendelkeznek.</p>
                <p>Profilunk 3 dologra tér ki:</p>
                <ul>
                    <li>Foglalkozunk 3 dimenziós modellezéssel</li>
                    <li>Háztartásbeli eszközök hiányzó alkatrészeinek pótlása</li>
                    <li>Egyéni tervezésű minták elkészítése</li>
                </ul>

                <p>Profilunk 3 dologra tér ki:</p>
                <ul>
                    <li>Foglalkozunk 3 dimenziós modellezéssel</li>
                    <li>Háztartásbeli eszközök hiányzó alkatrészeinek pótlása</li>
                    <li>Egyéni tervezésű minták elkészítése</li>
                </ul>

                <p>Jövőbeli terveink:</p>
                <ul>
                    <li>3D scannelés</li>
                    <li>Használati eszköznyomtatás</li>
                    <li>Por alapú technológia használata</li>
                </ul>
            </section>

            <h2>Technológiáink</h2>
            <section class="jobbra">
                <!-- technológia-->


                <h3>Szálhúzós 3D nyomtatás(FDM)</h3>
                <p>Funkcionális és költséghatékony.</p>
                <p>Ez az egyik leginkább köztudatban levő nyomtatási eljárás ezen eljárás során egy extruderen keresztül
                    a
                    polimer szál megolvad és így jön létre rétegről rétegre a modell.</p>
                <p>Alapanyagok:</p>
                <ul>
                    <li>PLA</li>
                    <li>PETG</li>
                    <li>ABS</li>
                    <li>Speciális filamentek előzetes megbeszélés alapján</li>
                </ul>
                <p>FDM nyomtatási költség:</p>
                <ul>
                    <li>PLA 750Ft/óra</li>
                    <li>PETG 850Ft/óra</li>
                    <li>ABS 850Ft/óra</li>
                </ul>
                <p> </p><br>
                <p> </p><br>
            </section>

            <img src="képek/FDM.jpg" class="mainimg" style="float:left;">
            <section class="balra">
                <h3>Sztereolitogáfia (SLA)</h3>
                <p>Részletgazdag, sima felszínű modellek</p>
                <p>EEzzel a technológiával kiemelkedően precíz és részletes modelleket lehet nyomtatni mellyeknek a
                    felülete
                    teljesen sima</p>
                <p>előny:</p>
                <p>Nagyon gyors és viszonylag költséghatékony nyomtatás.</p>
                <p>Hátrány:</p>
                <ul>
                    <li>mérgezős alapanyag</li>
                    <li>utókezelés szükséges</li>
                </ul>
                <p>Alapanyagok:</p>
                <ul>
                    <li>standart alapanyagok választható színűek (narancs zöld fehér…)</li>
                    <li>műszaki alapanyagok (flexible elastic...)</li>

                </ul>
            </section>
            <img src="képek/SLA.png" class="mainimg">
        </article>
    </div>
    <FOOTer>
        <div id="kozepre">
            <a href="https://www.instagram.com/grof3dnyomda/" target=_blank><img
                    src="képek/instagram.png" alt="instagram" width="40px" height="40px"></a>
            <a href="https://www.facebook.com/andras.feszki" target=_blank><img
                    src="képek/facebook.png" alt="facebook" width="40px" height="40px"></a>
            
            <a href="mailto:grof.3dnyomda@gmail.com">
				
			<img src="képek/email.png" alt="email" width="40px" height="40px"></a>
        </div>
    </FOOTer>
</body>

</html>