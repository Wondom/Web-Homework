<?php
if(!empty($_POST["vnev"])&& !empty($_POST["knev"])&& !empty($_POST["Tszam"])&& !empty($_POST["Email"])&& !empty($_POST["cím1"])&& !empty($_POST["cím2"])&& !empty($_POST["Termek"]))
{
	$vnev=$_POST["vnev"];
	$knev=$_POST["knev"];
	$Tszam=$_POST["Tszam"];
	$Email=$_POST["Email"];
	$cím1=$_POST["cím1"];
	$cím2=$_POST["cím2"];
	$Termek=$_POST["Termek"];
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="grof3dnyomda";
		
		$conn=new mysqli($servername,$username, $password, $dbname);
		
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		$sajt="INSERT INTO vasarlo (vnev,knev,telefonszam,email,szallitasicim,lakcim,termek_azon) values('$vnev','$knev','$Tszam','$Email','$cím1','$cím2','$Termek');";
		if ($conn->query($sajt) === TRUE) {
		echo"<script>alert('rendelését rögzítettük')</script>";
	}

	
}
else
{
	echo"<script>alert('Minden mező kitöltése kötelező')</script>";
}
	$_POST["vnev"]=null;
	$_POST["knev"]=null;
	$_POST["Tszam"]=null;
	$_POST["Email"]=null;
	$_POST["cím1"]=null;
	$_POST["cím2"]=null;
	$_POST["Termek"]=null;
?>
<!doctype html>
<html>
<head>
	<!--CSS linkek:-->
	<title>Gróf-3Dnyomda</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="styles.css"/>
	<link rel="stylesheet" href="gallery.css"/>
	<script src ="script.js"></script>
	<!-- meta adatok-->
	<meta charset="UTF=8">
</head>
<body>
	<header id="fej" width="100%">
		<img class ="img-fluid"src="képek/fejlec2.jpg" width="100%" height="90%">
	</header>
	<div class="hungaryDiv">
	<nav id="navmagyar" class="navbar sticky-top navbar-expand-sm">
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
	<nav id="navangol" class="navbar sticky-top navbar-expand-sm">
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
	
	
	<form action="rendeles.php" method="post">
		<label>Vezeték név</label>
		<input type="text" id="vnev" name="vnev"><br>
		<label>Kereszt név</label>
		<input type="text" id="knev" name="knev"><br>
		<label>telefonszam</label>
		<input type="text" id="Tszam" name="Tszam"><br>
		<label>Email cím</label>
		<input type="text" id="Email" name="Email"><br>
		<label>Szállítási cím</label>
		<input type="text"id="cím1" name="cím1"><br>
		<label>Számlázási cím</label>
		<input type="text" id="cím2" name="cím2"><br>
		<label>Termék azonosítók</label>
		<input type="text" id="Termek" name="Termek"><br>
		<input type="submit" value="Rendelés">
	</form>
	<a href="webshop.php"><button type="button">vissza</button></a>
</body>
</html>