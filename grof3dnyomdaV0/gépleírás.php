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
    <header id="fej">
        <img class="img-fluid" src="képek/fejlec2.jpg" width="100%" height="90%">
	</header>
    <div class="englishDiv">
        <nav id="navangol" class="navbar sticky-top navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="kezdőlap.php">Home</li></a>
                <li class="nav-item"><a class="nav-link" href="gépleírás.php">Printers</li></a>
                <li class="nav-item"><a class="nav-link" href="galéria.php">Galery</li></a>
                <li class="nav-item"><a class="nav-link" href="webshop.php">Shop</li></a>
                <button id="gomb" onclick="csere()">Nyelvcsere: Magyar</button>
            </ul>
        </nav>
        <article id="artangol">
            <h1 style="text-align:center"> About our machines: </h1>
            <section>
                <p> This site is for those who don't really know how a printer works and what price range they know. We
                    currently have 4 machines, which are briefly explained here, what they know and what their benefits
                    are.
                </p>
            </section>
            <h2> Creality 3D Ender-3 </h2>
            <img src="képek/ender3.jpg" class="mainimg">
            <section class="balra">

                <p> The Ender 3 was the perfect starting printer for us, so we could safely try our wings. Ideal for
                    value
                    for money, the printer is reliable and easy to install. It is no coincidence that most printer farms
                    consist of Ender 3 Machines. </p>
                <p> Ender 3 brings the models to the Cura program, it's a free program that's perfect for most jobs. In
                    this
                    program, as in most such slicing programs, profiles can be created, which greatly facilitates the
                    experimental work. To give an example, let's assume that one of your models is a small figurine that
                    has
                    an internal filling, the next one is a ring or a seal press. In this case, it is ideal to use 2
                    profiles. / p>
                <p> Making Ender a lot easier is because it's a fairly common printer, so you can find a lot of help on
                    other sites and different video sharing portals. </p>
            </section>
            <h2> Creality 3D Ender-5 </h2>
            <img src="képek/ender5.jpg" class="mainimg" style="float:left">
            <section class="jobbra">

                <p> The same is true of how Ender 3 works in that the software has become more reliable and handles it
                    much
                    better if it shuts down during printing due to a power outage. In addition, the Z axis has been
                    given
                    more stiffness so that many side movements will not shake the entire tray, allowing it to do much
                    more
                    precise work. </p>
                <p> Ender 5 is also treated with Cura, which I briefly described above. </p>
            </section>
            <h2> Craftbot 3 </h2>
            <img src="képek/craftbot3.jpg" class="mainimg">
            <section class="balra">

                <p> Craftbot was one of our biggest investments, but it was necessary because the Enders are not able to
                    provide this quality and we are not bound by this printer, as this printer can work with PLA, ABS,
                    TPU,
                    PETG and all kinds of polymers. < / p>
                        <p> With its huge tray size and double head, the Craftbot can do the same in series production.
                            The
                            best example of this was when we started making face shields and mask holders for nearby
                            hospitals at the beginning of the Covid situation. </p>
                        <p> This printer can also be used with Cura, but it doesn't take full advantage of the printer's
                            features, if you don't buy your printer second-hand, you'll get Craftbot's own slicing
                            program,
                            Craftware. this program is much more complex than you might see with Cura. </p>
                        <p> Interesting about Craftbot is that it was primarily a Hungarian product. </p>
            </section>
            <h2> Anycubic Photon S </h2>
            <img src="képek/photon.jpg" class="mainimg" style="float:left">
            <section class="jobbra">

                <p> Well, this is one of our latest printers, and it's the latest technology we've started working on.
                    This
                    printer does not work with molten plastic, but with a liquid called Resin, which it solidifies with
                    UV
                    light. </p>
                <p> There are many pros and cons to this printing technology, but I've detailed this on the home page.
                </p>
                <p> The printer must be used with a completely new program called Photonworkshop, the settings in this
                    program are completely different, as the exposure time must be set here and I will detail its
                    further
                    settings later when I can handle the program perfectly. </p>
            </section>
        </article>
    </div>
    <!-- navigációs menü-->
	
    <div class="hungaryDiv">
        <nav id="navmagyar" class="navbar sticky-top navbar-expand-sm">
            <ul class="navbar-nav col-sm">
                <li class="nav-item"><a class="nav-link" href="kezdőlap.php">Kezdőlap</li></a>
                <li class="nav-item"><a class="nav-link" href="gépleírás.php">Nyomtatók</li></a>
                <li class="nav-item"><a class="nav-link" href="galéria.php">Galéria</li></a>
                <li class="nav-item"><a class="nav-link" href="webshop.php">Bolt</li></a>
                <li class="nav-item"><a class="nav-link" href="kapcsolat.php">Kapcsolat</li></a>
                <button id="gomb" onclick="csere()">English</button>
            </ul>
        </nav>
        <article id="artmagyar">
            <h1 style="text-align:center">Gépeinkről</h1>
            <section>
                <p>Azoknak szólnék ezen az oldalon, akik nem igazán tudják hogyan is működik egy nyomtató és milyen ár
                    kategóriában mit tudnak ezek. Jelenleg 4 géppel rendelkezünk, amelyeket itt röviden ki is fejtek,
                    hogy mit tudnak és mi a hasznuk.</p>
            </section>
            <h2>Creality 3D Ender-3</h2>
            <img src="képek/ender3.jpg" class="mainimg">
            <section class="balra">

                <p>Az Ender 3 tökéletes kezdő nyomtató volt számunkra, amin nyugodtan próbálgathattuk a szárnyainkat.
                    Ár- érték arányban is ideális nyomtató megbízható és könnyen szerelhető. Minőségileg is megfelelő
                    teljesítményt tud nyújtani nem véletlen, hogy a legtöbb nyomtató farm Ender 3 Gépekből áll.</p>
                <p>Az Ender 3 hoz a modelleket a Cura programmal készítjük ez egy ingyenes program, ami tökéletes a
                    legtöbb munkában. Ebben a programban ugyan úgy, mint a legtöbb ilyen szeletelő programban profilokat
                    lehet létrehozni, ami nagyon megkönnyíti a kísérleti munkákat. Hozzak egy példát erre tételezzük
                    fel, hogy az egyik modelled egy kis szobrocska, aminek ugye van belső kitöltése a következő meg egy
                    gyűrű vagy egy pecsét lenyomó ebben az esettben ideális a 2 profil használata az egyiben használunk
                    kitöltést a másikban pedig a falat vastagítjuk meg.</p>
                <p>Nagyon megkönnyíti az Ender használatát az, hogy elég elterjedt nyomtató ezért más oldalakon esettleg
                    a különböző videómegosztó portálokon nagyon sok segítséget lehet hozzá találni.</p>
            </section>
            <h2>Creality 3D Ender-5</h2>
            <img src="képek/ender5.jpg" class="mainimg" style="float:left">
            <section class="jobbra">

                <p>Mindenben megegyezik az Ender 3 működésével kapcsolatban annyiban különbözik, hogy a szoftveresen
                    megbízhatóbb lett sokkal jobban kezeli le azt, ha esettleg nyomtatás közben leáll áramszünet miatt.
                    Továbbá a Z tengelye is kapott több merevítést így a sok oldal irányú mozgás nem fogja
                    berezelgettetni az egész tálcát ez által sokkal precízebb munkát tud végezni.</p>
                <p>Az Ender 5 is a Cura programmal van kezelve, amit röviden fent ismertettem.</p>
            </section>
            <h2>Craftbot 3</h2>
            <img src="képek/craftbot3.jpg" class="mainimg">
            <section class="balra">

                <p>A Craftbot volt az egyik legnagyobb beruházásunk de szükségesé volt hiszen a Enderek képtelenek ezt a
                    minőséget nyújtani valamint ezzel a nyomtatóval nem vagyunk anyagokban sem megkötve ugyanis ezt a
                    nyomtató tud dolgozni PLA,ABS,TPU,PETG és ezeknek minden féle polimerjeivel.</p>
                <p>A Craftbot hatalmas tálca méretével és dupla fejével a sorozatgyártásban is tökéletesen tud
                    teljesíteni erre a legjobb példa az volt amikor a Covid helyzet elején a környékbeli korházaknak
                    kezdtünk el arcpajzsokat és maszk tartókat gyártani.</p>
                <p>Ez a nyomtató használható a Curaval is de nem használja ki a nyomtató minden funkcióját amennyiben az
                    ember nem másodkézből szeri be a nyomtatóját akkor megkapja hozzá a Craftbot saját szeletelő
                    programját a Craftware-t. ez a program sokkal összetettebb, mint az a Cura esetében észrevehető.</p>
                <p>Érdekesség a Craftbotról hogy ez egy magyar termék volt elsősorban.</p>
            </section>
            <h2>Anycubic Photon S</h2>
            <img src="képek/photon.jpg" class="mainimg" style="float:left">
            <section class="jobbra">

                <p>Nos ez az egyik legújabb nyomtatónk, valamint ez a legújabb technológia, amivel elkezdtünk
                    foglalkozni jelenleg mindannyiunk számára tanulás folyamatában van a nyomtató kezelése. Ez a
                    nyomtató ugyanis nem olvasztott műanyaggal dolgozik, hanem egy Resinnek nevezet folyadékkal, amelyet
                    UV fénnyel szilárdít meg.</p>
                <p>Ennek a nyomtatási technológiának nagyon sok előnye és hátránya van, de ezt a kezdőlapon részleteztem
                    már.</p>
                <p>A nyomtató egy teljesen új programmal kell használni, aminek a neve Photonworkshop ebben a programban
                    teljesen mások a beállítások itt ugyanis megvilágítási időt kell állítani és további beállításait
                    később fogom részletezni amikor már tökéletesen tudom kezelni a programot</p>
            </section>
        </article>
    </div>
</body>

</html>